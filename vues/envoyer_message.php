<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://localhost/site-MVC-master/style/envoyer_messageCSS.css"/>
	<title> SmartBeing </title>
</head>


<body>
<?php include("headerAdmin.php"); ?>
<div class="bg">
	<form action="#" method="POST">
		<h2>NOUS CONTACTER</h2>
		<div class="line"></div>
		</br></br></br></br>


		<label for="e-mail">E-mail du destinataire :</label>
		<input type="text" style="font-size: 25px;" id="mail" name="mail" required><br>

		<label for="message">Votre message : </label>
		<input type="text" style="
  			  vertical-align: top;
  			  margin-top:10px;
  			  margin-top:20px;
  			  height: 250px ;
  			  width : 300px;
  			  resize: vertical;
  			  background-color: white;
  			  background-color: white;"
			   name="message"
			   id="message"
			   required/><br>
		<!--		<textarea id="message" style="font-size: 25px;" required></textarea><br>-->

		<a href="index.php">
			<button type="submit" name="submit">Envoyer</button>
		</a>


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