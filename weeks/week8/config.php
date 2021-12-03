<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  ob_start();  // prevents header errors before reading the whole page!
  define('DEBUG', 'TRUE');  // We want to see our errors

  include('credentials.php');

 

 

 

 

 

 

 

 

  function myError($myFile, $myLine, $errorMsg)
  {
  if(defined('DEBUG') && DEBUG)
  {
  echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }
      
      
  }
?>