<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Homework 5: Calculator w/ Fuel Efficiency Drop Down</title>

</head>
<!-- calculate how many days it will take to drive 1000 miles?  3000 miles? 10,000 miles? If you drive to Bellingham from Seattle, and it is 90 miles, how long will it take you?  How do you know that? What additional variable must you declare? -->
<body>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="miles">How many miles will you be driving?</label>
      <input type="text" name="miles">

      <label for="price">Price Per Gallon</label>
      <ul>
        <li><input type="radio" name="price" value="0.300">$3.00</li>
        <li><input type="radio" name="price" value="0.350">$3.50</li>
        <li><input type="radio" name="price" value="0.400">$4.00</li>      
      </ul>

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
        if(empty($_POST['miles'])){
          echo '<span class="error">Please enter number of miles</span>';
        }

        if(empty($_POST['price'])){
          echo '<span class="error">Please check the price of gas.</span>';
        }

        if($_POST['efficiency'] == NULL){
          echo '<span class="error">Please choose your vechiles fuel efficiency</span>';
        }
            
        elseif(isset($_POST['miles'], 
          $_POST['price'],
          $_POST['efficiency'])) {

            $miles = $_POST['miles'];
            $price = $_POST['price'];
            $efficiency = $_POST['efficiency']; // how many miles per gallon
            $gallons;

            /* gas-guzzler gets 10 mpg 
            good gets 25
            great gets 35
            amazing gets 45 */

            if($efficiency == 'Gas-Guzzler') {
              $gallons = floor($miles / 10);
            }elseif($efficiency == 'Good'){
              $gallons = $miles / 25;
            }elseif($efficiency == 'Great'){
              $gallons = $miles / 35;
            } elseif($efficiency == 'Amazing'){
              $gallons = floor($miles / 45);
            }else {
              echo 'error calculating gallons'; // for error checking
            } // END efficiency 

            $cost = ($miles * $gallons) * $price;
            $friendly_cost = floor($cost);
              echo '
              <div class="box">
                With your '.$efficiency.' vechile, you\'ll need '.$gallons.' gallons of fuel. Your trip of '.$miles.' miles is going to cost $'.$cost.'.</p>
                <h2>Please Enjoy Your Travels!</h2>
              </div>';

          } // END elseif

       } // END server request
      ?>
</body>
</html>