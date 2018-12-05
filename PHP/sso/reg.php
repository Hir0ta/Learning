<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Database
	include "config.php";
	
	// Munkamenet
	SESSION_START();
	
	// Form
	if ($_POST) {
		// Captcha
		if ($_POST['captcha'] != $_SESSION['captcha']) {
			exit("Pancser vagy :) <a href='reg.php'>Visszalépés</a>");
		}
		
		// ID Pic
		$kep_info = getimagesize($_FILES['igazolvany']['tmp_name']);
		
		if ($kep_info['mime'] == "image/jpeg") {
			$kep_nev = date("YmdHis") . ".jpg";
			
			if (!move_uploaded_file($_FILES['igazolvany']['tmp_name'], "igazolvanykepek/$kep_nev")) {
				exit("Képfeltöltés sikertelen.");
			}
		}
		else {
			die("<script>alert('Csak jpg kiterjesztés az elfogadott!'); location.href = 'reg.php'</script>");
		}
		
		// SQL
		$sql = "INSERT INTO jelentkezok (nev, szuletesi_datum, email, telefon, munkahely_neve, munkahely_cime, munkakor, beosztas, igazolvanykep) VALUES ('" . $_POST['nev'] . "', " . $_POST['szuletesi_ev'] . ", '" . $_POST['email'] . "', '" . $_POST['telefonszam'] . "', '" . $_POST['munkahely_neve'] . "', '" . $_POST['munkahely_cime'] . "', '" . $_POST['munkakor'] . "', '" . $_POST['beosztas'] . "', '$kep_nev')";
		
		if (mysqli_query($db, $sql)) {
			print "<script>alert('Jelentkezés sikeresen leadva.'); location.href = 'reg.php'</script>";
		}
		else {
			print "<script>alert('Jelentkezés sikertelen.'); location.href = location.href</script>";
		}
	}
?>
<html>

	<head>
	
		<title>Registration</title>
	
	</head>

	<body style='background-color: #fafafa; font-family: arial; font-size: 12px; margin: 0px auto;'>
	
		<div style='margin: 50px auto 0px auto; padding: 20px; width: 600px; border: 1px solid #dbdbdb; border-radius: 5px; background-color: #fff;'>
		
			<h2>Regisztráció</h2>
		
			<form method='post' enctype='multipart/form-data'>
		
				<span style='width: 200px; height: 25px; display: inline-block;'>Név:</span>
				
				<input type='text' name='nev'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Születési év:</span>
				
				<input type='text' name='szuletesi_ev'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Email cím:</span>
				
				<input type='text' name='email'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Telefonszám:</span>
				
				<input type='text' name='telefonszam'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Munkahely neve:</span>
				
				<input type='text' name='munkahely_neve'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Munkahely címe:</span>
				
				<input type='text' name='munkahely_cime'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Munkakör:</span>
				
				<input type='text' name='munkakor'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Beosztás:</span>
				
				<input type='text' name='beosztas'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Igazolványkép:</span>
				
				<input type='file' name='igazolvany'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Nem vagyok robot</span>
				
				<img src='captcha.php'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Ellenőrző kód:</span>
				
				<input type='text' name='captcha'>
				
				<br>

				<span style='width: 200px; display: inline-block;'></span>
				
				<input type='submit' value='Jelentkezés'><input type='button' value='Vissza' onclick='location.href = "login.php"' style='margin-left: 10px;'>
			
			</form>
		
		</div>
	
	</body>

</html>