
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Form 3 with HTML and CSS</title>
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

        <label for="lname">LAST NAME</label>
        <input type="text" name="lname">

        <label for="email">EMAIL</label>
        <input type="email" name="email">
        <label for="comments">COMMENTS</label>
          <textarea name="comments"></textarea>
        <input type="submit" value="SEND IT!!!">
      </fieldset>
    </form>
     
    <?php
// form 3 -- adding the HTML and CSS!
      if(isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['comments'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comments = $_POST['comments']; 

        // nexted if/else statement
        if(empty($fname && $lname && $email && $comments)) {
          echo '<h3>Please fill out the fields</h3>';
        } else {
            // echo $fname;
            // echo $lname;
            // echo $email;
            // echo $comments;

            echo '
            <div class="box">
              <ul>
                <li><b>First Name: '.$fname.'</b></li>
                <li><b>Last Name: '.$lname.'</b></li>
                <li><b>Email: '.$email.'</b></li>
                <li><b>Comments: '.$comments.'</b></li>
              </ul>
            </div>
            ';
            
            

          } // end nexted if/else statement

      } // end isset
    ?>
  </body>

  <footer>

  </footer>
</html>