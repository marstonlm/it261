<?php
  //adder-wrong.php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal -= $num1 + $Num2;
    // add closing tag for <h2></h2>
    // corrected the values ... '.$likethis.' and removed extra spaces
    // moved the style into the p tag
    echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
    echo '<p style="color:red;"> and the answer is <br>
    '.$myTotal.'!</p>';
    echo'<p><a href="">Reset page</a></p>'; // was missing the semi-colon and closing <p> tag
   }

      //;{
        // the php closing was at the very end of the file 
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
    <!-- removed \ added method -->
    <form  action="" method="">
      <!-- missling label opening tag -->
      <label>Enter the first number:</label>
      <input type="text" name="Num1"><br>
      <!-- missing label opening tag -->
      <label>Enter the second number:
      <!-- closing tag was where the opening tag should've been .. moved it to here-->
      </label>
    <input type="text" name="num2">
  <br>
  <!-- missing ending " in value -->
    <input type="submit" value="Add Em!!"> 
    </form>
 


  </body>
  <!-- removed a ' that was at the end of the closing statement -->
</html>