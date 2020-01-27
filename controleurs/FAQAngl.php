<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "FAQAdminAngl";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		
		case 'FAQAdminAngl':
			$vue = "FAQ_administrateurAngl";
			$liste = recupererTouteLaFAQ($bdd);
			if(empty($liste)) {
				$alerte = "There is not any question in the Q&A yet";
			}
			break;
		case 'GCUAngl':
			$vue = "GCUAngl";
			break;
		case 'FAQAngl':
			$vue = "FAQAngl";
			$liste = recupererTouteLaFAQ($bdd);
			if(empty($liste)) {
				$alerte = "There is not any question in the Q&A yet";
			}
			break;
		case 'modifierFAQAngl':
			$vue= "FAQmodifierAngl";
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
			$vue = "404 error";
			$title = "404 error";
			$message = "404 Error : this page does not exist.";
		
	}
	
	
	include('vues/' . $vue . '.php');
