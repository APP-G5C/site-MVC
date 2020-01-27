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
			<h1>Registration</h1>

			

			<label><b>last name</b></label>
			<input type="text" placeholder="Enter user last name" name="nom" id="nom" required/>


			<label><b>first name</b></label>
			<input type="text" placeholder="Enter user first name" name="prenom" id="prenom" required/>

			<label><b>Age</b></label>
			<input type="text" placeholder="Enter user age" name="age" id="age" required/>

			<label><b>Visual acuity</b></label>
			<input type="text" placeholder="Entrez user visual acuity" name="vision" id="vision" required/>

			<label><b>Has driving license </b></label>
			<input type="text" placeholder="Does the user have a driving license ?" name="permis" id="permis" required/>

			<label><b>profile picture</b></label>
			<input type="file" name="photo" id="photo">

			<label><b>email adress</b></label>
			<input type="text" placeholder="Enter user email adress" name="mail" id="mail" required/>
			
			<label><b>password</b></label>
			<input type="password" placeholder="Enter user password" name="password" id="password" required/>

			<label><b>admin account</b></label>
			<input type="checkbox" name="statut" id = "statut" value="checked">



			<a href="index.php"><button type="submit"  name = "submit">Add account</button></a>

		</form>
	

	</div>
</div>



</body>
</html>
