<?php
    ERROR_REPORTING(E_PARSE | E_ERROR);

	// Munkamenet
	SESSION_START();
	
	// Biztons�gi ellen�rz�s
	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
	
	// Kijelentkez�s
	if (isset($_GET['action']) and $_GET['action'] == "logout") {
		SESSION_DESTROY();
		
		header("Location: login.php");
	}

    include "config.php";

    $sql = "SELECT * FROM jelentkezok";

    $result = mysqli_query($db, $sql);

?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href=".css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>

    <div class='container'>

        <table class='table table-bordered'>

            <tr>

                <th>Sorszám</th>

                <th>Név</th>

                <th>Születési év</th>

                <th>Email</th>

                <th>Telefon</th>

                <th>Munkahely neve</th>

                <th>Munkahely címe</th>

                <th>Munkakör</th>

                <th>Beosztás</th>

            </tr>

            <?php

                while($row = $result->fetch_assoc()){

            ?>

            <tr>

                <td><?php print $row['sorszam']; ?></td>

                <td><?php print $row['nev']; ?></td>

                <td><?php print $row['szuletesi_ev']; ?></td>

                <td><?php print $row['email']; ?></td>

                <td><?php print $row['telefon']; ?></td>

                <td><?php print $row['munkahely_neve']; ?></td>

                <td><?php print $row['munkahely_cime']; ?></td>

                <td><?php print $row['munkakor']; ?></td>

                <td><?php print $row['beosztas']; ?></td>
            
            </tr>

            <?php

                }

            ?>

        </table>
            
    </div>

    <a href='admin.php?action=logout'>Log out</a>





</body>

</html>