<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/messagerie_administrateurCSS.css">
</head>
<body>
<?php if ($_SESSION['statut'] == 1){
	include("headerAdminAngl.php");
} else {
	include("header.php");
}?>

<div class="bg">


	<br>
	<br>
	
	<div id="conteneur">
	<button class="button"><a style="color:white; text-decoration:none"
							  href="index.php?cible=messagerie&fonction=envoyer">Send Message</a></button>

		<br>
		<?php foreach ($liste as $element) {
			$recepteur = recupererNomPrenom($bdd, $element['id_recepteur']);
			$emetteur = recupererNomPrenom($bdd, $element['id_envoyeur']);
			
			?>


			<div id="message">
				<h4><?php echo $emetteur['prenom'] . ' ' . $emetteur['nom'] . ' à ' . $recepteur['prenom'] . ' ' . $recepteur['nom'] ?></h4>
				<h4><?php echo $element['date'] ?></h4>

				<p><?php echo $element['message']; ?></p>
			</div>
			<br>
		<?php } ?>
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
			opacity: .5;
		}
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #555;
			opacity: 0.5;
		}
	</style>
</body>
</html>
