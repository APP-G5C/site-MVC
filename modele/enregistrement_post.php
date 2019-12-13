<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=site app;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	
	if (isset($_FILES['photo']['tmp_name'])) {
		$retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
		
	}
	echo $_POST['statut'];
	if ($_POST['statut'] == "checked") {
		$statut = 1;
	} else {
		$statut = 0;
	}
	
	
	
	$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mail, password, photo, statut) VALUES(?, ?, ?, ?, ?, ?)');
	$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'],$_FILES['photo']['name'], $statut ));
	header('Location: enregistrement.php');

?>