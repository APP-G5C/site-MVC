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
		case 'lancertestAngl':
			$vue = "lancertestAngl";
			break;
		case 'testAngl':
			$vue="testAngl";
			$id=$_SESSION['id'];
			$date = date('Y-m-d');
			$freqcard = rand(60,100);
			$temp = rand(36,40);
			$seuilinf = rand(20, 1000);
			$seuilsup = rand(15000,20000);
			$reconton = rand(0,100);
			$reprodmotifs = rand(0,100);
			
			$req = $bdd->prepare('INSERT INTO  score(frequenceCardiaque, TemperaturePeau, PerceptionAuditiveInf, PerceptionAuditiveSup, ReconTonalites,ReprodMotifsSonore,date,id_utilisateur) VALUES(?, ?, ?, ?,?,?,?,?)');
			
			$req->execute(array($freqcard, $temp, $seuilinf,$seuilsup ,$reconton,$reprodmotifs,$date,$id));
			break;
		case 'modifAngl':
			$vue = "modif_capteurAngl";
			break;
		
		
		
		
		default:
			// si aucune fonction ne correspond au paramètre function passé en GET
			$vue = "error404";
			$title = "error404";
			$message = "404 Error : this page does not exist.";
			break;
		
	}
	
	
	include('vues/' . $vue . '.php');
	
