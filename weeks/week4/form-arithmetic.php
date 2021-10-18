
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Arithmetic Form</title>
    <style>
      form {
        width: 400px;
        margin: auto;        
      }

      fieldset {
        border: 1px solid red;
        padding: 10px;
      }

      label, textarea {
        display: block;
        margin-bottom: 5px;
      }
      

      input {
        margin-bottom: 10px;
      }

      input[type=text], input[type=email], textarea {
        width: 90%;
      }

      h3 {
        color: red;
        text-align: center;
      }

      .box {
        width: 400px;
        margin: 20px auto;
        padding: 15px;
        background: green;
      }

    </style>

  </head>

  <body>
    <form action="" method="post">
      <fieldset>
        <label for="fname">FIRST NAME</label>
        <input type="text" name="fname">

        <label for="coffees">How many coffees?</label>
        <input type="number" name="coffees">

        <labelv for="lattes">Lattes</label>
        <input type="number" name="lattes">
        
        <labelv for="caps">Cappuccino</label>
        <input type="number" name="caps">

        <input type="submit" value="SEND IT!!!">
      </fieldset>
    </form>
     
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
      define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
      // form-arithmetic
      if(isset($_POST['fname'], $_POST['coffees'], $_POST['lattes'], $_POST['caps'])) {
        $fname = $_POST['fname'];
        $coffees = $_POST['coffees'];
        $int_coffees = intval($coffees);
        $lattes = $_POST['lattes'];
        $int_lattes = intval($lattes);
        $caps = $_POST['caps']; 
        $int_caps = intval($caps);

        $total = $int_coffees + $int_lattes + $int_caps; 

        // nexted if/else statement
        if(empty($fname && $int_coffees && $int_lattes && $int_caps)) {
          echo '<h3>Please fill out the fields</h3>';
        } else {
            echo '
            <div class="box">
              <h2>Hello '.$fname.';</h2>
              <p>You have order the following:</p>
              <ul>
                <li>'.$int_coffees.' Coffese</li>
                <li>'.$int_lattes.' Lattes</li>
                <li>'.$int_caps.' Cappucinos</li>
              </ul>
              <p>Totalling '.$total.' beverages</p>
            </div>
            ';
            
            

          } // end nexted if/else statement

      } // end isset
    ?>
  </body>

</html>