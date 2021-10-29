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
      <label for="miles">How many miles will you be driving each day?</label>
      <input type="text" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

      <label for="hours">How many hours a day will you be driving?</label>
      <input type="text" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">


      <!-- START PRICE -->
      <label for="price">Price Per Gallon</label>
      <ul>
      <li><input type="radio" name="price" value="3.00" <?php
        if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"';
        ?>>$3.00</li>

        <li><input type="radio" name="price" value="3.50" <?php
        if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"';
        ?>>$3.50</li>

        <li><input type="radio" name="price" value="4.00" <?php
        if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"';
        ?>>$4.00</li>      
      </ul>

      <!-- START EFFICIENCY -->
      <label for="efficiency">Fuel Efficiency</label>
      <select name="efficiency">
        <option value="" NULL
        <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected="unselected" ';
        ?>>Select One</option>
        <option value="Gas-Guzzler"
        <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Gas-Guzzler') echo 'selected="selected" ';
        ?>>Gas-Guzzler</option>
        <option value="Good"
        <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Good') echo 'selected="selected" ';
        ?>>Good</option>
        <option value="Great"
        <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Great') echo 'selected="selected" ';
        ?>>Great</option>
        <option value="Amazing"
        <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Amazing') echo 'selected="selected" ';
        ?>>Amazing</option>
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

        if(empty($_POST['hours'])){
          echo '<span class="error">Please enter number of hours you\'ll be driving</span>';
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
            $hours = $_POST['hours'];
            $price = $_POST['price'];
            $efficiency = $_POST['efficiency']; // how many miles per gallon
            $gallons;
            $days = floor(($miles / (60 * $hours))); // if driving 60 mph

            /* gas-guzzler gets 10 mpg 
            good gets 25
            great gets 35
            amazing gets 45 */

            if($efficiency == 'Gas-Guzzler') {
              $gallons = floor($miles / 10);            
            }elseif($efficiency == 'Good'){
              $gallons = floor($miles / 25);
            }elseif($efficiency == 'Great'){
              $gallons = floor($miles / 35);
            } elseif($efficiency == 'Amazing'){
              $gallons = floor($miles / 45);
            }else {
              echo 'error calculating gallons'; // for error checking
            } // END efficiency 

            $cost = floor($price * $gallons);
            $friendly_cost = floor($cost);
              echo '
              <div class="box">


                <p><strong>Total Miles:</strong> '.$miles.'</p>
                <p><strong>Daily Hours Driving per Day:</strong> '.$hours.'</p>
                <p><strong>Total Gallons Needed:</strong> '.$gallons.'</p>
                <p><strong>Fuel Per Gallon:</strong> $'.$price.'</p>
                <p><strong>Total Fuel Cost:</strong> $'.$cost.'</p>
                <p><strong>Total Days Driving:</strong> '.$days.'.</p><br>
                <p>If your driving '.$miles.' miles at 60 miles per hour it will take you '.$days.' days to reach your destination. Your '.$efficiency.' vechile will need '.$gallons.' of fuel. Fuel is priced at $'.$price.' per gallon,costing youa total of $'.$cost.'.</p>
                <h2>Please Enjoy Your Travels!</h2>
              </div>';

          } // END elseif

       } // END server request
      ?>
</body>
</html>