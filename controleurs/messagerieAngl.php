<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "messagerieAngl";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'messagerieAngl':
			$vue = 'messagerie_administrateurAngl';
			$liste = recupererTousLesMessages($bdd, $_SESSION['id']);
			break;
		case 'envoyerAngl':
			$vue = 'envoyer_messageAngl';
			if (isset($_POST['mail'])) {
				$mail = $_POST['mail'];
//				$query = 'SELECT id FROM utilisateur WHERE mail = ' . $_POST['mail'];
				
				$req = $bdd->prepare('SELECT id FROM utilisateur WHERE mail = :mail');
				$req->execute(array(
					'mail' => $mail
				));
				$donnees = $req->fetch();
				$date = date('Y-m-d H:i:s');
				$req = $bdd->prepare('INSERT INTO messagerie(message,  id_envoyeur,date, id_recepteur) VALUES(?,?, ?,?)');
				$req->execute(array($_POST['message'], $_SESSION['id'],$date, $donnees[0]));
			}
			break;
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "error404";
			$title = "error404";
			$message = "404 Error : This page does not exist";
		
	}
	
	
	include('vues/' . $vue . '.php');
	
