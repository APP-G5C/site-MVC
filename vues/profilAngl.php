<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/profilCSS.css">
	<title>profil</title>
</head>
<body>
<?php include("header.php"); ?>
<?php $repertoire = "http://localhost/site%20APP%20MVC/"; ?>



<div class="bg">
	<form action="#" method="POST">
		<div id="conteneur">
			<div class ="bouton"> <a href="index.php?cible=utilisateurs&fonction=deconnexion">Log out</a> </div>
		</div>
		<h2>PROFIL</h2>
		<div class="line"></div>
		<br>
		<p><img class="photoprofil" src="<?php echo $repertoire. $_SESSION['photo']; ?>" alt="photo de profil"></p>
		<div id="conteneurprofil">
			
			
			<div class="element"><p>Last name : <?php echo $_SESSION['nom'] ?></p></div>
			<div class="element"><p>First name : <?php echo $_SESSION['prenom'] ?></p></div>
			<div class="element"><p>Email adress : <?php echo $_SESSION['mail'] ?></p></div>
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

    © 2019 GitHub, Inc.
    Terms
    Privacy
    Security
    Status
    Help

    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

