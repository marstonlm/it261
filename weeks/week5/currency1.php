<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Basic Currency Form</title>

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
            $_POST['name'] && 
            $_POST['email'] && 
            $_POST['amount'] && 
            $_POST['currency'])) {
              echo 'Please fill out ALL the fields!';
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

            echo $dollars;
            echo '<br>'; 
            echo $name;


          } // END elseif

       } // END server request




      ?>
</body>
</html>