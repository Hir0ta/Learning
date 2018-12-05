<?php
 
  $szinek = array("piros", "citromsárga", "kék", "barna", "narancs");
  
  for ($i=0; $i < 5; $i++) {
      
    $length = strlen ($szinek[$i]);
      
    if ($length > 4){
        
      echo '<pre>'; print $szinek[$i]; echo '</pre>';
        
    }
      
  }

?>
