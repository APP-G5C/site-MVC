<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/lancertestCSS.css">
</head>
<body>
<?php include("headerAngl.php"); ?>


<form action="#" method="POST">
	
	<h2>Please follow the instructions below</h2>
	<fieldset>
		<p>Ne versez que des grains de café torréfiés dans le réservoir à
			grains. Ne versez pas de grains de cafés enrobés ou de café moulu.</p>
		<p>Le sucre endommage la machine à café. Ne versez jamais de
			sucre, de caramel, de grains de café enrobés ou de liquides sucrés
			dans la machine à café.</p>
		<p>N'utilisez que du lait sans additifs. Les additifs contenant la plupart du temps du sucre ajouté, ils ont tendance à adhérer au
			conduit de lait et à l'obstruer.
		</p>
		<p>Ne tenez pas de mélange contenant des substances inflammables sous la distribution centrale. Les pièces en matière synthétique
			risquent de se consumer et de se mettre à fondre</p>
	
	
	</fieldset>
	
	<button class="button"><a style="color:white; text-decoration:none" href="index.php?cible=capteursAngl&fonction=testAngl">Start the test</a></button>

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