<?php

// week 8 people file
// the little database work
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


  //people.php
  // <people-view.php 
  // config files
  // credentials

  include('config.php');

  // for big database assignment, header include will go here


  // grab the table and assign it to a variable
  $sql = 'SELECT * FROM people';

  // need to connect to the database using mysqli_connect() function
  // on the people.php page
// AND... if we cannot connect to the database... we DIE

  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error())); // AND... if we cannot connect to the database... we DIE

  // create variable $result

  $result = mysqli_querry($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn))); //If we cannot extract data....

  



?>