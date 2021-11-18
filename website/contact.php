<?php include 'includes/header.php';?>

  <div id="wrapper">
    
    <main>
      <h1><?php echo $headline;?></h1>
      <p>Id java pumpkin spice, acerbic cortado pumpkin spice aged aromatic. Single origin espresso mug cinnamon mazagran, single origin bar  robusta breve froth fair trade robust. Cup macchiato and black grounds percolator single origin. Robusta cultivar redeye bar , strong crema galão instant pumpkin spice foam.</p>
      <h2>Please fill out our form</h2>


      <!-- Start Form -->
      <form action="" method="post">
        <fieldset>
          <label for="first_name">First Name</label>
          <input type="text" name="first_name"">
          <span class="error">
            <?php echo $first_name_Err; ?>
          </span>

          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" value="">
          <span class="error">
            <?php echo $last_name_Err; ?>
          </span>
               
          <label for="email">Email</label>
          <input type="email" name="email" value="">

          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="">

          <label for="owner">Do you own a dog?</label>
          <ul class="list-style-none">
            <li><input type="radio" name="owner" value="yes">Yes</li>
            <li><input type="radio" name="owner" value="no">No</li>
          </ul>
        </fieldset>
        <fieldset>
          <label for="breeds">Favorite Breed</label>
          <ul class="list-style-none">
            <li><input type="checkbox" name="breeds[]" value="labr">Labrador Retriever</li>
            <li><input type="checkbox" name="breeds[]" value="fren">French Bulldog</li>
            <li><input type="checkbox" name="breeds[]" value="germ">German Shepherd</li>
            <li><input type="checkbox" name="breeds[]" value="gold">Golden Retriever</li>
            <li><input type="checkbox" name="breeds[]" value="bull">Bulldog</li>
            <li><input type="checkbox" name="breeds[]" value="pood">Poodle</li>
            <li><input type="checkbox" name="breeds[]" value="corg">Corgis</li>
            <li><input type="checkbox" name="breeds[]" value="shih">Shih Tzu</li>
            <li><input type="checkbox" name="breeds[]" value="dane">Great Dane</li>
          </ul>

          <label for="regions">Regions</label>
          <select name="regions">
          </select>
        </fieldset>

          <input type="submit" value="Send It">
          <p><a href="">Reset</a></p>

        
    </form>
    </main>
    <!-- End Main -->
    <aside>
      <h3>Our Aside for our Form</h3>

    </aside>
    <!-- End Aside -->
    <!-- START FOOTER -->
    <?php include('includes/footer.php'); ?>