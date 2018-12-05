<pre>
  <?php
 
  $szamok = array(11, 5, 14, 8, 17, 42, 27, 33, 85);
  
  rsort($szamok,SORT_NUMERIC);

  foreach ($szamok as $key =>$val){
        
    echo "[" .$key . "] => ". $val .  "\n";
  }

  ?>
</pre>