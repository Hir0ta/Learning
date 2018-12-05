<?php
	// Classes
	require_once('classes.php');
	
	$database = new Database();
	
	$obj = new GuestBook($database);
	
	foreach ($obj->getComments() as $value) {
		print $value['username'];
	}
?>