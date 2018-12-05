<pre>
  <?php

    $szoveg = "MiNtA fElAdAt";

    $letter_A = array ("A");

    $number_4 = array ("4");
   
    $changed = str_replace ($letter_A, $number_4, $szoveg);
  
    print $changed;

  ?>
</pre>