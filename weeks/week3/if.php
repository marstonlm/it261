<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// the if statement
/* LOGIC -- if the temp is less than 90 degrees, all is well. Else, it's going to be a cooker*/

$temp = 91;
if($temp<9===0) {
  echo 'Not that hot';
 } else {
   echo 'It\'s a scorcher';
 }

 echo '<br>';
 /* we are going to extend the if statement, w/ an if/else statement*/

 $temp = 84;
 if($temp <= 78) {
  echo 'It is liveable.';
 }
 elseif($temp >= 85) {
  echo 'It\'s getting hotter!';
 }
 else {
  echo 'It\'s REALLY HOT!!!';
 }

 /* fun w/ logic
 if my sales are over 800,000, I will make 10% bonus of my base salary 
 if my sales are greater or equal to 600,000, I will make a bonus of 5% */
 echo '<br>';
 $sales = 599000;
 $salary = 200000;
 if($sales >= 800000) {
  $salary *= 1.10;
  echo $salary;
 }
 elseif($sales >= 600000) {
  $salary *= 1.05;
  echo $salary;
 }
 else {
  echo $salary;
 }

  echo '<br>';