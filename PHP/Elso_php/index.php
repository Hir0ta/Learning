<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Elso php oldalam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div id='wrapper'>
      <div class='row'>
        <div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
          <div id='menu' class = 'panel-heading'>
            <div class='panel panel-body'><a href='index.php?lap=main'>Főoldal</a></div>
            <div class='panel panel-body'><a href='index.php?lap=vezetek'>Vezetéknév</a></div>
            <div class='panel panel-body'><a href='index.php?lap=kereszt'>Keresztnév</a></div>
            <div class='panel panel-body'><a href='index.php?lap=ev'>Születési év</a></div>
            <div class='panel panel-body'><a href='index.php?lap=honap'>Születési hónap</a></div>
            <div class='panel panel-body'><a href='index.php?lap=nap'>Születési nap</a></div>
            <div class='panel panel-body'><a href='index.php?lap=guestBook'>Vendégkönyv</a></div>
          </div>
        </div>
          <div class = 'col-xs-12 col-sm-12 col-md-9 col-lg-9'>
          <div id='panel panel-body content'>
            <?php
                //hiba kezelés
                ERROR_REPORTING (E_PARSE | E_ERROR);
              
                //content from the menu
                if ($_GET['lap'] == "main") include "main.php";
                if ($_GET['lap'] == "vezetek") include "vezetek.php";
                if ($_GET['lap'] == "kereszt") include "kereszt.php";
                if ($_GET['lap'] == "ev") include "ev.php";
                if ($_GET['lap'] == "honap") include "honap.php";
                if ($_GET['lap'] == "nap") include "nap.php";
                if ($_GET['lap'] == "guestBook") include "guestBook.php";
           
              ?>
            </div>
  
          </div>
      </div> 
    </div>
    <div class='guestCounter'>
        <?php
      	  session_start();
	
	    $filename = "database/pcs.txt";
	
	    $handle = fopen($filename, "r");
	
	    $data = fread($handle, filesize($filename));
	
	    fclose($handle);
	
	    if (isset($_SESSION['visitor'])) {
	      print "Te vagy a(z) $data. látogató.<br>";

		  //print "Attól, hogy frissíted az oldalt, a számláló nem fog nőni.<br> Session azonosítód: <b>" . session_id() . "<b>";
	    }
	    else {
		  $_SESSION['visitor'] = 1;
		
		  $handle = fopen($filename, "w");
		
		  $data++;
		
		  fwrite($handle, $data);
		
		  fclose($handle);
		
		  print "Te vagy a(z) $data. látogató.<br>";
	    }
      ?>
    </div>

</body>
</html>