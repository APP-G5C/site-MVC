

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/site%20APP%20MVC/style/profilCSS.css">
	<title>profil</title>
</head>
<body>
<?php include("header.php"); ?>
<?php $repertoire = "http://localhost/site%20APP%20MVC/"; ?>



<div class="bg">
	<form action="#" method="POST">
		<div id="conteneur">
			<div class ="bouton"> <a href="index.php?cible=utilisateurs&fonction=deconnexion">Déconnexion</a> </div>
		</div>
		<h2>PROFIL</h2>
		<div class="line"></div>
		<br>
		<p><img class="photoprofil" src="<?php echo $repertoire. $_SESSION['photo']; ?>" alt="photo de profil"></p>
		<div id="conteneurprofil">
			
			
			<div class="element"><p>Nom : <?php echo $_SESSION['nom'] ?></p></div>
			<div class="element"><p>Prénom : <?php echo $_SESSION['prenom'] ?></p></div>
			<div class="element"><p>adresse email : <?php echo $_SESSION['mail'] ?></p></div>
		</div>
	
	</form>
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
</ */