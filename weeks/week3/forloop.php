<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //for loops
  //tricky

  for($x = 0; $x <= 21; $x+=3) {
    echo 'The number is: '.$x.' <br>';
  }
  echo '<br><hr style="color: orange"><br>';

  /* a for loop for our famous celcius - far converter */
  /* DO NOT call out the celcius var OUTSIDE of the loop */
  for($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendlyfar = floor($far);
    echo '<b>Farenheit:</b> '.$friendlyfar.' is  <b>Celcius:</b> <span style="color:red; font-weight=bold;">'.$celcius.'</span><hr style="color: purple;">';
  }

  echo '<br><hr style="color: orange"><br>';
  // kilometer and miles
  // 1 mile is 1.6 kilometers or 1 km is 0.6 miles
  for($km = 1; $km <= 100; $km+=5) {
    $mile = ($km * .6);
    $friendlymile = ceil($mile);
    echo '<b>Mile: </b> '.$friendlymile.' is <b>Kilometer: </b>'.$km.'<br>';
  }



?>