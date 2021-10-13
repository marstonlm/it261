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
      $content = '<p>A <b><i>cappuccino</i></b> is a popular coffee drink that’s made by topping a shot of espresso with steamed milk and milk foam. <br>Typically, it contains equal parts of each and is made up of about 1/3 espresso, 1/3 steamed milk, and 1/3 foamed milk. <br> This gives the final product a creamy, rich, and smooth taste and texture.</p>';
      break;

    case 'Friday':
      $coffee = '<h2>Friday is our Americano Day!</h2>';
      $pic = 'americano.jpg';
      $alt = 'Americano';
      $content = 'An <b><i>Americano</i></b> made by layering expresso and hot water. We make our a traditional way with the espress over the water.';
      break;

    case 'Saturday':
      $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
      $pic = 'coffee.png';
      $alt = 'Coffee';
      $content = 'A <b><i>Regular Joe</i></b> may also be refered to as drip coffee. It is brewed in an automatic coffee maker which hasa filter. This coffee has less oils then an expresso or if made using a French press.';
      break;

    case 'Sunday':
      $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
      $pic = 'green-tea.jpg';
      $alt = 'Green Tea';
      $content = 'A <b><i>green tea latte</i></b> is a variation on green tea that is made in a similar way to a regular latte (one made with coffee). Green tea is one of the most popular tea varieties in the world, and the powdered form of green tea – known as matcha – is often used to prepare this frothy drink.';
      break;

    case 'Monday':
      $coffee = '<h2>Monday is our  Pumpkin Latte Day!</h2>';
      $pic = 'pumpkin.jpg';
      $alt = 'Pumkin Latte';
      $content = 'The <b><i>Pumpkin Spice Latte</i></b> is a coffee drink made with a mix of traditional autumn spice flavors of cinnamon, nutmeg, and clove, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';
      break;

     case 'Tuesday':
      $coffee = '<h2>Tuesday is our  Latte Day!</h2>';
      $pic = 'latte.jpg';
      $alt = 'Latte';
      $content = 'The term “café latte” literally translates to “coffee milk.” <br> Although there is no standard recipe for making a latte, it generally involves adding steamed milk to a single shot of espresso. <br><br> In some cases, it’s also topped with a light layer of foam, and sugars or sweeteners may be mixed in as well.';
      break;

    case 'Wednesday':
      $coffee = '<h2>Wednesday is our Caramel Macchiato Latte Day!</h2>';
      $pic = 'macchiato.jpg';
      $alt = 'Caramel Macchiato Latte';
      $content = 'A <b><i>macchiato</i></b> is an espresso-based beverage. Traditionally, a macchiato is a shot (or two) of espresso topped with a small amount of usually foamed milk, says <a href="https://theroasterie.com/blogs/news/macchiato-vs-latte-similarities-differences-in-your-favorite-coffee-drinks">The Roasterie</a>. In Italian, macchiato means "stained" or "spotted."<br>A caramel macchiato latte combines steamed milk, vanilla syrup and two shots of expresso poured over the top and carmel sauce drizzled on top.</p>';
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
      .pic {
        max-width: 400px;
      }
    </style>
  </head>

  <body>
    <div id="wrapper">
      <h1>My Wonderful Switch Classwork Exercise</h1>
      <?php
        echo $coffee;
      ?>
      <img class="pic" src="images/<?php echo $pic; ?>"  alt="<?php echo $alt;?>">
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