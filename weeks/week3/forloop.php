<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //for loops
  //tricky

  for($x = 0; $x <= 21; $x+=3) {
    echo 'The number is: '.$x.' <br>';
  }
  echo '<br>';

  /* a for loop for our famous celcius - far converter */
  /* DO NOT call out the celcius var OUTSIDE of the loop */
  for($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendlyfar = floor($far);
    echo '<b>Farenheit:</b> '.$friendlyfar.' is  <b>Celcius:</b> '.$celcius.'<br>';
  }

  echo '<br>';
  // kilometer and miles
  // 1 mile is 1.6 kilometers
  for($km = 0; $km <= 10; $km+=5) {
    $mile = ($km * .6);
    $friendlymile = ceil($mile);
    echo '<b>Mile: <b> '.$friendlymile.' is <b>Kilometer: </b>'.$km.'<br>';
  }



?>