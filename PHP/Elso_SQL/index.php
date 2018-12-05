<?php
	// Credentials
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_database = "tagdij";
	
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_database); 
	
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	mysqli_set_charset($db, "utf8");
	
	$sql = "
	SELECT nev AS 'Nev', SUM(befiz.osszeg) AS 'OsszesBefiz' FROM ugyfel
	INNER JOIN befiz ON ugyfel.azon = befiz.azon
	GROUP BY ugyfel.nev";
	
	$result = mysqli_query($db, $sql);
	
	print "<table>" . "\n\n";
	
	while ($row = mysqli_fetch_array($result)) {
		print "<tr>" . "\n";
		print "<td>" . $row['Nev'] . "</td>" . "\n";
		print "<td>" . $row['OsszesBefiz'] . "</td>" . "\n";
		print "</tr>" . "\n\n";
	}
	
	print "</table>";
	
	mysqli_close($db);
?>