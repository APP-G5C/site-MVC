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
	
	
	
	
	<button class="button" style="color:white; text-decoration:none" href="index.php">
		Add Card
	</button>
</form>

<form action="" method="post">
	<label for="idSuppr" style="font-size: 40px;">Number of the card to be deleted : </label> : <input type="text"
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
		Delete
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
