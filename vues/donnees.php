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
			
				<table>
	<tr>
		<th>Test</th>
		<th>Résultat</th>
		
	</tr>
	<tr>
		<td>Fréquence cardiaque</td>
		<td><?php echo $freqcard . " bpm"?>  </td>
		
	</tr>
	<tr>
		<td>Température de la peau</td>
		<td><?php echo $temp . " ° C"?> </td>
		
	</tr>
	<tr>
		<td>Perception auditive</td>
		<td><?php echo $seuilinf . " - " . $seuilsup . " Hz" ?></td>
		
	</tr>
	<tr>
		<td>Reconnaissance de tonalité</td>
		<td><?php echo $reconton . " %"?></td>
		
	</tr>
	<tr>
		<td>Reproduction de motifs sonores</td>
		<td><?php echo $reprodmotifs . " %"?></td>
		
	</tr>
</table>
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