<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "messagerie";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'messagerie':
			$vue = 'messagerie_administrateur';
			$liste = recupererTousLesMessages($bdd, $_SESSION['id']);
			if (empty($liste)) {
				$alerte = "Aucun message pour l'instant";
			}
			break;
		case 'envoyer':
			$vue = 'envoyer_message';
			if (isset($_POST['mail'])) {
				$mail = $_POST['mail'];
//				$query = 'SELECT id FROM utilisateur WHERE mail = ' . $_POST['mail'];
				
				$req = $bdd->prepare('SELECT id FROM utilisateur WHERE mail = :mail');
				$req->execute(array(
					'mail' => $mail
				));
				$donnees = $req->fetch();
				if (!$donnees) {
					echo 'Adresse mail invalide';
				} else {
					$date = date('Y-m-d H:i:s');
					$req = $bdd->prepare('INSERT INTO messagerie(message,  id_envoyeur,date, id_recepteur) VALUES(?,?, ?,?)');
					$req->execute(array($_POST['message'], $_SESSION['id'], $date, $donnees[0]));
				}
			}
			break;
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "erreur404";
			$title = "error404";
			$message = "Erreur 404 : la page recherchée n'existe pas.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	