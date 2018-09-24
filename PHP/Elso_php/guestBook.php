<div id='pre-controll'>
  <?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Reading
	$filename = "database/messages.txt";
	
	$handle = fopen($filename, "r");
	
	$data = unserialize(fread($handle, filesize($filename)));
	
	fclose($handle);
	

	if ($_POST) {
		// Examine if there is empty field
		if (empty($_POST['username'])) die("<script>alert('A felhasználó név mező nem lehet üres!'); location.href = location.href</script>");
		
		if (empty($_POST['comment'])) die("<script>alert('A megjegyzés mező nem lehet üres!'); location.href = location.href</script>");
		
		// Beír
		$handle = fopen($filename, "w");
		
		$data[] = array($_POST['username'], date("Y.m.d. H:i:s"), $_POST['comment']);
		
		fwrite($handle, serialize($data));
		
		fclose($handle);
		
		header("Location: index.php?lap=guestBook");
	}
  ?>
	
		<title>Vendégkönyv</title>

	
		<div id='guestBook'>
		
			<div style='margin-bottom: 30px; text-align: left;'>
			
				<form method='post'>
					
					<span style='display: inline-block; width: 15rem; line-height: 1.875rem;'>Felhasználó név:</span>
					
					<input type='text' name='username' style='width: 30rem;'>
					
					<br>
					
					<span style='display: inline-block; width: 15rem; line-height: 1.875rem;'>Megjegyzés:</span>
					
					<textarea name='comment' style='width: 50rem; height: 20rem;'></textarea>
					
					<br>

					<span style='display: inline-block; width: 9.375rem; line-height: 1.875rem;'></span>
					
					<input type='submit' value='Rögzít'>
				
				</form>
				
			</div>
			
			<?php
				for ($i = 0 ; $i < count($data) ; $i++) {
					// Smileys
					$data[$i][2] = str_replace(":)", "<img src='images/01.png' alt=':)' title=':)'>", $data[$i][2]);
					$data[$i][2] = str_replace(":(", "<img src='images/02.png' alt=':(' title=':('>", $data[$i][2]);
					$data[$i][2] = str_replace(";)", "<img src='images/03.png' alt=';)' title=';)'>", $data[$i][2]);
					$data[$i][2] = str_replace(":@", "<img src='images/04.png' alt=':@' title=':@'>", $data[$i][2]);
					$data[$i][2] = str_replace(":P", "<img src='images/05.png' alt=':P' title=':P'>", $data[$i][2]);
					$data[$i][2] = str_replace(":O", "<img src='images/06.png' alt=':O' title=':O'>", $data[$i][2]);
					$data[$i][2] = str_replace(":D", "<img src='images/07.png' alt=':D' title=':D'>", $data[$i][2]);
					$data[$i][2] = str_replace("<3", "<img src='images/10.png' alt='<3' title='<3'>", $data[$i][2]);
					
					// Posting
					print "<div class='comment'><b>" . $data[$i][0] . " | " . $data[$i][1] . "</b><br>" . $data[$i][2] . "</div>" . "\n";
				}
			?>

		</div>

</div>