<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>Our currency -- Our Sticky Form!</title>

</head>

<body>
  <form action="<?php echo ($SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
      <label for="name">NAME</label>
      <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

      <label for="email">EMAIL</label>
      <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

      <label for="amount">HOW MUCH DO YOU HAVE?</label>
      <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">

      <label for="currency">CHOOSE YOUR CURRENCY</label>
      <ul>
        <li><input type="radio" name="currency" value="0.013"
        <?php
        if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"';
        ?>>Rubles</li>


        <li><input type="radio" name="currency" value="0.76" 
        <?php
        if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked"';
        ?>>Canadian</li>
                 

        <li><input type="radio" name="currency" value="1.28" 
        <?php
        if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"';
        ?>>Pounds</li>

        <li><input type="radio" name="currency" value="1.18" 
        <?php
        if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"';
        ?>>Euros</li>

        <li><input type="radio" name="currency" value="0.0094" 
        <?php
        if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked"';
        ?>>Yen</li>        
      </ul>

      <label for="bank">Choose your banking institution</label>

      <select name="bank">
        <option value="" NULL
        <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected" ';
        ?>
        >Select one!</option>
        <option value="BOA"
        <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="selected" ';
        ?>
        >Bank of America</option>
        <option value="Key"
        <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Key') echo 'selected="selected" ';
        ?>
        >Key Bank</option>
        <option value="Chase"
        <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase') echo 'selected="selected" ';
        ?>
        >Chase</option>
        <option value="BECU"
        <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected" ';
        ?>
        >Boieng Credit Union</option>
        <option value="Mattress" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Mattress') echo 'selected="selected" ';
        ?>
        >Mattress</option>
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
          if($_POST['bank'] == NULL){
            echo '<span class="error">Please choose your banking institution!</span>';
          }

          elseif(isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank']) && is_numeric($_POST['amount'])
          ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank']; /* without the is_numeric I was throwing -----Fatal error: Uncaught TypeError: Unsupported operand types: string * string in /opt/lampp/htdocs/repos/it261/weeks/week5/currency3.php:129 Stack trace: #0 {main} thrown in /opt/lampp/htdocs/repos/it261/weeks/week5/currency3.php on *now* line 130 ----- */

            $total = $amount * $currency; // I was gettin an error type: string * string. This was how I fixed it.
            $friendly_total = floor($total);

            echo '
            <div class="box">
              <h2>Hello, '.$name.'</h2>
              <p>You have $'.$friendly_total.' American dollars, and it will be deposited in <b>'.$bank.'</b>. We will email you at <b>'.$email.'</b> within the next 24 hours.</p>            
            </div>
            ';
          } // END isset
       } // END server request

      ?>
</body>
</html>