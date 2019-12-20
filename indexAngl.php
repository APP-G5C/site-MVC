<?php
	ini_set('display_errors',1);
	include("controleurs/fonctionsAngl.php");
	
	if(isset($_GET['cible']) && !empty($_GET['cible'])) {
		// Si la variable cible est passé en GET
		$url = $_GET['cible']; //user, sensor, etc.
		
	} else {
		// Si aucun contrôleur défini en GET, on bascule sur utilisateurs
		$url = 'utilisateurs';
	}
	include("controleurs/" . $url . ".php");
