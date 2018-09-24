<?php
	
	// Aktuális dátum kiírása (szerver idő). A pont a concatenate a PHP-ban. Vele tudunk összefűzni váltózót string-el és/vagy változóval.
	// Esetünkben a <br> is szövegnek minősül így szövegként fűzzük össze.
	
	print date ('Y-m-d H:i:s') . "<br>";
	
	$keresett_szo = "árvíztűrő tükörfúrógép";
	
	$ekezet = array ("ö" , "ü" , "ó" , "ő" , "ú" , "é" , "á" , "ű" , "í" , "Ö" , "Ü" , "Ó" , "Ő" , "Ú" , "É" , "Á" , "Ű" , "Í");
	
	$ekezetlen = array ("o" , "u" , "o" , "o" , "u" , "e" , "a" , "u" , "i" , "O" , "U" , "O" , "O" , "U" , "E" , "A" , "U" , "I");
	
	$eredmeny = str_replace ($ekezet, $ekezetlen, $keresett_szo);
	
	print $eredmeny;
	
?>