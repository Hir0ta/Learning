<?php
    ERROR_REPORTING(E_PARSE | E_ERROR);

    include "config.php";

    $sql = "SELECT COUNT(azonosito) as count FROM jelentkezok";

    $result = mysqli_query($db, $sql);
    
    $row = mysqli_fetch_array($result, 'MYSQLI_ASSOC');

    $headcount = $row['count'];

    if ($headcount >= 4 ){

        print "<h1>Sajnáljuk,az eseményre a helyek elfogytak!</h1>";

    }else if($headcount < 4 ){

        header("Location: reg.php");

    }

?>