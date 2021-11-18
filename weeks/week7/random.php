<?php

  // random.php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  $dice = rand(1, 6);

  echo $dice;
  echo '<br>';

  $dice1 = rand(1, 6);
  $dice2 = rand(1, 6);

  echo $dice1;
  echo '<br>';
  echo $dice2;
  echo '<br>';

  //if I throw a double, I will win!!!

  if($dice1 == $dice2) {
    echo 'I won!';
  } else {
    echo 'I did not win.';
  }



  // rand refresh
  $i = rand(1, 20);
  echo $i; // if echo i, it is a number
  echo '<br>';

  // photos -- we will display our photos randomly

  $photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
  );

  $photos[0] = 'photo1';
  $photos[1] = 'photo2';
  $photos[2] = 'photo3';
  $photos[3] = 'photo4';
  $photos[4] = 'photo5';

  $i = rand(0, 4); // function is being passed to i 
  $selected_image = ''.$photos[$i].'.jpg'; 
  echo '<img src="images/'.$selected_image.'"  alt="'.$photos[$i].'">';




    ?>