<?php
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
?>
<html>

	<head>
	</head>
	
	<body>
	
		<p>You have logged in as: <b><?php print $_SESSION['username']; ?></b></p>
	
		<a href='index.php?action=logout'>Log out</a>
	
	</body>

</html>