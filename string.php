<?php
  $phrase = "Aim High Dream Big";

  $len = strlen($phrase);

  echo $len;
  echo "<br> \n";

  //substr
  echo substr($phrase, 0, 5); //start from 0 get first 5 characters
  echo "<br> \n";
  //strpos
  echo strpos($phrase, 'High');
  echo "<br> \n";

  $start = strpos($phrase, "High");
  echo substr($phrase, $start, 10); //High Dream
?>
