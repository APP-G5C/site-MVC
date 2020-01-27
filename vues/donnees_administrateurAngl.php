<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/donneesCSS.css">
</head>
<body>
<?php include("headerAdminAngl.php");
	
	$arrayF = array();
	$arrayT = array();
	$arrayPmin = array();
	$arrayPmax = array();
	$arrayRec = array();
	$arrayRep = array();
	foreach ($liste as $element) {
		array_push($arrayF,$element['frequenceCardiaque'] );
		array_push($arrayT,$element['TemperaturePeau'] );
		array_push($arrayPmin,$element['PerceptionAuditiveInf'] );
		array_push($arrayPmax,$element['PerceptionAuditiveSup'] );
		array_push($arrayRec,$element['ReconTonalites'] );
		array_push($arrayRep,$element['ReprodMotifsSonore'] );
		
		
		
	}
	
	$averageF = array_sum($arrayF) / count($arrayF);
	$averageT = array_sum($arrayT) / count($arrayT);
	$averagePmin = array_sum($arrayPmin) / count($arrayPmin);
	$averagePmax = array_sum($arrayPmax) / count($arrayPmax);
	$averageRec = array_sum($arrayRec) / count($arrayRec);
	$averageRep = array_sum($arrayRep) / count($arrayRep);

?>
<div class="bg">
	<form action="#" method="POST">
		<div class="flex_container">
			<div>
				<h1>General informations</h1>
				<h2>Number of users : <?php echo $nombreUtilisateurs ?></h2>
				<h2>Number of connections today : <?php echo $nombreConnexionDuJour ?></h2>
			</div>
			<div>
				<h1>Progression</h1>
				<table>
					<tr>
						<th>Test</th>
						<th>Average score</th>
					</tr>
					<tr>
						<td>Cardiac frequency</td>
						<td><?php echo $averageF ?></td>
					
					</tr>
					<tr>
						<td>Skin temperature</td>
						<td><?php echo $averageT ?></td>
					
					</tr>
					<tr>
						<td>Auditory perception</td>
						<td><?php  echo $averagePmin . " - " . $averagePmax . " Hz"?></td>
					
					</tr>
					<tr>
						<td>Tone recognition</td>
						<td><?php echo $averageRec ?></td>
					
					</tr>
					<tr>
						<td>Reproduction of sound patterns</td>
						<td><?php echo $averageRep ?></td>
					
					</tr>
				</table>
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