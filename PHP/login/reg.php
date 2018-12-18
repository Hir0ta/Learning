<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Adatbázis
	include "config.php";
	
	if ($_POST) {
		// Kicsivé alakítjuk a usernevet
		$_POST['username'] = strtolower($_POST['username']);
		
		// Jelszó ellenőrzés
		if ($_POST['password'] != $_POST['confirm']) {
			exit("<script>alert('Passwords not match.'); location.href = location.href</script>");
		}
		
		// Üres email
		if (empty($_POST['email'])) {
			exit("<script>alert('Email cant be empty..'); location.href = location.href</script>");
		}

		// Üres vezetéknév
		if (empty($_POST['lastname'])) {
			exit("<script>alert('Last name cant be empty..'); location.href = location.href</script>");
		}

		// Üres keresztnév
		if (empty($_POST['firstname'])) {
			exit("<script>alert('First name cant be empty..'); location.href = location.href</script>");
		}
		
		// Beszúrjuk az user táblába
		$sql = "INSERT INTO user (username, password, email, first_name, last_name, status, date_added) VALUES ('" . $_POST['username'] . "', '" . hash("sha256", $_POST['password']) . "', '" . $_POST['email'] . "', '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', 1, NOW())";
		
		if (mysqli_query($db, $sql)) {
			print "<script>alert('Created successfully.'); location.href = 'login.php'</script>";
		}
		else {
			print "<script>alert('Registration failed.'); location.href = location.href</script>";
		}
		
		// print '<pre>'; print_r($_POST); print '</pre>';
	}
?>
<html>

	<head>
	
		<title>Registration</title>
	
	</head>

	<body style='background-color: #fafafa; font-family: arial; font-size: 12px; margin: 0px auto;'>
	
		<div style='margin: 50px auto 0px auto; padding: 20px; width: 600px; border: 1px solid #dbdbdb; border-radius: 5px; background-color: #fff;'>
					
			<h2>Registration</h2>
		
			<form method='post'>
		
				<span style='width: 200px; height: 25px; display: inline-block;'>Username:</span>
				
				<input type='text' name='username'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Password:</span>
				
				<input type='password' name='password'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Confirm password:</span>
				
				<input type='password' name='confirm'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>First name:</span>
				
				<input type='text' name='firstname'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>Last name:</span>
				
				<input type='text' name='lastname'>
				
				<br>
				
				<span style='width: 200px; height: 25px; display: inline-block;'>E-mail:</span>
				
				<input type='text' name='email'>
				
				<br>

				<span style='width: 200px; display: inline-block;'></span>
				
				<input type='submit' value='Registration'><input type='button' value='Back' onclick='location.href = "login.php"' style='margin-left: 10px;'>
			
			</form>
		
		</div>
	
	</body>

</html>