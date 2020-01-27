<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/Score_adminCSS.css">
</head>
<body>
<?php include("headerAdminAngl.php");
	
	$arrayF = array();
	$arrayT = array();
	$arrayPmin = array();
	$arrayPmax = array();
	$arrayRec = array();
	$arrayRep = array();



?>
<div class="bg">
	<form action="#" method="POST">
		
		
		<div class="flex_container">
			
			<?php foreach ($liste as $element)  {
				?>
				<h2>Date : <?php echo $element['date']?></h2>
				<table>
					<tr>
						
						<th>Test</th>
						<th>Result</th>
					
					</tr>
					<tr>
						<td>Cardiac frequency</td>
						<td><?php echo $element['frequenceCardiaque']. " bpm";
								array_push($arrayF,$element['frequenceCardiaque'] );?>  </td>
					
					</tr>
					<tr>
						<td>Skin temperature</td>
						<td><?php echo  $element['TemperaturePeau'];
								array_push($arrayT,$element['TemperaturePeau']);?> </td>
					
					</tr>
					<tr>
						<td>Auditory perception</td>
						<td><?php echo  $element['PerceptionAuditiveInf'] . " - " . $element['PerceptionAuditiveSup'] . " Hz" ;
								array_push($arrayPmin,$element['PerceptionAuditiveInf']);
								array_push($arrayPmax,$element['PerceptionAuditiveSup']); ?></td>
					
					</tr>
					<tr>
						<td>Tone recognition</td>
						<td><?php echo $element['ReconTonalites'] . " %";
								array_push($arrayRec,$element['ReconTonalites']); ?></td>
					
					</tr>
					<tr>
						<td>Reproduction of sound patterns</td>
						<td><?php echo $element['ReprodMotifsSonore'] . " %";
								array_push($arrayRep,$element['ReprodMotifsSonore']); ?></td>
					
					</tr>
				</table>
				<?php
			}
				$averageF = array_sum($arrayF) / count($arrayF);
				$averageT = array_sum($arrayT) / count($arrayT);
				$averagePmin = array_sum($arrayPmin) / count($arrayPmin);
				$averagePmax = array_sum($arrayPmax) / count($arrayPmax);
				$averageRec = array_sum($arrayRec) / count($arrayRec);
				$averageRep = array_sum($arrayRep) / count($arrayRep); ?>
			
			<h2>User average</h2>
			<table id ="average">
				<tr>
					
					<th>Test</th>
					<th>Results average</th>
				
				</tr>
				
				
				<tr>
					<td>Cardiac frequency</td>
					<td><?php echo $averageF . " bpm"?>  </td>
				
				</tr>
				<tr>
					<td>Skin temperature</td>
					<td><?php echo $averageT . " °C"?>  </td>
				
				</tr>
				<tr>
					<td>Auditory perception</td>
					<td><?php echo  $averagePmin . " - " . $averagePmax . " Hz" ;?>  </td>
				
				</tr>
				<tr>
					<td>Tone recognition</td>
					<td><?php echo $averageRec . " %"?>  </td>
				
				</tr>
				<tr>
					<td>Reproduction of sound patterns</td>
					<td><?php echo $averageRep . " %"?>  </td>
				
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