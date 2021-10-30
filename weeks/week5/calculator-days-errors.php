<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Homework 5: Our Trip Calculator</title>

</head>
<!-- calculate how many days it will take to drive 1000 miles?  3000 miles? 10,000 miles? If you drive to Bellingham from Seattle, and it is 90 miles, how long will it take you?  How do you know that? What additional variable must you declare? -->
<body id="day-errors">
  <header>
    <h1>Our Trip Calculator</h1>
  </header>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="name">Your Name</label>
      <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

      <label for="miles">How many miles will you be driving?</label>
      <input type="text" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

      <label for="hours">How many hours per day would you like to be driving?</label>
      <input type="text" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['miles']);?>">

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
        if(empty($_POST['name'])){
          echo '<div id="day-errors" class="box errors"">
          <p>Please fill out your name.</p></div>';
        }

        if(empty($_POST['miles'])){
          echo '<div id="day-errors" class="box errors">
          <p>Please fill out your miles.</p></div>';
        }

        if(empty($_POST['hours'])){
          echo '<div id="day-errors" class="box errors">
          <p>Please fill out your hours.</p></div>';
        }

        if(empty($_POST['price'])){
          echo '<div id="day-errors" class="box errors">
          <p>Please fill out your fuel price.</p></div>';
        }

        if($_POST['efficiency'] == NULL){
          echo '<div id="day-errors" class="box errors"><p>Please choose your vechiles fuel efficiency</p></div>';
        }
          
        elseif(isset($_POST['miles'], 
          $_POST['price'],
          $_POST['efficiency'])) {

            $name = $_POST['name'];
            $miles = $_POST['miles'];
            $hours = $_POST['hours'];
            $total_hours = floor($miles / 100); // assuming 60mph
            $daily_miles = $hours * 100;
            $price = $_POST['price'];
            $efficiency = $_POST['efficiency']; // how many miles per gallon
            $mpg;
            $gallons;
            $days = floor($miles / $daily_miles);

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
            //$friendly_cost = number_format($cost, 2);
              echo '
              <div id="day-errors" class="box">
                <h2>Calculator Results</h2>
                <p>'.$name.' you will be driving <strong>'.$miles.' miles</strong>.</p>
                <p>Your vehicle has an efficiency rating of <strong>'.$mpg.' miles per gallon</strong>.</p>
                <p>Your total cost for gas will be $'.$cost.' dollars.</p>
                <p>You will be driving a total of <strong>'.$total_hours.' hours equating to '.$days.' days</strong>.</p>
              </div>';

          } // END elseif

       } // END server request
      ?>
</body>
</html>