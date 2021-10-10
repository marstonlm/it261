<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $show = array(
    'Name' => 'Handmaid\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood',
    'Year' => '1987'
  );

  // Another way to do an array
  $show['Name'] = 'Handmaid\'s Tale';
  $show['Actor'] = 'Elizabeth Moss';
  $show['Genre']='Drama';
  $show['Author'] = 'Margaret Atwood';
  $show['Year'] = 1987;

  echo '<br>';

  $nav['index.php'] = 'Home';
  $nav['about.php'] = 'About';
  $nav['switch.php'] = 'Switch';
  $nav['emailable.php'] = 'Emailable Form';
  $nav['database.php'] = 'Database';
  $nav['contact.php'] = 'Contact';
  $nav['gallery.php'] = 'Gallery';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>For Each Loop</title>
    <style>
      nav li {
        list-style-type: none;
      }
      nav a {
        color: red;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2em;
        font-family: Verdana, arial, sans-serif;
      }
      
      #wrapper {
        width: 508px;
        margin: 20px auto;
      }
    </style>
  </head>

  <body>
    <div id="wrapper">
    <h1>The foreach Loops</h1>
    <h2>Handmaid's Tale</h2>
    <ul>
      <?php 
        foreach($show as $key => $value) {
          echo '<li><b>'.$key.'</b>: '.$value.'</li>';
        }
      ?>
    </ul>
    <h2>Our Navigation</h2>
    <nav>
      <ul>
        <?php
          foreach($nav as $key =>$value) {
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
          }
        ?>
      </ul>
    </nav>
    </div>
    <!-- END WRAPPER -->


  </body>
</html>