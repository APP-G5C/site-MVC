<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "FAQAdmin";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		
		case 'FAQAdmin':
			$vue = "FAQ_administrateur";
			$liste = recupererTouteLaFAQ($bdd);
			if(empty($liste)) {
				$alerte = "Aucune question dans la FAQ pour le moment";
			}
			break;
		case 'FAQ':
			$vue = "FAQ";
			$liste = recupererTouteLaFAQ($bdd);
			if(empty($liste)) {
				$alerte = "Aucune question dans la FAQ pour le moment";
			}
			break;
		case 'modifierFAQ':
			$vue= "FAQmodifier";
			if (isset($_POST['reponse'])) {
				$req = $bdd->prepare('INSERT INTO faq(Question, Réponse) VALUES(:Q,:R)');
				$req->execute(array('Q' => $_POST['question'], 'R' => $_POST['reponse']));
			}
			if (isset($_POST['idSuppr'])){
				$req = $bdd->prepare('DELETE FROM faq WHERE id=:I');
				$req->execute(array('I' => $_POST['idSuppr']));
			}
			break;
		
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "erreur404";
			$title = "error404";
			$message = "Erreur 404 : la page recherchée n'existe pas.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	