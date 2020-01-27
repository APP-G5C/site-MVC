<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/FAQmodifierCSS.css">
</head>
<body>
<?php include("headerAdminAngl.php"); ?>


<form action="" method="post">


	<h2>FAQ</h2>
	<div class="line"></div>


	<label for="question" style="font-size: 40px;">New question to add : </label> : <input type="text" style="
  			vertical-align: top;
  			margin-left: 17%;
  			height: 250px ;
  			font-size:35px;
  			width : 850px;
  			resize: vertical;
  			background-color: white;" name="question" id="question"/>
	<label for="reponse" style="font-size: 40px;">New answer to add : </label> : <input type="text" style="
  			vertical-align: top;
  			margin-left: 17%;
  			height: 250px ;
  			width : 850px;
  			font-size:35px;
  			resize: vertical;
  			background-color: white;" name="reponse" id="reponse"/>
	<button class="button" style="color:white; text-decoration:none" href="index.php">
		Add a question
	</button>
</form>

<form action="" method="post">
	<label for="idSuppr" style="font-size: 40px;">Number of the question to delete : </label> : <input type="text"
																										style="
  			vertical-align: top;
 			margin-top:10px;
 			height: 40px ;
  			width : 250px;
  			font-size:30px;
  			margin-left: 515px;
  			resize: vertical;
  			background-color: white;" name="idSuppr" id="idSuppr"/>
	<button class="button" style="color:white; text-decoration:none" href="index.php">
		Delete the question
	</button>
</form>


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
