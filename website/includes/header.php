<?php  include 'config.php';?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="css/styles.css" type="text/css" rel="stylesheet">
  <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body;?>" style="background: <?php echo $body_color;?>;">
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