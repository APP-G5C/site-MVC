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
	
	function recupererCapteurs(PDO $bdd, int $ID): array
	{
		$query = 'SELECT * FROM capteurs WHERE id_carte = ' . $ID;
		return $bdd->query($query)->fetchAll();
	}
