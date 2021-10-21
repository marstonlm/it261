 

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
    <form  action="" method="post"> <!-- Added post to method -->
      <!-- missling label opening tag -->
      <label for="num1">Enter the first number:</label>
      <input type="number" name="num1"><br> <!-- changed Num1 to num1 and changed type to number -->
      <!-- missing label opening tag -->
      <label>Enter the second number:
      <!-- closing tag was where the opening tag should've been .. moved it to here-->
      </label>
      <input type="number" name="num2"> <!-- changed type to number -->
    
  <br>
  <!-- missing ending " in value -->
    <input type="submit" value="Add Em!!"> 
    <p><a href="">Reset page</a></p> <!-- Moved from php area, closing <p> tag and echo -->
    </form>
    <!-- moved php from top of page to here. This is where we've been putting it during class -->
    <?php
  //adder-wrong.php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));





  // Added the request metod
  if($_SERVER['REQUEST_METHOD']== 'POST') {

 // Added the second $_POST for num2
    if (isset($_POST['num1'], $_POST['num2'])) {
      $num1 = intval($_POST['num1']); //and added inval() changed from a string to a number
      $num2 = intval($_POST['num2']); //and added inval() changed from a string to a number
      $myTotal = intval($num1 + $num2); // changed the N in $Num2 to a lower case n $num2 and removed - from -= and 
      
      // corrected the values ... '.$likethis.' and removed extra spaces

      // began an if/else statment to evulate the no values entered
      if(empty($num1 || $num2)) {
        echo  '<h2>Please enter a number in both boxes.</h2>'; // if missing a number
      }
      else {
      // moved the style into the p tag
      //combined the two echos into one
      // add closing tag for <h2></h2>
      // corrected $myTotal (a string) to $myTotal_int and number
      echo '<div class="box"><h2>You added '.$num1.' and '.$num2.'</h2>
      <p style="color:red;"> And the answer is <br>
      '.$myTotal.'!</p>
      </div>';
      }

      // moved to form area echo'<p><a href="">Reset page</a></p>'; // was missing the semi-colon and closing <p> tag
    } // END isset

      //;{
        // the php closing was at the very end of the file 
  } // END server post
?>
    


  </body>
  <!-- removed a ' that was at the end of the closing statement -->
</html>