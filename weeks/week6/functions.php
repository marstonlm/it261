<?php
// functions

/* Using a Linux OS and I've been having difficulty changing the ini file I'll get it figured out*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  // creating the function and then what the function is called: sayHello
  function sayHello() {
    echo 'Here is the echo from the sayHello function!';
  }
  
  sayHello(); // calling the function

  echo '<br>';

  function sayHello2($name) {
    echo 'Hello '.$name.'';
  }

  sayHello2('Lou');
  echo '<br>';
  sayHello2('Betty');
  echo '<br>';
  sayHello2('Kent');
  echo '<br>';
  sayHello2('Trent');
  echo '<br>';

  // multiple arguments
  echo '<br>';
  echo '<h2>Functions with multiple arguments</h2>';
  function sayHello3($name, $age) {
    echo 'My name is '.$name.' and I\'m '.$age.' years old.';
  }

  sayHello3('Marie', 82);
  echo '<br>';
  sayHello3('LeRoy', 83);
  echo '<br>';
  sayHello3('John', 74);
  echo '<br>';
  sayHello3('Agnies', 34);
  echo '<br>';
  sayHello3('Tony', 59);
  echo '<br>';

  echo '<br>';
  // a more complex function
  function cube($n) {
    $cubing = $n * $n * $n;
    echo $cubing;
  }

  cube(5); // calling the function

  echo '<br>';
  echo '<br>';

  // the return allows us to call out the function in different places on the page
  echo '<h2>Using \'return\'</h2>';
  function celcius_converter($temp){
    $far = ($temp * 9/5) + 32; 
    return $far;
  }

  $far = celcius_converter(40);
  echo ''.$far.' degrees';

  echo '<br>';
  echo '<br>';
  echo '<h2>Other ways to create a function</h2>';

  //creating a function for area volume
  echo '<h3>Find the area and volume</h3>';
  function area_volume($value1, $value2, $value3) {
    $area = $value1 * $value2;  // the formula for area
    $volume = $value1 * $value2 * $value3;// volume needs val1 * val2 * val3
    return array($area, $volume);
  }

  /* $my_return = area_volume(10, 5, 10);
  echo '<b>Area:</b> '.$my_return[0].'<br>';
  echo '<b>Volume:</b> '.$my_return[1].'<br>';
  */

  /* list function */
  list($my_area, $my_volume) = area_volume(12, 10, 6); // assigning area_volume to list
  echo '<b>Area:</b> '.$my_area.'';
  echo '<br>';
  echo '<b>Volume:</b> '.$my_volume.'';






?>