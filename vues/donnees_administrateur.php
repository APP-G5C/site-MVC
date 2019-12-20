<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/donneesCSS.css">
</head>
<body>
<?php include("headerAdmin.php"); ?>
<div class="bg">
	<form action="#" method="POST">
		<div class="flex_container">
			<div>
				<h1>Informations générales</h1>
				<h2>Nombre d'utilisateurs : <?php echo $nombreUtilisateurs ?></h2>
				<h2>Nombre de connexions aujourd'hui : <?php echo $nombreConnexionDuJour ?></h2>
			</div>
			<div>
				<h1>Progression</h1>
				<table>
					<tr>
						<th>Test</th>
						<th>Score moyen</th>
						<th>Meilleur score</th>
						<th>Pire score</th>
					</tr>
					<tr>
						<td>Fréquence cardiaque</td>
						<td>nn</td>
						<td>nn</td>
						<td>nn</td>
					</tr>
					<tr>
						<td>Température de la peau</td>
						<td>nn</td>
						<td>nn</td>
						<td>nn</td>
					</tr>
					<tr>
						<td>Perception auditive</td>
						<td>nn</td>
						<td>nn</td>
						<td>nn</td>
					</tr>
					<tr>
						<td>Reconnaissance de tonalité</td>
						<td>nn</td>
						<td>nn</td>
						<td>nn</td>
					</tr>
					<tr>
						<td>Reproduction de motifs sonores</td>
						<td>nn</td>
						<td>nn</td>
						<td>nn</td>
					</tr>
				</table>
			</div>
			<div>
				<h1>Valeurs de référence: </h1>
				<h2>Fréquence cardiaque: </h2>
				<h2>Température de la peau: </h2>
				<h2>Perception auditive: </h2>
				<h2>Reconnaissance de tonalité: </h2>
				<h2>Reproduction de motifs sonores: </h2>
			</div>
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

</html>