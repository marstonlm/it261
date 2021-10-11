<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  $nav['index.php'] = 'Home';
  $nav['about.php'] = 'About';
  $nav['daily.php'] = 'Daily';
  $nav['project.php'] = 'Project';
  $nav['contact.php'] = 'Contact';
  $nav['gallery.php'] = 'Gallery';

  switch(THIS_PAGE) {
    case 'index.php':
      $title = 'Home page of IT261 Website';
      $body = 'home';
      $headline = 'Welcome to my Home page of IT 261 Website';
      break;

    case 'about.php':
      $title = 'About page of IT261 Website';
      $body = 'about inner';
      $headline = 'Welcome to my About page of IT 261 Website';
      break;

    case 'daily.php':
      $title = 'Switch';
      $body = 'daily inner';
      $headline = 'Shepard of the Day'; //homework 3 swithc display
      break;
    case 'project.php':
      $title = 'Project page of IT261 Website';
      $body = 'project inner';
      $headline = 'Welcome to my Project page of IT 261 Website';
      break;
          
    case 'contact.php':
      $title = 'Contact page of IT261 Website';
      $body = 'contact inner';
      $headline = 'Welcome to my Contact page of IT 261 Website';
      break;      

    case 'gallery.php':
      $title = 'Gallery page of IT261 Website';
      $body = 'gallery inner';
      $headline = 'Welcome to my Gallery page of IT 261 Website';
      break;

    default:
  }

// START of daily switch theme: DOGS 
  if(isset($_GET['today'])) {
    $today = $_GET['today'];
  } else {
    $today = date('l');
  }


  switch($today) {
    case 'Sunday':
      $dog = '<h2>Sunday: Old English Sheepdog</h2>';
      $pic = 'english.jpg';
      $alt = 'Old English Sheepdog';
      $content = 'The <b>Old English Sheepdog</b> is the archetypical shaggy dog, famous for his profuse coat and peak-a-boo hairdo, a distinctive bear-like gait, and a mellow, agreeable nature. The OES is a big, agile dog who enjoys exploring and a good romp.<br> Beneath the Old English Sheepdog\'s profuse double coat is a muscular and compact drover, with plenty of bone and a big rump, standing 21 or 22 inches at the shoulder. Their eyes (when you can see them) are dark brown, or blue, or one of each. The OES breed standard says the skull is \'capacious and rather squarely formed, giving plenty of room for brain power.\' OES move with a bear-like shuffle but are famous for their nimbleness afoot. Regular exercise is required for these strong, able-bodied workers. Equally famed are their many fine housedog qualities: watchfulness, courage, kindliness, and intelligence. Great with children, OES make patient, protective playmates. They are sensible watchdogs known for a loud, ringing bark.';
      break;

    case 'Monday':
      $dog = '<h2>Monday: Beauceron </h2>';
      $pic = 'beauceron.jpg';
      $alt = 'Beauceron';
      $content = 'The Beauceron is imposing and powerful, but also remarkably smart, spirited, and a versatile herder\'imagine a Border Collie\'s brain in a 100-pound body. They are especially beloved by women as a dashing but sensitive companion and protector. <br>
      Beaucerons are muscular, rugged, and large, standing as high as 27.5 inches at the shoulder, and yet graceful and in all ways balanced. Their dark black coats feature handsome squirrel-red accents, including the red feet that give the breed its French nickname Bas-Rouge (\'red stockings\'). They\'re also seen in a black-gray-tan coat. The long head is well chiseled, and the dark brown eyes project an expression breed fanciers describe as frank and confident. They\'re not for novice owners, who might end up being owned by their dominant dog instead of the other way around. That said, well-trained and socialized Beaucerons are levelheaded watchdogs and guardians, especially good with the young, the small, and the defenseless.';
      break;

     case 'Tuesday':
      $dog = '<h2>Icelandic Sheepdog</h2>';
      $pic = '';
      $alt = 'Icelandic Sheepdog';
      $content = '';
      break;

    case 'Wednesday':
      $cdog = '<h2>Miniature American Shepherd</h2>';
      $pic = '';
      $alt = 'Miniature American Shepherd';
      $content = '';
      break;

    case 'Thursday':
      $dog = '<h2>Australian Shepherd</h2>';
      $pic = '';
      $alt = 'Australian Shepherd Dog';
      $content = '';
      break;

    case 'Friday':
      $dog = '<h2>Bouvier des Flandres</h2>';
      $pic = '';
      $alt = 'Bouvier des Flandres Dog';
      $content = '';
      break;

    case 'Saturday':
      $dog = '<h2>Belgian Shepherd</h2>';
      $pic = '';
      $alt = 'Belgian Shepherd Dog';
      $content = '';
      break;

    default:
      break;
  }


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="css/styles.css" type="text/css" rel="stylesheet">
  <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body;?>">
  <header>
    <div class="header-inner">
      <a href="index.html">
        <img id="logo" src="images/phplogo.jpg">
      </a>
      <nav>
        <ul>
          <?php 
            foreach($nav as $key => $value) {
              if(THIS_PAGE == $key) {
                echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
              } else {
                echo '<li><a href="'.$key.'">'.$value.'</a></li>';
              }
            }
          ?>
        </ul>
      </nav> 
    </div>    <!-- end header inner -->
  </header>