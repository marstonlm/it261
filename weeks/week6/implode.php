<?php
// my implode and my wines functionj!!!

/* Using a Linux OS and I've been having difficulty changing the ini file I'll get it figured out*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// cab, merlot, malbec, syrah and blend

$wines = array(
  'cab',
  'merlot',
  'malbec',
  'syrah',
  'blend');

  // echo $wines;

  $my_wines = implode(',', $wines);
  echo $my_wines;


?>