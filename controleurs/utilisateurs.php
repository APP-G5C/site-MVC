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
					$date = date('Y-m-d');
					$heure = date('H:i:s');
					$_SESSION['mail'] = $mail;
					$req = $bdd->prepare('SELECT id, nom, prenom, photo, statut,age,vision,permis FROM utilisateur WHERE mail = :mail');
					$req->execute(array(
						'mail' => $mail
					));
					$donnees = $req->fetch();
					$_SESSION['id'] = $donnees['id'];
					$_SESSION['nom'] = $donnees['nom'];
					$_SESSION['prenom'] = $donnees['prenom'];
					$_SESSION['photo'] = $donnees['photo'];
					$_SESSION['statut'] = $donnees['statut'];
					$_SESSION['age'] = $donnees['age'];
					$_SESSION['vision'] = $donnees['vision'];
					$_SESSION['permis'] = $donnees['permis'];

					$req->closeCursor();
					$req = $bdd->prepare('INSERT INTO connexion(date, heure, id_utilisateur) VALUES(?,?,?)');
	
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
		case 'recherche':
			$vue = 'recherche';
			$liste = recupererTousLesUtilisateur($bdd);
			if(empty($liste)) {
				$alerte = "Aucune personne inscrite pour le moment";
			}
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
				
				
				$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mail, password, photo,age,vision,permis, statut) VALUES(?, ?, ?, ?, ?,?,?,?, ?)');
				$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_FILES['photo']['name'], $_POST['age'], $_POST['vision'], $_POST['permis'], $statut));
			}
			break;
		case 'deconnexion':
			session_destroy();
			$vue='Bienvenue';
			break;
		case 'donnees':
			$vue='donnees_administrateur';
			$nombreUtilisateurs = nombreUtilisateurs($bdd);
			$nombreConnexionDuJour = nombreConnexionDuJour($bdd);
			break;
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "erreur404";
			$title = "error404";
			$message = "Erreur 404 : la page recherchée n'existe pas.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	
	