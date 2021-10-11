<?php 
  include('includes/header.php');

?>
  <div id="wrapper">
    <main>
      <h1><?php echo $headline;?></h1>
      <h2><?php echo $dog;?></h2>
      <img class="dog" src="images/<?php echo $pic; ?>"  alt="<?php echo $alt;?>">
      <p><?php echo $content;?></p>
    </main>
    <!-- End Main -->
    <aside>
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

    </aside>
    <!-- End Aside -->
    <!-- START FOOTER -->
    <?php include('includes/footer.php'); ?>