<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  $nav['../index.php'] = 'Portal';
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
      $title = 'Daily';
      $body = 'daily inner';
      $headline = 'Featured Shepard of the Day';
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
  date_default_timezone_set('America/Los_Angeles');
  if(isset($_GET['today'])) {
    $today = $_GET['today'];
  } else {
    $today = date('l');
  }


  switch($today) {
    case 'Sunday':
      $dog = 'Sunday: Old English Sheepdog';
      $pic = 'english.jpg';
      $alt = 'Old English Sheepdog';
      $content = 'The <b>Old English Sheepdog</b> is the archetypical shaggy dog, famous for his profuse coat and peak-a-boo hairdo, a distinctive bear-like gait, and a mellow, agreeable nature. The OES is a big, agile dog who enjoys exploring and a good romp.<br> Beneath the Old English Sheepdog\'s profuse double coat is a muscular and compact drover, with plenty of bone and a big rump, standing 21 or 22 inches at the shoulder. Their eyes (when you can see them) are dark brown, or blue, or one of each. The OES breed standard says the skull is \'capacious and rather squarely formed, giving plenty of room for brain power.\' OES move with a bear-like shuffle but are famous for their nimbleness afoot. Regular exercise is required for these strong, able-bodied workers. Equally famed are their many fine housedog qualities: watchfulness, courage, kindliness, and intelligence. Great with children, OES make patient, protective playmates. They are sensible watchdogs known for a loud, ringing bark.';
      break;

    case 'Monday':
      $dog = 'Monday: Beauceron';
      $pic = 'beauceron.jpg';
      $alt = 'Beauceron';
      $content = 'The Beauceron is imposing and powerful, but also remarkably smart, spirited, and a versatile herder\'imagine a Border Collie\'s brain in a 100-pound body. They are especially beloved by women as a dashing but sensitive companion and protector.<br><br>
      Beaucerons are muscular, rugged, and large, standing as high as 27.5 inches at the shoulder, and yet graceful and in all ways balanced. Their dark black coats feature handsome squirrel-red accents, including the red feet that give the breed its French nickname Bas-Rouge (\'red stockings\'). They\'re also seen in a black-gray-tan coat. The long head is well chiseled, and the dark brown eyes project an expression breed fanciers describe as frank and confident. They\'re not for novice owners, who might end up being owned by their dominant dog instead of the other way around. That said, well-trained and socialized Beaucerons are levelheaded watchdogs and guardians, especially good with the young, the small, and the defenseless.';
      break;

     case 'Tuesday':
      $dog = 'Tuesday: Icelandic Sheepdog';
      $pic = 'iceland.jpg';
      $alt = 'Icelandic Sheepdog';
      $content = 'The Icelandic Sheepdog, Iceland\'s only native dog breed, is a charmingly friendly and faithful all-around herder of small-to-medium size. A densely coated Nordic spitz-type breed, Icelandics are enthusiastically devoted to their humans.<br><br>
      Icelandics are one of the 50 or so northern breeds from around the world classified as spitzes. The breed\'s \'spitziness\' is expressed by a dense coat, foxy face, pointed ears, and a bushy, curling tail. Icelandics, standing no higher than 18 inches at the shoulder, are just under what we\'d consider medium sized. They come in several predominant colors, always accompanied by white markings. An endearing trait is the facial expression: friendly, happy, always looking as though there\'s no place they\'d rather be than with you.';
      break;

    case 'Wednesday':
      $dog = 'Wednesday: Miniature American Shepherd';
      $pic = 'american.jpg';
      $alt = 'Miniature American Shepherd';
      $content = 'The Miniature American Shepherd resembles a small Australian Shepherd. True herders in spite of their compact size, Minis are bright, self-motivated workers and endearingly loyal and lively companion dogs who have an affinity for horses.<br><br>
      The Miniature American Shepherd shares many physical traits with its forebear the Australian Shepherd\'only on a smaller scale. Females stand between 13 and 17 inches at the shoulder; males range from 14 to 18 inches. Despite their size, Minis are every inch a true herding dog: energetic, versatile, rugged, and extremely bright. The eye-catching coat comes in black, blue merle, red, and red merle. (The merle will exhibit in any amount marbling, flecks, or blotches.) Minis move with the smooth and agile step of a dog built for hard work on punishing terrain.';
      break;

    case 'Thursday':
      $dog = 'Thursday: Australian Shepherd';
      $pic = 'aussie.jpg';
      $alt = 'Australian Shepherd';
      $content = 'The Australian Shepherd, a lean, tough ranch dog, is one of those \'only in America\' stories: a European breed perfected in California by way of Australia. Fixtures on the rodeo circuit, they are closely associated with the cowboy life.<br><br>
      The Australian Shepherd, the cowboy\'s herding dog of choice, is a medium-sized worker with a keen, penetrating gaze in the eye. Aussie coats offer different looks, including merle (a mottled pattern with contrasting shades of blue or red). In all ways, they\'re the picture of rugged and agile movers of stock. Aussies exhibit an irresistible impulse to herd, anything: birds, dogs, kids. This strong work drive can make Aussies too much dog for a sedentary pet owner. Aussies are remarkably intelligent, quite capable of hoodwinking an unsuspecting novice owner. In short, this isn\'t the pet for everyone. But if you\'re looking for a brainy, tireless, and trainable partner for work or sport, your search might end here.';
      break;

    case 'Friday':
      $dog = 'Friday: Bouvier des Flandres';
      $pic = 'bouvier.jpg';
      $alt = 'Bouvier des Flandres';
      $content = 'They don\'t build \'em like this anymore. Burly and barrel-chested, the tousle-coated dog of Flandres is from a time and place where a dog had to work like \' well, a dog. These smart and steady all-purpose workers make excellent watchdogs.<br><br>
      Standing as high as 27.5 inches, with heavy bone and powerful muscles beneath a weatherproof coat, and an impressive head accented by beard and mustache, Bouviers can do anything that needs doing in a barnyard or pasture except milk the cows. And yet, Bouviers are more than just farm equipment. Their sterling character, huge heart, and keen intelligence endear them to dog lovers the world over. The Bouvier work ethic must be accommodated, and happily the breed\'s versatility allows them to do myriad tasks. Bouviers are excellent watchdogs and guardians, and eager participants in dog sports, especially herding trials. These strong-willed dogs do best with owners who can devote ample time and space to a top-of-the-line working dog.';
      break;

    case 'Saturday':
      $dog = 'Belgian Maliniois';
      $pic = 'malinois.jpg';
      $alt = 'Belgian Maliniois';
      $content = 'The smart, confident, and versatile Belgian Malinois is a world-class worker who forges an unbreakable bond with his human partner. To deny a Mal activity and the pleasure of your company is to deprive him of his very reasons for being.<br><br>
      Belgian Malinois are squarely built, proud, and alert herders standing 22 to 26 inches. Strong and well-muscled, but more elegant than bulky, there\'s an honest, no-frills look about them, as befit dogs built to work hard for their feed. A breed hallmark is the proud carriage of the head. Coat colors range from a rich fawn to mahogany. The black ears and mask accentuate bright, questioning eyes the color of dark Belgian chocolate. If you have ever seen a Mal perform an obedience routine, you know firsthand what a smart and eager breed this is. Problems set in, though, when this people-oriented dog is underemployed and neglected. Exercise, and plenty of it, preferably side by side with their adored owner, is key to Mal happiness.';
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
        <img id="logo" src="images/phplogo.jpg" alt="php">
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