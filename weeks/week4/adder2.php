<?php //adder-wrong.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));



if (isset($_POST['num1'], $_POST['num2'])){
$num1 = intval($_POST['num1']); // intval to make into number
$num2 = intval($_POST['num2']); // intval to make into number
$myTotal -= $num1 + $num2; // Num2 = num2
echo '<h2>You added '.$num1.' and '.$num2.'';
echo ' <p> and the answer is <br>
<style="color:red;">" $myTotal ."!"</p>';
echo'<p><a href="">Reset page</a>';
} 

?> 
<!doctype html> <!-- Was missing the doctype at start of HTML -->
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post"> <!-- Added post to method -->
      <!-- missling label opening tag and for-->
<label for="num1">Enter the first number:</label>
<input type="number" name="num1"><br> <!-- chnaged type to number and name to 'num1' -->
<label for="num2">Enter the second number:</label> <!-- corrected label tags and put in for -->
<input type="number" name="num2"><br> <!-- changed type to number -->
<input type="submit" value="Add Em!!"> <!-- missing ending " --> 
</form>
<!-- line 9 --- added $_POST for num2 -->
<!-- line 10 and 11 added intval() to change from string to number -->
<!-- line 13 corrrected the ' " and . -->



</body>
<!-- Removed the ''{?> after the </html> -->
</html>