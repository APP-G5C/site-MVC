<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	
	
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "bienvenue";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'bienvenue':
			$vue = "Bienvenue";
			$title = "Bienvenue";
			break;
		case 'connexion':
			$vue = "connexion";
			
			
			if (isset($_POST['mail']) and isset($_POST['password'])) {
				$mail = $_POST['mail'];
				$password = $_POST['password'];
				
				
				$req = $bdd->prepare('SELECT id, nom, prenom FROM utilisateur WHERE mail = :mail && password = :password ');
				$req->execute(array(
					'mail' => $mail,
					'password' => $password,
				));
				$resultat = $req->fetch();
				$req->closeCursor();
				if (!$resultat) {
					echo 'Mauvais identifiant ou mot de passe !';
				} else {
					$_SESSION['mail'] = $mail;
					$req = $bdd->prepare('SELECT nom, prenom, photo, statut FROM utilisateur WHERE mail = :mail');
					$req->execute(array(
						'mail' => $mail
					));
					$donnees = $req->fetch();
					$_SESSION['nom'] = $donnees['nom'];
					$_SESSION['prenom'] = $donnees['prenom'];
					$_SESSION['photo'] = $donnees['photo'];
					$_SESSION['statut'] = $donnees['statut'];
					$req->closeCursor();
					
					
					echo 'Vous êtes connecté !';
					if ($_SESSION['statut'] == 1) {
						$vue = "Menu_administrateur";
						
					} else {
						$vue = "Menu_utilisateur";
						
					}
					
					
				}
				
				
			}
			break;
		case 'profil':
			$vue = "profil";
			break;
		case 'profilAdmin':
			$vue = "profil_administrateur";
			break;
		case 'utilisateurs':
			$vue = 'utilisateurs_administrateur';
			break;
		case 'CreerCompte':
			$vue = 'creercompte';
			if (isset($_POST['mail']) ) {
				
				
				if (isset($_FILES['photo']['tmp_name'])) {
					$retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
					
				}
				$Statut = isset($_POST['statut']) ? $_POST['statut'] : NULL;
				if ($Statut == "checked") {
					$statut = 1;
				} else {
					$statut = 0;
				}
				
				
				$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mail, password, photo, statut) VALUES(?, ?, ?, ?, ?, ?)');
				$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_FILES['photo']['name'], $statut));
			}
			break;
		case 'deconnexion':
			session_destroy();
			$vue='Bienvenue';
			break;
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "erreur404";
			$title = "error404";
			$message = "Erreur 404 : la page recherchée n'existe pas.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	
	