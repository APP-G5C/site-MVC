<?php
	session_start();
	
	include('./modele/requetes.utilisateurs.php');
	if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
		$function = "capteursAngl";
	} else {
		$function = $_GET['fonction'];
	}
	
	
	switch ($function) {
		case 'capteursAngl':
			$vue="capteursAngl";
			$ListCarte = $bdd->query('SELECT ID_carte FROM carte');
			break;
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "error404";
			$title = "error404";
			$message = "404 Error : this page does not exist.";
		
	}
	
	
	include('vues/' . $vue . '.php');
	
