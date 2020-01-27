<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/creercompteCSS.css" media="screen" type="text/css"/>
</head>
<body>
<?php include("headerAdminAngl.php"); ?>

<div class="bg">

	<div id="container">

		<form action="" method="post" enctype="multipart/form-data">
			<h1>Enregistrement</h1>

			

			<label><b>last name</b></label>
			<input type="text" placeholder="Enter your last name" name="nom" id="nom" required/>


			<label><b>first name</b></label>
			<input type="text" placeholder="Enter your first name" name="prenom" id="prenom" required/>

			<label><b>profile picture</b></label>
			<input type="file" name="photo" id="photo">

			<label><b>email adress</b></label>
			<input type="text" placeholder="Enter your email adress" name="mail" id="mail" required/>
			
			<label><b>password</b></label>
			<input type="password" placeholder="Enter your password" name="password" id="password" required/>

			<label><b>admin account</b></label>
			<input type="checkbox" name="statut" id = "statut" value="checked">



			<a href="index.php"><button type="submit"  name = "submit">Connexion</button></a>

		</form>
	

	</div>
</div>



</body>
</html>
