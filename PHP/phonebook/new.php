<!DOCTYPE HTML>
<?php
    ERROR_REPORTING(E_PARSE | E_ERROR);

    // Database config
    include "config.php";
	
	if ($_POST) {
		// Is there any empty field
		if (empty($_POST['Name'])){
			exit("<script>alert('Can't be empty field!')</script>");
		}

		if (empty($_POST['Phonenumber'])){
			exit("<script>alert('Can't be empty field!')</script>");
		}

		if (empty($_POST['Email'])){
			exit("<script>alert('Can't be empty field!')</script>");
		}

		//sql query
		$sql = "INSERT INTO contacts (Name, Phonenumber, Email) VALUES ('" . $_POST['Name'] . "', '" . $_POST['Phonenumber'] . "', '" . $_POST['Email'] . "')";

		//die(print $sql);

		if(mysqli_query($db,$sql)){
			print "<script>alert('New contact added succesfully!'); location.href = 'index.php'</script>";
		}
		
		else{
			print "<script>alert('Something went wrong! The new contact couldn't be added!'); location.href = location.href</script>";
		}
	}
?>
<html>
    <head>

        <meta charset="utf-8">

        <title>Phonebook</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-1.10.0.js" integrity="sha256-iqD4S1Mx78w8tyx9UEwrxuvYYdoAPXLDPfmc5lDUUx0=" crossorigin="anonymous"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
		<style>
		
            body{
                background-color: #404040;
				
                margin: 1rem 0.5rem 1rem 0.5rem;
				
                font-family: Arial, Helvetica, sans-serif;
				
                font-size: 1.25rem;
				
                text-align: center;
            }

            .panel{
                background-color: #BEBEBE;
				
                border-color: #404040;
				
                box-shadow: 2px 2px;
				
                color: #000000;
            }

            a{
                color: #000000;
            }

            a:hover{
                color: #000000;
            }
			
        </style>
		
	</head>
	
	<body>

		<div class='form'>

			<form method='post'>

				<span style='width: 200px; height: 25px; display: inline-block;'>Name:</span>

				<input type='text' name='Name'>

				<br>

				<span style='width: 200px; height: 25px; display: inline-block;'>Phonenumber:</span>

				<input type='text' name='Phonenumber'>

				<br>

				<span style='width: 200px; height: 25px; display: inline-block;'>Email:</span>

				<input type='text' name='Email'>

				<input type='submit' value='Add new'><input type='button' value='Back' onclick='location.href = "index.php";' style='margin-left: 10px;'>

			</form>

		</div>

	</body>
	
</html>