<?php
	ERROR_REPORTING(E_PARSE | E_ERROR);
	
	// Eredeti feltöltött képek helye
	$uploded_files = "uploads/";
	
	// Thumbnails helye
	$uploded_files_thumbnails = $uploded_files . "thumbnails/";

	if ($_POST) {
		$find = array("ö" , "ü" , "ó" , "ő" , "ú" , "é" , "á" , "ű" , "í" , "Ö" , "Ü" , "Ó" , "Ő" , "Ú" , "É" , "Á" , "Ű" , "Í" , " ");
		
		$replace = array("o" , "u" , "o" , "o" , "u" , "e" , "a" , "u" , "i" , "O" , "U" , "O" , "O" , "U" , "E" , "A" , "U" , "I" , "_");
		
		//név mező üres esetén elnevezés
		if (empty($_POST['title'])) {
			$filename = date("YmdHis") . ".jpg";
		}
		//ékezetes karakterek eltávolítása
		else {
			$filename = str_replace($find, $replace, $_POST['title']) . "_" . date("YmdHis") . ".jpg";
		}
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploded_files . $filename)) {
			// Eredeti kép
			$original = imagecreatefromjpeg($uploded_files . $filename);

			// Szélesség, magasság
			$width = imagesx($original);
			$height = imagesy($original);

			// Thumbnail méretezés
			if ($width < $height) {
				$coverh = 180;
				$coverw = $width / $height * 180;
			}
			else {
				$coverw = 180;
				$coverh = $height / $width * 180;
			}
			
			// Létrehozza a thumbnail-t
			$cover = imagecreatetruecolor($coverw, $coverh);
			
			imagecopyresampled($cover, $original, 0, 0, 0, 0, $coverw, $coverh, $width, $height);
			
			imagejpeg($cover, $uploded_files_thumbnails . $filename);
			
			// Töröljük a memoriából
			imagedestroy($original);
			
			print "<script>alert('Sikeresen feltöltve!'); location.href = location.href</script>";
		}
		else {
			print "<script>alert('Feltöltés sikertelen!'); location.href = location.href</script>";
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

	<head>

		<title>Galéria</title>
		
		<link href='stylesheet/stylesheet.css' rel='stylesheet' type='text/css'>

	</head>

	<body>
	
		<div id='container'>
		
			<form method='post' enctype='multipart/form-data'>
				
				Kép neve: <input type='text' name='title'/>
				
				Tallózás: <input type='file' name='image'/>
				
				<input type='submit' value='Feltöltés'>
			
			</form>
		
		</div>
		
		<?php
			$folder = opendir($uploded_files);
			
			// Ciklus végigmegy a fájlokon
			while ($file = readdir($folder)) {
				if ($file == "." or $file == "..") continue;
				
				// Megnézzük, hogy létezik az eredeti és a thumbnail
				if (file_exists($uploded_files . $file) and file_exists($uploded_files_thumbnails . $file)) {
					print "<a href='$uploded_files" . "$file'><img src='$uploded_files_thumbnails" . "$file'></a>" . "\n";
				}
			}
			
			closedir($folder);
		?>
	
	</body>
	
</html>