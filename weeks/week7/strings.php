<?php

  // sub strings and replace

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  $statement = 'Presently, I am reading The Looming Tower';
  echo substr($statement, 0); // 0 zero displayes complete string
  echo '<br>';

  echo ($statement);
  echo '<br>';

  echo substr($statement, 0, 4);
  echo '<br>';

  echo substr($statement, 0, 14);
  echo '<br>';

  echo substr($statement, -7); // the neg value started with counting from the end of string
  echo '<br>';

  echo substr($statement, -15, 5); // counted 15 from end then forward 5
  echo '<br>';

  // the other function will be string replace

  $statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book, the Looming Tower.';
  echo str_replace('the', 'The', $statement2); // replace 'the' with 'The' in var
  


  ?>