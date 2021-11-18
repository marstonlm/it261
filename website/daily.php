<?php
  include('config.php');
  include('includes/header.php');
?>
  <div id="wrapper">
    <h1 style="text-align:center;"><?php echo $headline;?></h1>
    <main>
      <h2><?php echo $dog;?></h2>
      <img class="dog" src="images/<?php echo $pic;?>"  alt="<?php echo $alt;?>">
      <p class="textwrap-right"><?php echo $content;?></p>
    </main>
    <!-- End Main -->
    <aside style="background: <?php echo $aside_color;?>;">
    <h2 style="text-align:center;">Check out our Daily Featured Shepard</h2>
      <ul>
        <li><a href="daily.php?today=Monday">Monday</a> </li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a> </li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a> </li>
        <li><a href="daily.php?today=Thursday">Thursday</a> </li>
        <li><a href="daily.php?today=Friday">Friday</a> </li>
        <li><a href="daily.php?today=Saturday">Saturday</a> </li>
        <li><a href="daily.php?today=Sunday">Sunday</a> </li>
      </ul>

    </aside>
    <!-- End Aside -->
    <!-- START FOOTER -->
    <?php include('includes/footer.php'); ?>