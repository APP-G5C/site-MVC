<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/messagerie_administrateurCSS.css">
</head>
<body>
<?php include("headerAdmin.php"); ?>
<div class="bg">
	
	
	<br>
	<br>
	
	<button class="button"><a style="color:white; text-decoration:none" href="index.php?cible=messagerie&fonction=envoyer">Envoyer un message</a></button>
		
		
		
		
		<?php foreach ($liste as $element) {
			$recepteur = recupererNomPrenom($bdd, $element['id_recepteur']);
			$emetteur = recupererNomPrenom($bdd, $element['id_envoyeur']);
			
			?>
			
			
		<p>	 <?php  echo 'Emetteur : ' . $emetteur['nom'] . ' ' . $emetteur['prenom'] . '<br/>Recepteur : ' . $recepteur['nom'] . ' ' . $recepteur['prenom'] . '<br/>' .  $element['date'] . '<br/>' . $element['message'] ;	?></p><?php
		
		} ?>
	
</div>

<style>
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}
	
	/* Track */
	::-webkit-scrollbar-track {
		background: #f1f1f1;
		opacity: 0.5;
	}
	
	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888;
		opacity : .5;
	}
	
	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555;
		opacity: 0.5;
		
	}
</style>
</body>
</html>
