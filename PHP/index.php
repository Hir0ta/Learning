<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Kiolvas
	$filename = "database/db.txt";
	
	$handle = fopen($filename, "r");
	
	$data = unserialize(fread($handle, filesize($filename)));
	
	fclose($handle);
	
	// print "<pre>"; print_r($data); print "</pre>"; die;

	if ($_POST) {
		// Ellenőrizzük, hogy van-e üres mező..
		if (empty($_POST['username'])) die("<script>alert('A felhasználó név mező nem lehet üres!'); location.href = location.href</script>");
		
		if (empty($_POST['comment'])) die("<script>alert('A megjegyzés mező nem lehet üres!'); location.href = location.href</script>");
		
		// Beír
		$handle = fopen($filename, "w");
		
		$data[] = array($_POST['username'], date("Y.m.d. H:i:s"), $_POST['comment']);
		
		fwrite($handle, serialize($data));
		
		fclose($handle);
		
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
				for ($i = 0 ; $i < count($data) ; $i++) {
					// Kicseréljük a smiley jelét a képre
					$data[$i][2] = str_replace(":)", "<img src='images/01.png' alt=':)' title=':)'>", $data[$i][2]);
					$data[$i][2] = str_replace(":(", "<img src='images/02.png' alt=':(' title=':('>", $data[$i][2]);
					$data[$i][2] = str_replace(";)", "<img src='images/03.png' alt=';)' title=';)'>", $data[$i][2]);
					$data[$i][2] = str_replace(":@", "<img src='images/04.png' alt=':@' title=':@'>", $data[$i][2]);
					$data[$i][2] = str_replace(":P", "<img src='images/05.png' alt=':P' title=':P'>", $data[$i][2]);
					$data[$i][2] = str_replace(":O", "<img src='images/06.png' alt=':O' title=':O'>", $data[$i][2]);
					$data[$i][2] = str_replace(":D", "<img src='images/07.png' alt=':D' title=':D'>", $data[$i][2]);
					$data[$i][2] = str_replace("<3", "<img src='images/10.png' alt='<3' title='<3'>", $data[$i][2]);
					
					// Kiírjuk 
					print "<div class='comment'><b>" . $data[$i][0] . " | " . $data[$i][1] . "</b><br>" . $data[$i][2] . "</div>" . "\n";
				}
			?>

		</div>
	
	</body>

</html>