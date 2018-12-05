<?php
  //Első feladat
  print '<b>'; print "Az év hanyadik napja van?"; print '</b>';

  print '<pre>'; print "Jellenleg az év " . date("z.") . " napja van!"; print '</pre>';

  print '<br>';

  //Második feladat
  $number = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));

  print '<b>'; print "Hány napos a jelenlegi hónap?"; print '</b>';

  print '<pre>'; print "Az aktuális hónap " .  $number . " napos."; print '</pre>';

  print '<br>';

  //Harmadik feladat
  $dayLeft = 365-date("z");

  print '<b>'; print "Hány nap van még hátra az évből?"; print '</b>';

  print '<pre>'; print "Még " . $dayLeft . " nap van hátra az évből."; print '</pre>';

  print '<br>';

  //Negyedik feladat
  
  $napok = Array( "vasárnap" , "hétfő" , "kedd",  "szerda","csütörtök", "péntek", "szombat");
  
  $nap = $napok[date("w", mktime(0, 0, 0, 12, 31, date("Y")))];

  print '<b>'; print "Milyen napra esik szilveszter?"; print '</b>';

  print '<pre>'; print "Idén szilveszter " . $nap . "i napra esik."; print '</pre>';

  print '<br>';
  

  //Ötödik feladat
  
  $february = cal_days_in_month(CAL_GREGORIAN, 2, date("Y")+1);

  print '<b>'; print "Hány napos lesz jövőre február?"; print '</b>';

  print '<pre>'; print "Jövőre a február hónap " . $february . " napos lesz!"; print '</pre>';
  
  print '<br>';
  

  //Hatodik feladat
  
  $szuletes = time() - 6666*24*60*60;

  print '<b>'; print "Mikor született akinek a mai napon van élete 6666.napja?"; print '</b>';

  print '<pre>'; print date("Y.m.d.", $szuletes) . "-én/án született!"; print '</pre>';

  print '<br>';
  

  //Hetedik feladat

  $szulinap = mktime(0, 0, 0, 1, 28, 1991);

  $napjaim = (int)((time()-$szulinap) / (24*60*60));

  print '<b>'; print "Mennyi napja születtél?"; print '</b>';

  print '<pre>'; print $napjaim . " napja születtem"; print '</pre>';



  
  

  
 
  




?>