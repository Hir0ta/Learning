<?php
    ERROR_REPORTING(E_PARSE | E_ERROR);

    //database
    include 'config.php';
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

        <div class='row text-primary'>

            <div class='panel-group col-xs-12 col-sm-12 col-md-12 col-lg-12'>

                <div class='panel'>

                    <div class='panel-body'>

                        <h1>Phonebook</h1>

                    </div>

                </div>

            </div>

            <div class='panel-group col-xs-6 col-sm-6 col-md-6 col-lg-6' >

                <div class='panel' style='height: 70vh;'>

                    <div class='panel-body'>

                        <?php

                            $sql = "SELECT id, Name FROM contacts ORDER BY Name";

                            $result = mysqli_query($db, $sql);

                            //Write out the contacts:
                            while ($row = mysqli_fetch_assoc($result)) {

                                print "<h4><a href='index.php?id=" . $row['id'] . "'>" . $row['Name'] . "</a></h4><br>" . "\n";

                            }

                            //Don't close the db!!!

                        ?>

                        <h4 style='text-decoration: underline;'><a href='new.php'>+ New contact</a></h4>

                    </div>

                 </div>

            </div>

            <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>

                <div class='panel' style='height: 70vh;'>

                    <div class='panel-body'>

                        <?php
							$sql = "SELECT Phonenumber, Email FROM contacts WHERE id=" . $_GET['id'];
							
							//die(print $sql); //debug
							
							$result = mysqli_query($db, $sql);
							
							//write out results
							while ($row = mysqli_fetch_assoc($result)) {
								print "<h4>Phonenumber: <a href='tel:" . $row['Phonenumber'] . "'>" . $row['Phonenumber'] . "</a><br><br>Email: <a href='mailto: " . $row['Email'] . "'>" . $row['Email'] . "</a></h4>";
							}
							
							mysqli_close($db);
                        ?>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>

