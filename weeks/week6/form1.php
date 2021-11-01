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
  $wine = '';
  $regions = '';
  $comments = '';
  $privacy = '';

  $first_name_Err = '';
  $last_name_Err = '';
  $email_Err = '';
  $gender_Err = '';
  $wine_Err = '';
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

  }

    

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emailable Form Number 1</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <label for="first_name">First Name</label>
      <input type="text" name="first_name">
      <span class="error">
        <?php echo $first_name_Err; ?>
      </span>

      <label for="last_name">Last Name</label>
      <input type="text" name="last_name">
      <span class="error">
        <?php echo $last_name_Err; ?>
      </span>

      <label for="email">Email</label>
      <input type="email" name="email">

      <label for="gender">Gender</label>
      <ul>
        <li><input type="radio" name="gender" value="female">Female</li>
        <li><input type="radio" name="gender" value="male">Male</li>
        <li><input type="radio" name="gender" value="other">Other</li>
      </ul>

      <label for="wines">Favorite</label>
      <ul>
        <li><input type="checkbox" name="wines[]" value="cab">Cabernet</li>
        <li><input type="checkbox" name="wines[]" value="merlot">Merlot</li>
        <li><input type="checkbox" name="wines[]" value="syrah">Syrah</li>
        <li><input type="checkbox" name="wines[]" value="malbec">Melbec</li>
        <li><input type="checkbox" name="wines[]" value="blend">Red Blend</li>
      </ul>

      <label for="regions">Regions</label>
      <select name="regions">
        <option value="" NULL>Select One</option>
        <option value="nw">Northwest</option>
        <option value="sw">Southwest</option>
        <option value="mw">Midwest</option>
        <option value="ne">Northeast</option>
        <option value="se">Southeast</option>
        <option value="so">South</option>
      </select>

      <label for="comments">Comments</label>
      <textarea name="comments"></textarea>

      <label for="privacy">Privacy</label>
      <ul>
        <li><input type="radio" name="privacy">I agree</li>
      </ul>

      <input type="submit" value="Send It">
      <p><a href="">Reset</a></p>

    </fieldset>
    </form>
  </body>
</html>