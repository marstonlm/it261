<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <title>Week 4 -- Celcisu Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>

  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <fieldset>
        <legend>Our Celcius Form</legend>
        <label for="cel">Enter your Celcius Value!</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it!">
      </fieldset>
    </form>

    <?php
      if($_SERVER['REQUEST_METHOD'== 'POST']) {
        
        if(isset($_POST['cel'])) {
          $cel = $_POST['cel'];
          $far = ($cel * 9/5) + 32;

            if($cel == NULL) {
              echo 'Please fill out your Celcius Value';
            } elseif($far <= 32) {
              echo 'It is pretty cold';

            }

        } // END isset



      } // END server post


    ?>
  </body>
</html>