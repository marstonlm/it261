<?php
/* ----- START CONTACT FORM ----- */

// GLOBAL VARABILES
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$owner = '';
$breeds = '';
$groups = '';
$comments = '';
$privacy = '';

// ERROR varabiles
$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$phone_Err = '';
$owner_Err = '';
$breeds_Err = '';
$groups_Err = '';
$comments_Err = '';
$privacy_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your first name.';
  } else {
    $first_name = $_POST['first_name'];
  }

  if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your last name.';
  } else {
    $last_name = $_POST['last_name'];
  }

  if(empty($_POST['email'])){
    $email_Err = 'Please enter your email';
  } else {
    $email = $_POST['email'];
  }

  if(empty($_POST['phone'])) {
    $phone_Err = 'Enter your phone number';
  } elseif(array_key_exists('phone', $_POST)) {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
      $phone_Err = 'Invalid format!';
    } else {
      $phone = $_POST['phone'];
    }
  }

  if(empty($_POST['owner'])) {
    $owner_Err = 'Please let us know if you have a dog.';
  } else {
    $owner = $_POST['owner'];
  }

  if(empty($_POST['breeds'])) {
    $breeds_Err = 'Please let us know your favorite breeds are.';
  } else {
    $breeds = $_POST['breeds'];
  }

  if($_POST['groups'] == NULL) {
    $groups_Err = 'Please select your favorite breed group.';
  } else {
    $groups = $_POST['groups'];
  }

  if(empty($_POST['comments'])) {
    $comments_Err = 'Let us know what you think. Please leave a comment';
  } else {
    $comments = $_POST['comments'];
  }

  if(empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST agree';
  } else {
    $privacy = $_POST['privacy'];
  }

  function my_breeds() {
    $my_return = '';
    if(!empty($_POST['breeds'])) {
      $my_return = implode(', ', $_POST['breeds']);
    }

    return $my_return;
  } // close breed function

  
  if(isset($_POST['first_name'],
  $_POST['last_name'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['owner'],
  $_POST['breeds'],
  $_POST['groups'],
  $_POST['comments'],
  $_POST['privacy'])) {

    $to = 'luann.webster@seattlecentral.edu'; // assigned email address to send form to
    $subject = 'Dog Stuff,' .date('m/d/y');

    $body = '
      First name: '.$first_name.' '.PHP_EOL.'
      Last name: '.$last_name.' '.PHP_EOL.'
      Email: '.$email.' '.PHP_EOL.'
      Phone: '.$phone.' '.PHP_EOL.'
      Dog owner: '.$owner.' '.PHP_EOL.'
      Faveriote Breeds: '.my_breeds().' '.PHP_EOL.'
      Favorite Group: '.$groups.' '.PHP_EOL.'
      ';

    $headers = array(
      'From' => 'noreply@seattlecentral.edu',
      'Reply-to' => ''.$email.'');
    
    // mail function
    mail($to, $subject, $body, $headers);
    header('Location: thx.php');

  } // END email isset

} // end of server request

/* ----- END CONTACT FORM ----- */
?>
<?php include 'includes/header.php';?>


  <div id="wrapper">
    
    <main>
      <h1><?php echo $headline;?></h1>
      <p>yeah Id java pumpkin spice, acerbic cortado pumpkin spice aged aromatic. Single origin espresso mug cinnamon mazagran, single origin bar  robusta breve froth fair trade robust. Cup macchiato and black grounds percolator single origin. Robusta cultivar redeye bar , strong crema galão instant pumpkin spice foam.</p>
      <h2>Please fill out our form</h2>


      <!-- Start Form -->
      <form action="" method="post">
        <fieldset>
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" value="<?php
          if(isset($_POST['first_name'])) echo htmlspecialchars( $_POST['first_name']); ?>">
          <span class="error">
            <?php echo $first_name_Err; ?>
          </span>

          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" value="<?php 
          if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
          <span class="error">
            <?php echo $last_name_Err; ?>
          </span>
               
          <label for="email">Email</label>
          <input type="email" name="email" value="<?php 
          if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
          <span class="error">
            <?php echo $email_Err;?>
          </span>
          

          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php 
          if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
          <span class="error">
            <?php echo $phone_Err;?>
          </span>

          <label for="owner">Do you own a dog?</label>
          <ul class="list-style-none">
            <li><input type="radio" name="owner" value="yes"
            <?php if(isset($_POST['owner']) && $_POST['owner'] == 'yes') echo 'checked="checked"'; ?>>Yes</li>
            <li><input type="radio" name="owner" value="no"
            <?php if(isset($_POST['owner']) && $_POST['owner'] == 'no') echo 'checked="checked"'; ?>>No</li>
          </ul>
          <span class="error">
            <?php echo $owner_Err;?>
          </span>
        </fieldset>

        <fieldset>
          <label for="breeds">Favorite Breeds</label>
          <ul class="list-style-none">
            <li><input type="checkbox" name="breeds[]" value="labr"
            <?php if(isset($_POST['breeds']) && in_array('labr', $breeds)) echo 'checked="checked"'; ?>>Labrador Retriever</li>

            <li><input type="checkbox" name="breeds[]" value="fren"
            <?php if(isset($_POST['breeds']) && in_array('fren', $breeds)) echo 'checked="checked"'; ?>>French Bulldog</li>

            <li><input type="checkbox" name="breeds[]" value="germ"
            <?php if(isset($_POST['breeds']) && in_array('germ', $breeds)) echo 'checked="checked"'; ?>>German Shepherd</li>

            <li><input type="checkbox" name="breeds[]" value="gold"
            <?php if(isset($_POST['breeds']) && in_array('gold', $breeds)) echo 'checked="checked"';  ?>>Golden Retriever</li>

            <li><input type="checkbox" name="breeds[]" value="bull"
            <?php if(isset($_POST['breeds']) && in_array('bull', $breeds)) echo 'checked="checked"'; ?>>Bulldog</li>

            <li><input type="checkbox" name="breeds[]" value="pood"
            <?php if(isset($_POST['breeds']) && in_array('pood', $breeds)) echo 'checked="checked"'; ?>>Poodle</li>

            <li><input type="checkbox" name="breeds[]" value="corg"
            <?php if(isset($_POST['breeds']) && in_array('corg', $breeds)) echo 'checked="checked"';    ?>>Corgis</li>

            <li><input type="checkbox" name="breeds[]" value="shih"
            <?php if(isset($_POST['breeds']) && in_array('shih', $breeds)) echo 'checked="checked"'; ?>>Shih Tzu</li>

            <li><input type="checkbox" name="breeds[]" value="dane"
            <?php if(isset($_POST['breeds']) && in_array('dane', $breeds)) echo 'checked="checked"'; ?>>Great Dane</li>

            <li><input type="checkbox" name="breeds[]" value="myst"
            <?php if(isset($_POST['breeds']) && in_array('myst', $breeds)) echo 'checked="checked"'; ?>>Mystery</li>
          </ul>
          <span class="error">
            <?php echo $breeds_Err;?>
          </span>

          <label for="groups">Breed Group</label>
          <select name="groups">
            <option value="" NULL
            <?php if(isset($_POST['groups']) && $_POST['groups'] == NULL) echo 'selected="unselected"'; ?>>Select One</option>

            <option value="herd"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'herd') echo 'selected="unselected"'; ?>>Hearding Breeds</option>

            <option value="hound"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'hound') echo 'selected="unselected"'; ?>>Hound Breeds</option>

            <option value="nonsport"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'nonsport') echo 'selected="unselected"'; ?>>Non-Sporting Breeds</option>


            <option value="toy"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'toy') echo 'selected="unselected"'; ?>>Toy Breeds</option>

            <option value="sport"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'sport') echo 'selected="unselected"'; ?>>Sporting Breeds</option>

            <option value="terrier"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'terrier') echo 'selected="unselected"'; ?>>Terrier Breeds</option>

            <option value="work"
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'work') echo 'selected="unselected"'; ?>>Working Breeds</option>

            <option value="misc" 
            <?php if(isset($_POST['groups']) && $_POST['groups'] == 'misc') echo 'selected="unselected"'; ?>>Miscellaneous Breeds</option>

          </select>
          <span class="error">
            <?php echo $groups_Err; ?>
          </span>
        </fieldset>
        <fieldset>
          <label for="comments">Comments</label>
          <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
          <span class="error">
            <?php echo $comments_Err;?>
          </span>

          <label for="privacy">Privacy</label>
          <ul class="list-style-none">
            <li><input type="radio" name="privacy" value="agree"
            <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>>Agree</li>
          </ul>
          <span class="error">
            <?php echo $privacy_Err;?>
          </span>

          <input type="submit" value="Send It">
          <p><a href="">Reset</a></p>
        </fieldset>

        

        
    </form>
    </main>
    <!-- End Main -->
    <aside>
      <h3>Our Aside for our Form</h3>
      <p>asldfkasldf</p>
      <img class="aside-img" src="images/abby.jpg" alt="Belgian Malinois Mix">

    </aside>
    <!-- End Aside -->
    <!-- START FOOTER -->
    <?php include('includes/footer.php'); ?>