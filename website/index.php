<?php include 'includes/header.php';?>

  <div id="wrapper">
    <div id="hero" class="text-center">
      <?php echo random_pics($photos); ?>
      <h2>
        <pre>
          <br>
          <?php
          
          
          function random_pics($photos) {
          
          $photos[0] = 'photo1';
          $photos[1] = 'photo2';
          $photos[2] = 'photo3';
          $photos[3] = 'photo4';
          $photos[4] = 'photo5';
          
          $i = rand(0, 4); // function is being passed to i 
          $selected_image = ''.$photos[$i].'.jpg'; 
          echo '<img src="images/'.$selected_image.'"  class="rand-pic">';
          }
          ?>

        </pre>
      </h2>
      
    </div>
    <!-- End Hero-->

    <main>
      <h1><?php echo $headline;?></h1>
      <p>Id java pumpkin spice, acerbic cortado pumpkin spice aged aromatic. Single origin espresso mug cinnamon mazagran, single origin bar  robusta breve froth fair trade robust. Cup macchiato and black grounds percolator single origin. Robusta cultivar redeye bar , strong crema galão instant pumpkin spice foam.</p>
    </main>
    <!-- End Main -->
    <aside>
      <ul>
        <li>Ko te moemoea a Maui kia haere ngatahi ai ratou ko ona tuakana ki te hii ika. </li>
        <li>I te hokinga mai o ona tuakana ki tatahi, ka kii atu a Maui, “ka taea e au te haramai i to koutou na taha ki te hii ika?” Engari, ko te whakautu o ona tuakana ki a ia ano, “Kao, he rangatahi noa iho koe. Kaore he wahi mau kei te waka nei, na reira me noho tau ki tatahi ke”.</li>
      </ul>

    </aside>
    <!-- End Aside -->
    <!-- START FOOTER -->
    <?php include('includes/footer.php'); ?>