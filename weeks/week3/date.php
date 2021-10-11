<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  //the date function
  echo date("l jS \of F Y h:i:s A:");
  echo '<br>';
  echo date("H:i");
  echo '<br>';
  date_default_timezone_set('America/Los_Angeles');
  echo date("H:i");
  echo '<br><hr style="color:orange"><br>';

  /* why change the time from a 12 hour clock to a 24 hour clock? */
  /* To use and if/elseif statement that will result in a different message based on the time of day */
  // If time is less than 11, it's morning
  // If time is less than 16 it's afternoon
  //else, it's evening
  // Need to assign a time to a var
  $time = date("H:i");
  if($time <= 11) {
    echo '<h2 style="color: yellow;">Goood Morning Lou</h2>';
  } elseif($time <= 16) {
    echo '<h2 style="color: lightblue;"><Good Afternoon Lou</h2>';
  } else {
    echo '<h2 style="color: purple;">Good Evening Lou</h2>';
  }
//can place html elements inside echos





?>