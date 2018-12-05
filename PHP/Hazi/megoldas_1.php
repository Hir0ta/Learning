<?php

  $szinek = array("piros", "citromsárga", "kék", "barna", "narancs");

  asort($szinek);

  foreach ($szinek as $key =>$val){
        
    echo "<pre> [" .$key . "] => ". $val .  "\n </pre>";
        
   }

?>