<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SmartBeing</title>
	<link rel="stylesheet" href="style/FAQ_administrateurCSS.css">
</head>
<body>
<?php include("headerAdminAngl.php"); ?>

<div class="bg">
	
	<form action="" method="POST">
		<h2>FAQ</h2>
		<div class="line"></div>
		
		<h3>USUAL QUESTIONS</h3>
		
		
		
			
			<?php foreach ($liste as $element) { ?>
			
				
				<h4> <?php  echo $element['ID'] . '.     ' ; echo $element['Question'] . '<br />'; ?> </h4>
				<p>
					
					<?php echo $element['Réponse'] . '<br />'; ?>
				
				</p>
				
				
				<?php
			} ?>

		<button class="button"><a style="color:white; text-decoration:none" href="index.php?cible=FAQAngl&fonction=modifierFAQAngl">Make a change</a>
		
	
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
