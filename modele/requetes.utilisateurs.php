<?php
	
	include("modele/connexion.php");
	
	function recupereTous(PDO $bdd, string $table): array
	{
		$query = 'SELECT * FROM ' . $table;
		return $bdd->query($query)->fetchAll();
	}
	
	
	function rechercheParMail(PDO $bdd, string $mail): array
	{
		
		$statement = $bdd->prepare('SELECT * FROM  utilisateur WHERE mail = :mail');
		$statement->bindParam(":mail", $value);
		$statement->execute();
		
		return $statement->fetchAll();
		
	}
	
	function recupererTouteLaFAQ(PDO $bdd): array
	{
		$query = 'SELECT * FROM faq';
		return $bdd->query($query)->fetchAll();
		
	}

	function recupererTousLesUtilisateur(PDO $bdd): array
	{
		$query = 'SELECT * FROM utilisateur';
		return $bdd->query($query)->fetchAll();
		
	}
	
	function recupererCapteurs(PDO $bdd, int $ID): array
	{
		$query = 'SELECT * FROM capteurs WHERE id_carte = ' . $ID;
		return $bdd->query($query)->fetchAll();
	}
	
	
	function recupererTousLesMessages(PDO $bdd, int $ID): array
	{
		$query = 'SELECT * FROM messagerie WHERE id_envoyeur = ' . $ID . ' OR id_recepteur = ' . $ID . ' ORDER BY date DESC ' ;
		
		return $bdd->query($query)->fetchAll();
	}
	
	function recupererNomPrenom($bdd, int $ID)
	{
		$query = 'SELECT nom, prenom FROM utilisateur WHERE id =' . $ID;
		return $bdd->query($query)->fetch();
	}
	
	function nombreUtilisateurs($bdd){
		$query = 'SELECT COUNT(id) FROM utilisateur WHERE statut = 0 ';
		$nombre =  $bdd->query($query)->fetch();
		return $nombre[0];
	}
	
	function nombreConnexionDuJour($bdd){
		$date = date('Y-m-d');
		$query = 'SELECT COUNT(id_connexion) FROM connexion WHERE date = "' . $date . '"';
		$nombre = $bdd->query($query)->fetch();
		return $nombre[0];
	}
	
