<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/capteursCSS.css">
</head>
<body>
<?php include("headerAdmin.php"); ?>

<div class="bg">
	
	
	
	<form action="" method="POST">
		<div class="clearfix">
			<div class="box">
				<h3>Carte connecté :</h3>
			</div>
			<div class="box">
				<h3>Catpeurs connecté :</h3>
			</div>
		</div>
		<?php foreach ($ListCarte as $element) { ?>
			
				<h4><?php
					echo  $element['ID_carte'] . ' : '; ?>
			
			</h4>
				
				<?php
				$liste=recupererCapteurs($bdd,$element['ID_carte']);
			 foreach ($liste as $elmt) { ?>
					
				 <h5>
						<?php
							echo  ' - ' . $elmt['type'] . '<br/>'; ?>
					</h5>
					<?php
					
				}
			}
		?>
		
		<button class="button"><a style="color:white; text-decoration:none" href="index.php?cible=utilisateurs&fonction=modif">Modifer les cartes</a></button>
		
	</form>
</div>
</body>
</html>
