<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/creercompteCSS.css" media="screen" type="text/css"/>
</head>
<body>
<?php include("headerAdmin.php"); ?>

<div class="bg">

	<div id="container">

		<form action="" method="post" enctype="multipart/form-data">
			<h1>Enregistrement</h1>

			

			<label><b>nom</b></label>
			<input type="text" placeholder="Entrez le nom d'utilisateur" name="nom" id="nom" required/>


			<label><b>prenom</b></label>
			<input type="text" placeholder="Entrez le prenom d'utilisateur" name="prenom" id="prenom" required/>

			<label><b>Photo de Profil</b></label>
			<input type="file" name="photo" id="photo">

			<label><b>Adresse Mail</b></label>
			<input type="text" placeholder="Entrez votre adresse mail" name="mail" id="mail" required/>
			
			<label><b>Mot de Passe</b></label>
			<input type="password" placeholder="Entrez le mot de passe" name="password" id="password" required/>

			<label><b>Compte Administrateur</b></label>
			<input type="checkbox" name="statut" id = "statut" value="checked">



			<a href="index.php"><button type="submit"  name = "submit">Connexion</button></a>

		</form>
	

	</div>
</div>



</body>
</html>
