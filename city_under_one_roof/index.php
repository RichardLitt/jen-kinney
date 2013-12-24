<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="City Under One Roof";
  $style="../css/photography.css";
  $responsive_style="../css/responsive.css";
  include('../inc/header.php');
  // This should be on every page - it's the generic navbar
  include('../inc/navbar.php');
?>

<div class="wrap">
  <div class="container photos cuof">
    <div class="row">
      <div class="slider">
        <ul id="slider-list">
          <li><img src="01_Kinney.jpg" /></li>
          <li><img src="03_Kinney.jpg" /></li>
          <li><img src="05_Kinney.jpg" /></li>
          <li><img src="07_Kinney.jpg" /></li>
          <li><img src="08_Kinney.jpg" /></li>
          <li><img src="10a_Kinney.jpg" /></li>
          <li><img src="10_Kinney.jpg" /></li>
          <li><img src="11_Kinney.jpg" /></li>
          <li><img src="14_Kinney.jpg" /></li>
          <li><img src="21_Kinney.jpg" /></li>
          <li><img src="27_Kinney.jpg" /></li> 
          <li><img src="28_Kinney.jpg" /></li>
          <li><img src="30_Kinney.jpg" /></li>
          <li><img src="39_Kinney.jpg" /></li>
          <li><img src="45_Kinney.jpg" /></li>
          <li><img src="46_Kinney.jpg" /></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container footer-nav">
    <div class="row">
      <div class="span4 offset2">
        <a href="../book_design/#tunnel">Book</a>
        <a href="http://jkjenkinney.tumblr.com">Blog</a>
        <a href="about/">About</a>
      </div>
      <div class="span6 title">
        <a href="">City Under One Roof</a>
      </div>
    </div>
  </div>
</div>
   
<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>