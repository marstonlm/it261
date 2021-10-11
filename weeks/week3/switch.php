<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  // class exercise
  // if today is Thursday, will be pumpkin latte day
  // if Friday,
  // start w/ isset() function
  // then will introduce first GLOBAL var
  // the switch

/*  $variable = 'Life is Good';
  if(isset($variable)) {
    echo 'Yippy-skippy!!! The variable is set';
  } else {
    echo 'Bummer. Still need to set variable';
  } */

  //Start switch logic
  // if s/t is set, $today, then all is well
  // else, today is TODAY

 

  //GLOBAL VARIABLES are capitalized and start with $_GET
  date_default_timezone_set('America/Los_Angeles');

  if(isset($_GET['today'])) {
    $today = $_GET['today'];
  } else {
    $today = date('l');
  }

  // switch
  switch($today) {
    case 'Thursday':
      $coffee = '<h2>Thursday is our Cappuccino Day!</h2>';
      $pic = 'cap.jpg';
      $alt = 'Cappuccino';
      $content = '<p>A cappuccino is a popular coffee drink that’s made by topping a shot of espresso with steamed milk and milk foam. <br>Typically, it contains equal parts of each and is made up of about 1/3 espresso, 1/3 steamed milk, and 1/3 foamed milk. <br> This gives the final product a creamy, rich, and smooth taste and texture.</p>';
      break;

    case 'Friday':
      $coffee = '<h2>Friday is our Americano Day!</h2>';
      $pic = 'americano.jpg';
      $alt = 'Americano';
      $content = '<i>Coffee content</i>';
      break;

    case 'Saturday':
      $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
      $pic = 'coffee.png';
      $alt = 'Coffee';
      $content = '<i>Coffee content</i>';
      break;

    case 'Sunday':
      $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
      $pic = 'green-tea.jpg';
      $alt = 'Green Tea';
      $content = 'A <b>green tea latte</b> is a variation on green tea that is made in a similar way to a regular latte (one made with coffee). Green tea is one of the most popular tea varieties in the world, and the powdered form of green tea – known as matcha – is often used to prepare this frothy drink.';
      break;

    case 'Monday':
      $coffee = '<h2>Monday is our  Pumpkin Latte Day!</h2>';
      $pic = 'pumpkin.jpg';
      $alt = 'Pumkin Latte';
      $content = '<i>Coffee content</i>';
      break;

     case 'Tuesday':
      $coffee = '<h2>Tuesday is our  Latte Day!</h2>';
      $pic = 'latte.jpg';
      $alt = 'Latte';
      $content = 'The term “café latte” literally translates to “coffee milk.” <br> Although there is no standard recipe for making a latte, it generally involves adding steamed milk to a single shot of espresso. <br><br> In some cases, it’s also topped with a light layer of foam, and sugars or sweeteners may be mixed in as well.';
      break;

    case 'Wednesday':
      $coffee = '<h2>Wednesday is our  Day!</h2>';
      $pic = '';
      $alt = 'Missing picture';
      $content = '<i>Coffee content</i>';
      break;

  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
      #wrapper {
        width: 940px;
        margin: 20px auto;
      }
    </style>
  </head>

  <body>
    <div id="wrapper">
      <h1>My Wonderful Switch Classwork Exercise</h1>
      <?php
        echo $coffee;
      ?>
      <img src="images/<?php echo $pic; ?>"  alt="<?php echo $alt;?>">
      <p><?php echo $content;?></p>

      <h2>Check out our Daily Specials</h2>
      <ul>
        <li><a href="switch.php?today=Monday">Monday</a> </li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a> </li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a> </li>
        <li><a href="switch.php?today=Thursday">Thursday</a> </li>
        <li><a href="switch.php?today=Friday">Friday</a> </li>
        <li><a href="switch.php?today=Saturday">Saturday</a> </li>
        <li><a href="switch.php?today=Sunday">Sunday</a> </li>
      </ul>
    </div> <!-- END WRAPPER -->
  </body>
</html>