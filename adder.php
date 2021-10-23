<!-- Moved PHP to below form -->
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
<?php //adder-wrong.php

/* Using a Linux OS and I've been having difficulty changing the ini file 
I'll get it figured out*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


  if (isset($_POST['num1'], $_POST['num2'])){
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $myTotal = $num1 + $num2;

    if(empty($num1 || $num2)) {
      echo  '<h2>Please enter a number in both boxes.</h2>'; // if missing num2
    }
    else {
      echo '<h2>You added '.$num1.' and '.$num2.'</h2>
      <p style="color:red;"> And the answer is <br>
      '.$myTotal.'!</p>';
      echo '<p><a href="">Reset page</a></p>';
    }
  } 
?>
<!-- line 31 --- added $_POST for num2 -->
<!-- line 31 and 32 added intval() to change from string to number -->
<!-- line 33 removed a - that was from $myTotal -= -->
<!-- line 35 Nested an if/else statement -->
<!-- line 39 changed $Num2 to $num2 -->
<!-- line 40 moved the style tag into the <p> from line 41 -->
<!-- line 45 changed all double quotes to single quotes -->
<!-- line 45 added a . and removed the extra spaces around the to the " $myTotal ." -->
<!-- line 45 removed the extra single quote after the ! -->

</body>
<!-- Removed the ''{?> after the </html> -->
</html>