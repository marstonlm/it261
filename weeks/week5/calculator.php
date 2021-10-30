<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Homework 5: Our Calculator</title>

</head>
<!-- calculate how many days it will take to drive 1000 miles?  3000 miles? 10,000 miles? If you drive to Bellingham from Seattle, and it is 90 miles, how long will it take you?  How do you know that? What additional variable must you declare? -->
<body>
  <header>
    <h1>Our Calculator</h1>
  </header>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="miles">How many miles will you be driving each day?</label>
      <input type="text" name="miles">

      <!-- START PRICE -->
      <label for="price">Price Per Gallon</label>
      <ul>



      <li><input type="radio" name="price" value="3.00">$3.00</li>
        <li><input type="radio" name="price" value="3.50">$3.50</li>
        <li><input type="radio" name="price" value="4.00">$4.00</li>
      </ul>

      <!-- START EFFICIENCY -->
      <label for="efficiency">Fuel Efficiency</label>
      <select name="efficiency">
        <option value="" NULL>Select One</option>
        <option value="Gas-Guzzler">Gas-Guzzler</option>
        <option value="Good">Good</option>
        <option value="Great">Great</option>
        <option value="Amazing">Amazing</option>
      </select>
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
          $_POST['price'] && 
          $_POST['efficiency'])){
          echo '<div class="box error"><h2><strong>ERROR!</strong></h2><p>Please enter a valid distance, price per gallon and fuel efficiency</p></div>';
        }

          
        elseif(isset($_POST['miles'], 
          $_POST['price'],
          $_POST['efficiency'])) {

            $miles = $_POST['miles'];
            $price = $_POST['price'];
            $efficiency = $_POST['efficiency']; // how many miles per gallon
            $mpg;
            $gallons;

            if($efficiency == 'Gas-Guzzler') {
              $mpg = 10;
              $gallons = floor($miles / 10);            
            }elseif($efficiency == 'Good'){
              $mpg = 20;
              $gallons = floor($miles / 20);
            }elseif($efficiency == 'Great'){
              $mpg = 40;
              $gallons = floor($miles / 40);
            } elseif($efficiency == 'Amazing'){
              $mpg = 80;
              $gallons = floor($miles / 80);
            }else {
              echo 'error calculating gallons'; // for error checking
            } // END efficiency 

            $cost = number_format(($price * $gallons), 2);
            $friendly_cost = number_format($cost, 2);
              echo '
              <div class="box">
                <h2>Calculator Results</h2>
                <p>You have driven '.$miles.' miles</p>
                <p>Your vehicle has an efficiency rating of '.$mpg.' miles per gallon</p>
                <p>Your total cost is $'.$cost.' dollars</p>
              </div>';

          } // END elseif

       } // END server request
      ?>
</body>
</html>