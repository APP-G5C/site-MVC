<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "capteurs";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'capteurs':
			$vue="capteurs";
			$ListCarte = $bdd->query('SELECT ID_carte FROM carte');
			break;
		case 'lancertest':
			$vue = "lancertest";
			break;
		case 'test':
			$vue="test";
			$freqcard = rand(60,100);
			$temp = rand(36,40);
			$seuilinf = rand(20, 1000);
			$seuilsup = rand(15000,20000);
			$reconton = rand(0,100);
			$reprodmotifs = rand(0,100);
			break;
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "erreur404";
			$title = "error404";
			$message = "Erreur 404 : la page recherchée n'existe pas.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	