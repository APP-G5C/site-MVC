<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/donneesCSS.css">
</head>
<body>
<?php include("headerAngl.php"); ?>

<div class="bg">
	<form action="#" method="POST">
		<div class="flex_container">
			
			<?php foreach ($liste as $element)  { ?>
				<h2>Date : <?php echo $element['date']?></h2>
				<table>
					<tr>
						
						<th>Test</th>
						<th>Result</th>
					
					</tr>
					<tr>
						<td>Cardiac frequency</td>
						<td><?php echo $element['frequenceCardiaque']?>  </td>
					
					</tr>
					<tr>
						<td>Skin temperature</td>
						<td><?php echo  $element['TemperaturePeau']?> </td>
					
					</tr>
					<tr>
						<td>Auditory perception</td>
						<td><?php echo  $element['PerceptionAuditiveInf'] . " - " . $element['PerceptionAuditiveSup'] . " Hz" ?></td>
					
					</tr>
					<tr>
						<td>Tone recognition</td>
						<td><?php echo  $element['ReconTonalites'] . " %"?></td>
					
					</tr>
					<tr>
						<td>Reproduction of sound patterns</td>
						<td><?php echo $element['ReprodMotifsSonore'] . " %"?></td>
					
					</tr>
				</table>
				<?php
			} ?>
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