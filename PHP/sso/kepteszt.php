<?php
	$fn = "igazolvanykepek/4A-GE.gif";
	
	$bb = getimagesize($fn);
	
	print '<pre>';
	print_r($bb);
	print '</pre>';
	
	if ($bb['mime'] == "image/jpeg") {
		
	}
?>