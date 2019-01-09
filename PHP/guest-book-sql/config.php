<?php
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "admin";
	$db_database = "guestbook";
	
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	mysqli_set_charset($db, "utf8");
?>