<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Homework 5: Basic Calculator</title>

</head>
<!-- calculate how many days it will take to drive 1000 miles?  3000 miles? 10,000 miles? If you drive to Bellingham from Seattle, and it is 90 miles, how long will it take you?  How do you know that? What additional variable must you declare? -->
<body>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="miles">How many miles will you be driving?</label>
      <input type="text" name="miles">

      <label for="price">Price Per Gallon</label>
      <ul>
        <li><input type="radio" name="price" value="3.00">$3.00</li>
        <li><input type="radio" name="price" value="3.50">$3.50</li>
        <li><input type="radio" name="price" value="4.00">$4.00</li>      
      </ul>
      <input type="submit" value="Convert  It!">
      <p><a href="">Reset</a></p>
    </fieldset>
   </form>


    <?php
      /* Using a Linux OS and I've been having difficulty changing the ini file I'll get it figured out*/
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty(
          $_POST['miles'] && 
          $_POST['price'] /*&& 
          $_POST['efficiency']*/)) {
            echo 'Please fill out ALL the fields!';
        } 
        elseif(isset($_POST['miles'], 
          $_POST['price']/*,
          $_POST['efficiency']*/)) {

            $miles = $_POST['miles'];
            $price = $_POST['price'];
            //$efficiency = $_POST['efficiency'];
            $cost = $miles * $price;
            // when it comes to converting our rubles, yen, etc, to dollars, what is the logic?
            $friendly_cost = floor($cost);
            echo '
              <div class="box">
                Your trip of '.$miles.' miles is going to cost $'.$cost.'.</p>
                <h2>Please Enjoy Your Travels!</h2>
              </div>';

          } // END elseif

       } // END server request
      ?>
</body>
</html>