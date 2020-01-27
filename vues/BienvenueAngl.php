<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/BienvenueCSS.css">
</head>
<body background= "style/Background.jpg">
<div id="conteneur">
	<div class ="bouton"> <a href="index.php?cible=utilisateursAngl&fonction=connexionAngl">Connection</a> </div>
</div>
<?php include("vues/lang.php")?>
<div id="flex_container">
	<div>
		<h1>SmartBeing</h1>
	</div>
	<div>
		<h2>Follow your health wherever you are</h2>
	</div>
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
