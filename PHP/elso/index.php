<html>

	<head>
	
		<title>Első oldalam</title>
	
		<link href='stylesheet.css' type='text/css' rel='stylesheet'>
	
	</head>
	
	<body>
	
		<div id='container'>
		
			<div id='header'>
				
				<a href='index.php?lap=fooldal'>Főoldal</a>
				<a href='index.php?lap=termekek'>Termékek</a>
				<a href='index.php?lap=kapcsolat'>Kapcsolat</a>
				
			</div>
			
			<div id='content'>
			
				<?php
					
					// Hiba kezelés
					ERROR_REPORTING (E_PARSE | E_ERROR);
					
					// Az URL-ben található lap paraméter értéke alapján töltjük be az oldalakat
					if ($_GET['lap'] == "fooldal") include "fooldal.php";
					if ($_GET['lap'] == "termekek") include "termekek.php";
					if ($_GET['lap'] == "kapcsolat") include "kapcsolat.php";
					if ($_GET['lap'] == "") include "fooldal.php";
				
				?>
			
			</div>
			
			&copy; Zoli és Misi <?php print date ('Y'); ?>
		
		</div>
	
	</body>

</html>