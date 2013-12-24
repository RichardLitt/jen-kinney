<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="Hitching";
  $style="../css/photography.css";
  $responsive_style="../css/responsive.css";
  include('../inc/header.php');
  // This should be on every page - it's the generic navbar
  include('../inc/navbar.php');
?>

<div class="wrap">
  <div class="container photos">
    <div class="row">
      <div class="slider hitching">
        <ul id="slider-list">
          <li><img src="35%20AK%20McCarthy%20old%20rail%20bridge%20print%20copy.jpg" /></li>
          <li><img src="Band%20at%20Hope%20Solstice%20800%20x%201200%20copy.jpg" /></li>
          <li><img src="Bandanna%20Hammock%2011%20x%2017.jpg" /></li>
          <li><img src="Crowd%2012%20x%208%20copy.jpg" /></li>
          <li><img src="Decorated%20Table%2014%20x%209%20copy.jpg" /></li>
          <li><img src="Fire%20Spinner%2011%20x%2017%20copy.jpg" /></li>
          <li><img src="Grace%201350%20x%20900%20copy.jpg" /></li>
          <li><img src="Hammock%20Tent%20Horsetail%201200%20x%20800%20copy.jpg" /></li>
          <li><img src="Hitching%20Baby%202773%20x%201800%20copy.jpg" /></li>
          <li><img src="Kennicott%20Car%202710%20x%201800%20copy.jpg" /></li>
          <li><img src="Kennicott%20Houses%202679%20x%201800%20copy.jpg" /></li>
          <li><img src="Kennicott%20Mine%202100%20x%201395%20copy.jpg" /></li>
          <li><img src="Kennicott%20Window%201403%20x%20900%20copy.jpg" /></li>
          <li><img src="McCarthy%20Fire%20Pit%201776%20x%201200%20copy.jpg" /></li>
          <li><img src="McCarthy%20Map%201838%20x%201200%20copy.jpg" /></li>
          <li><img src="McCarthy%20Open%20Car%202729%20x%201800%20copy.jpg" /></li>
          <li><img src="McCarthy%20Papa%20Roach%2014%20x%209%20copy.jpg" /></li>
          <li><img src="Mushrooms%2011%20x%2017%20copy.jpg" /></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container footer-nav">
    <div class="row">
      <div class="span3 offset3">
        <a href="../book_design/#mccarthy">Zines</a>
        <!-- <a href="">About</a> -->
      </div>
      <div class="span6 title">
        <a href="../hitching/">Hitching Signs</a>
      </div>
    </div>
  </div>
</div>
   
<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>