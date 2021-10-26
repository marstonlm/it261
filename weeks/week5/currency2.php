<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Our currency 2 Form with a drop down select option</title>

</head>

<body>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="name">NAME</label>
      <input type="text" name="name">

      <label for="email">EMAIL</label>
      <input type="email" name="email">

      <label for="amount">HOW MUCH DO YOU HAVE?</label>
      <input type="number" name="amount">

      <label for="currency">CHOOSE YOUR CURRENCY</label>
      <ul>
        <li><input type="radio" name="currency" value="0.013">Rubles</li>
        <li><input type="radio" name="currency" value=".76">Canadian</li>
        <li><input type="radio" name="currency" value="1.28">Pounds</li>
        <li><input type="radio" name="currency" value="1.18">Euros</li>
        <li><input type="radio" name="currency" value="0.0094">Yen</li>        
      </ul>

      <label for="bank">Choose your banking institution</label>

      <select name="bank">
        <option value="" NULL>Select one!</option>
        <option value="BOA">Bank of America</option>
        <option value="key">Key Bank</option>
        <option value="chase">Chase</option>
        <option value="BECU">Boieng Credit Union</option>
        <option value="mattress">Mattress</option>
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
          // if our posts name, email, currency, and amount is empty, then we will call out a specific empty echo

          if(empty($_POST['name'])){
            echo '<span class="error">Please fill out your name</span>';
          }

          if(empty($_POST['email'])){
            echo '<span class="error">Please fill out your email</span>';
          }

          if(empty($_POST['amount'])){
            echo '<span class="error">Please fill out your amount</span>';
          }

          if(empty($_POST['currency'])){
            echo '<span class="error">Please choose your currency</span>';
          }

          // if post bank is NULL, please select your bank
          if($_POST['bank'] == NULL) {
            echo '<span class="error">Please choose your banking institution!</span>';
          }

          if(isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank']
          )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            $total = $amount * $currency;
            $friendly_total = floor($total);

            echo '
            <div class="box">
              <h2>Hello, '.$name.'</h2>
              <p>You have $'.$friendly_total.' American dollars, and it will be deposited in <b>'.$bank.'</b>. We will email you at <b>'.$email.'</b> within the next 24 hours.</p>            
            </div>
            ';


          } // END isset






       } // END server request
















          // from currency1.php
          /*if(empty(
            $_POST['name'] && 
            $_POST['email'] && 
            $_POST['amount'] && 
            $_POST['currency'])) {
              echo '<span class="error">Please fill out ALL the fields!</span>';
          } 
          elseif(isset($_POST['name'], 
          $_POST['email'],
          $_POST['amount'],
          $_POST['currency'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency  = $_POST['currency'];
            // when it comes to converting our rubles, yen, etc, to dollars, what is the logic?
            $dollars = $amount * $currency;
            $friendly_dollars = floor($dollars);
            echo '
              <div class="box">
                <h2>Hello, '.$name.'</h2>
                <p>You now have '.$friendly_dollars.' American dollars, and we will be sending you an email at <b>'.$email.'</b>!</p>
              </div>';

            echo $dollars;
            echo '<br>'; 
            echo $name;


          } */

      ?>
</body>
</html>