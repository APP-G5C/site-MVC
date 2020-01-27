<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	
	
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "bienvenueAngl";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'bienvenueAngl':
			

			$vue = "BienvenueAngl";
			$title = "BienvenueAngl";
			break;
		case 'connexionAngl':
			$vue = "connexionAngl";
			
			
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
					echo 'Wrong ID or password !';
				} else {
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
					
					
					echo 'Logged in';
					if ($_SESSION['statut'] == 1) {
						$vue = "Menu_administrateurAngl";
						
					} else {
						$vue = "Menu_utilisateurAngl";
						
					}
					
					
				}
				
				
			}
			break;
		case 'profilAngl':
			$vue = "profilAngl";
			break;
		case 'profilAdminAngl':
			$vue = "profil_administrateurAngl";
			break;
		case 'utilisateursAngl':
			$vue = 'utilisateurs_administrateurAngl';
			break;
		case 'rechercheAngl':
			$vue = 'rechercheAngl';
			$liste = recupererTousLesUtilisateur($bdd);
			if(empty($liste)) {
				$alerte = "Aucune personne inscrite pour le moment";
			}
			break;
		case 'CreerCompteAngl':
			$vue = 'creercompteAngl';
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
		case 'deconnexionAngl':
			session_destroy();
			$vue='BienvenueAngl';
			break;
		case 'donnees_administrateurAngl':
			$vue='donnees_administrateurAngl';
			$nombreUtilisateurs = nombreUtilisateurs($bdd);
			$nombreConnexionDuJour = nombreConnexionDuJour($bdd);
			$liste = recupererToutLesScores($bdd);
			break;
		
		case 'ScoreAngl':
			$vue='ScoreAngl';
			$liste = recupererScore($bdd,$_SESSION['id']);
			break;
		
		case 'Score_adminAngl':
			$vue='Score_adminAngl';
			$liste = recupererScore($bdd,$_GET['id']);
			$nombreUtilisateurs = nombreUtilisateurs($bdd);
			$nombreConnexionDuJour = nombreConnexionDuJour($bdd);
			break;
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "error404";
			$title = "error404";
			$message = "404 Error : this page does not exist.";
		
	}
	
	
	include('vues/' . $vue . '.php');
