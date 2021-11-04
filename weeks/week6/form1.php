<?php
/* Using a Linux OS and I've been having difficulty changing the ini file I'll get it figured out*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CANNOT echo above when above doctype!!!!!

  // GLOBAL VARABILES
  $first_name = '';
  $last_name = '';
  $email = '';
  $gender = '';
  $wines = '';
  $regions = '';
  $comments = '';
  $privacy = '';

  // ERROR varabiles
  $first_name_Err = '';
  $last_name_Err = '';
  $email_Err = '';
  $gender_Err = '';
  $wines_Err = '';
  $regions_Err = '';
  $comments_Err = '';
  $privacy_Err = '';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['first_name'])) {
      $first_name_Err = 'Please fill out your First Name';
    } else {
      $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
      $last_name_Err = 'Please fill out your Last Name';
    } else {
      $last_name = $_POST['last_name'];
    }

    if(empty($_POST['gender'])) {
      $gender_Err = 'Please fill check your gender';
    } else {
      $gender = $_POST['gender'];
    }

    if(empty($_POST['email'])) {
      $email_Err = 'Please fill enter your email';
    } else {
      $email = $_POST['email'];
    }

    if(empty($_POST['wines'])) {
      $wines_Err = 'Please choose your favorite wines';
    } else {
      $wines = $_POST['wines'];
    }

    if($_POST['regions'] == NULL) {
      $regions_Err = 'Please select your region';
    } else {
      $regions = $_POST['regions'];
    }

    if(empty($_POST['privacy'])) {
      $privacy_Err = 'You MUST agree';
    } else {
      $privacy = $_POST['privacy'];
    }

    if(empty($_POST['comments'])) {
      $comments_Err = 'Please share you comments with us';
    } else {
      $comments = $_POST['comments'];
    }

    /* IMPLODE
     the logic is if post wines IS NOT empty, the, we need to grab the wines and displayt them, just like we did in our implode.php */

    function my_wines() {
      $my_return = '';
      if(!empty($_POST['wines'])) {
        $my_return =  implode(', ', $_POST['wines']);
      } // closes if statement

      return $my_return;
    } // closes function


    // STARTing the email portion
    // says all must be completed
    if(isset($_POST['first_name'],  
    $_POST['last_name'],  
    $_POST['email'],  
    $_POST['gender'],  
    $_POST['wines'],  
    $_POST['regions'],  
    $_POST['comments'], 
    $_POST['privacy'] )) {

    //creating email to receive to receive form

    $to = 'luann.webster@seattlecentral.edu'; // assigning email to be sent to
    $subject = 'Test Email,' .date('m/d/y');
     // what is it we want it to say in this email
    $body = '
      The first name is '.$first_name.' '.PHP_EOL.'
      The last name is '.$last_name.' '.PHP_EOL.'
      Gender: '.$gender.' '.PHP_EOL.'
      Region: '.$regions.' '.PHP_EOL.'
      Wines: '.my_wines().' '.PHP_EOL.'
      Comments: '.$comments.' '.PHP_EOL.'
      ';


    // mail function
    mail($to, $subject, $body); // in the email include the to subject and body
    header('Location: thx.php'); // the thx.php would be the page our sender will see once form is submitted

    } // ENDs isset


  } // end of server request

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Emailable Form Number 1</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <label for="first_name">First Name</label>
      <input type="text" name="first_name" value="<?php
      if(isset($_POST['first_name'])) echo htmlspecialchars( $_POST['first_name']); ?>">
      <span class="error">
        <?php echo $first_name_Err; ?>
      </span>


      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" value="<?php
      if(isset($_POST['last_name'])) echo htmlspecialchars( $_POST['last_name']); ?>">
      <span class="error">
        <?php echo $last_name_Err; ?>
      </span>

      
      <label for="email">Email</label>
      <input type="email" name="email" value="<?php
      if(isset($_POST['email'])) echo htmlspecialchars( $_POST['email']); ?>">
      <span class="error">
        <?php echo $email_Err; ?>
      </span>


      <label for="gender">Gender</label>
      <ul>
        <li><input type="radio" name="gender" value="female"
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked" '
        ;?>
        >Female</li>
        <li><input type="radio" name="gender" value="male"
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked" '
        ;?>>Male</li>
        <li><input type="radio" name="gender" value="other"
        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked" '
        ;?>>Other</li>
      </ul>
      <span class="error">
        <?php echo $gender_Err; ?>
      </span>


      <label for="wines">Favorite Wines</label>
      <ul>
        <!-- making STICKY ----- the first question is isset() && the second question is it in the array -->
        <li><input type="checkbox" name="wines[]" value="cab"
        <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"';  ?>
        >Cabernet</li>

        <li><input type="checkbox" name="wines[]" value="merlot" 
        <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked" ';  ?>
        >Merlot</li>

        <li><input type="checkbox" name="wines[]" value="syrah"
        <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked" ';  ?>
        >Syrah</li>

        <li><input type="checkbox" name="wines[]" value="malbec"
        <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked" ';  ?>
        >Melbec</li>

        <li><input type="checkbox" name="wines[]" value="blend"
        <?php if(isset($_POST['wines']) && in_array('blend', $wines)) echo 'checked="checked" ';  ?>
        >Red Blend</li>
      </ul>
      <span class="error">
        <?php echo $wines_Err; ?>
      </span>


      <label for="regions">Regions</label>
      <select name="regions">
        <option value="" NULL
        <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected" '    ;?>
        >Select One</option>

        <option value="nw"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected="unselected" '    ;?>
        >Northwest</option>

        <option value="sw"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected="unselected" '    ;?>
        >Southwest</option>

        <option value="mw"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected="unselected" '    ;?>
        >Midwest</option>

        <option value="ne"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected="unselected" '    ;?>
        >Northeast</option>

        <option value="se"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected="unselected" '    ;?>
        >Southeast</option>

        <option value="so"
        <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected="unselected" '    ;?>
        >South</option>
      </select>
      <span class="error">
        <?php echo $regions_Err; ?>
      </span>


      <label for="comments">Comments</label>
      <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
      <span class="error">
        <?php echo $comments_Err; ?>
      </span>


      <label for="privacy">Privacy</label>
      <ul>
        <li><input type="radio" name="privacy" value="agree"
        <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" ';?>
        >I agree</li>
      </ul>
      <span class="error">
        <?php echo $privacy_Err; ?>
      </span>


      <input type="submit" value="Send It">
      <p><a href="">Reset</a></p>

    </fieldset>
    </form>
  </body>
</html>