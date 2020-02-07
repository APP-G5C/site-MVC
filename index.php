<?php
	
	ini_set('display_errors', 1);
	
	if (isset($_GET['lang'])) {
		
		//Si oui, on créer une variable $lang avec pour valeur celle du cookie.
		$lang = $_GET['lang'];
		
	} else {
		// si le cookie n'existe pas on tente de reconnaitre la langue par défaut du navigateur utilisé
		$lang = 'fr';
	}
	
	if (isset($_GET['cible']) && !empty($_GET['cible'])) {
		// Si la variable cible est passé en GET
		$url = $_GET['cible']; //user, sensor, etc.
		
	} else {
		// Si aucun contrôleur défini en GET, on bascule sur utilisateurs
		switch ($lang) {
			case 'fr':
				$url = 'utilisateurs';
				break;
			case 'en':
				$url = "utilisateursAngl";
				break;
		}
		
	}
	
	include("controleurs/" . $url . ".php");