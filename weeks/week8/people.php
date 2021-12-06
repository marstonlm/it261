<?php
// week 8 people file
// the little database work
  //people.php
  // people-view.php 
  // config files
  // credentials
  // MUST BE UPLOADED onto server. Won't work on localhost
  include('config.php');

  // for big database assignment, header include will go here
  // grab the table and assign it to a variable
  //$sql = 'SELECT * FROM people';
  $sql = 'SELECT * FROM people';

  // need to connect to the database using mysqli_connect() function
  // on the people.php page
// AND... if we cannot connect to the database... we DIE
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error())); // AND... if we cannot connect to the database... we DIE

  // create variable $result

  $result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn))); //If we cannot extract data....

  // if statement -- if more than 0 rows
  if(mysqli_num_rows($result) > 0 ) {
    // while loop -- and while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
      echo '<p>For more information about '.$row['first_name'].', please click <a href="people-view.php? id='.$row['people_id'].'">here!</a></p>';
      echo '<ul>';
      echo '<li>'.$row['first_name'].'</li>';
      echo '<li>'.$row['last_name'].'</li>';
      echo '<li>'.$row['email'].'</li>';
      echo '</ul>';
    } // close while loop
  } //close if statement
  else {
    echo 'Houston, we have a problem!!';
  }

  mysqli_free_result($result);
  mysqli_close($iConn);

?>