<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Adatb�zis
	include("loginconfig.php");
	
	// Munkamenet
	SESSION_START();
	
	if ($_POST) {
		// Kicsiv� alak�tjuk a usernevet
		$_POST['username'] = strtolower($_POST['username']);
		
		// Lek�rdezz�k a usert Igy ne!!! $sql = "SELECT * FROM user WHERE username = '" . $_POST['username'] . "' AND password = BINARY('" . $_POST['password'] . "')";
		$sql = "SELECT * FROM user WHERE username = '" . $_POST['username'] . "' AND password = SHA2('" . $_POST['password'] . "', 256)";
		
		$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $_POST['username'];
			
			header("Location: admin.php");
		}
		else {
			print "<script>alert('No match for username and/or password.')</script>";
		}
	}
?>
<html>

	<head>

		<meta charset="utf-8">

		<title>Login</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>
	
	<body style='background-color: #fafafa; font-family: arial; font-size: 1.25rem;'>

	<div class='row'>
	

					 <!--JUST POSITIONING-->
		<div class= 'col-xs-0 col-sm-0 col-md-4 col-lg-4'></div> 

					<!--RESPONSIVE SCALING-->
		<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>


				<div class='panel'>

					<div class='panel-body' style='background-color: #BEBEBE; border-color:#404040; margin-top:1rem; box-shadow: 2px 2px;'>
				
						<h2 class='text-center text-primary' style='text-shadow: 1px 1px black;'>Login</h2>
				
						<form method='post'>

							<div class='input-group '>
				
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>

								<input id='username' type='text' class='form-control' name='username' placeholder='Username'>

							</div>
						
							<br>

							<div class='input-group'>
						
								<span class='input-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
							
								<input id='password' type='password' class='form-control' name='password' placeholder='Password'>

							</div>

							<br>

							<input class='btn btn-primary' type='submit' value='Login'>
					
						</form>

					</div>
					
				</div>

			
		</div>

	</div>

	</body>

</html>