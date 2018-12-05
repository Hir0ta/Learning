<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Adatbázis
	include 'config.php';
	
	if ($_POST) {
		// Ellenőrizzük, hogy van-e üres mező..
		if (empty($_POST['username'])) die("<script>alert('A felhasználó név mező nem lehet üres!'); location.href = location.href</script>");
		
		if (empty($_POST['comment'])) die("<script>alert('A megjegyzés mező nem lehet üres!'); location.href = location.href</script>");
		
		// Trollkodás gátló
		$_POST['comment'] = strip_tags($_POST['comment']);
		
		// Beszúrjuk a táblába
		$sql = "INSERT INTO comment (name, comment, ip_address, agent, date_added) VALUES ('" . $_POST['username'] . "', '" . $_POST['comment'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', NOW())";
		
		// exit($sql); // Debug
		
		mysqli_query($db, $sql);
		
		mysqli_close($db);
		
		header("Location: index.php");
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

	<head>
	
		<title>Vendégkönyv</title>
		
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 13px;
				color: #000000;
			}

			input[type='text'], textarea {
				border: 1px solid #dddddd;
			}

			#container {
				margin: 20px 10px;
			}

			.comment {
				margin-bottom: 10px;
				padding: 10px 20px;
				border-radius: 15px;
				background-color: #eaeaea;
			}

			.comment img {
				vertical-align: bottom;
				height: 22px;
			}
		</style>
	
	</head>
	
	<body>
	
		<div id='container'>
		
			<div style='margin-bottom: 30px; text-align: center;'>
			
				<form method='post'>
					
					<span style='display: inline-block; width: 150px; line-height: 33px;'>Felhasználó név:</span>
					
					<input type='text' name='username' style='width: 220px;'>
					
					<br>
					
					<span style='display: inline-block; width: 150px; line-height: 33px;'>Megjegyzés:</span>
					
					<textarea name='comment' style='width: 220px; height: 90px;'></textarea>
					
					<br>

					<span style='display: inline-block; width: 150px; line-height: 33px;'></span>
					
					<input type='submit' value='Rögzít'>
				
				</form>
				
			</div>
			
			<?php
				$sql = "SELECT * FROM comment ORDER BY date_added DESC";
				
				$result = mysqli_query($db, $sql);
				
				while ($row = mysqli_fetch_assoc($result)) {
					// Dátum formátum
					$row['date_added'] = str_replace("-", ".", $row['date_added']);
					$row['date_added'] = str_replace(" ", ". ", $row['date_added']);
					
					// Kicseréljük a smiley jelét a képre
					$row['comment'] = str_replace(":)", "<img src='images/01.png' alt=':)' title=':)'>", $row['comment']);
					$row['comment'] = str_replace(":(", "<img src='images/02.png' alt=':(' title=':('>", $row['comment']);
					$row['comment'] = str_replace(";)", "<img src='images/03.png' alt=';)' title=';)'>", $row['comment']);
					$row['comment'] = str_replace(":@", "<img src='images/04.png' alt=':@' title=':@'>", $row['comment']);
					$row['comment'] = str_replace(":P", "<img src='images/05.png' alt=':P' title=':P'>", $row['comment']);
					$row['comment'] = str_replace(":O", "<img src='images/06.png' alt=':O' title=':O'>", $row['comment']);
					$row['comment'] = str_replace(":D", "<img src='images/07.png' alt=':D' title=':D'>", $row['comment']);
					$row['comment'] = str_replace("<3", "<img src='images/10.png' alt='<3' title='<3'>", $row['comment']);
					
					print "<div class='comment'><b>" . $row['name'] . " | " . $row['date_added'] . "</b><br>" . $row['comment'] . "</div>" . "\n";
				}
				
				mysqli_close($db);
			?>

		</div>
	
	</body>

</html>