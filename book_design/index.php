<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="Fool and the World";
  $style="../css/photography.css";
  $responsive_style="../css/responsive.css";
  include('../inc/header.php');
  // This should be on every page - it's the generic navbar
  include('../inc/navbar.php');
?>

<div class="wrap">
  <div class="container photos">
    <div class="row">
      <div class="slider book">
        <ul id="slider-list">
          <li id="tunnel"><img src="TUNNEL01.jpg" /></li>
          <li><img src="TUNNEL02.jpg" /></li>
          <li><img src="TUNNEL03.jpg" /></li>
          <li><img src="TUNNEL04.jpg" /></li>
          <li><img src="TUNNEL05.jpg" /></li>
          <li><img src="TUNNEL06.jpg" /></li>
          <li><img src="TUNNEL07.jpg" /></li>
          <li><img src="TUNNEL08.jpg" /></li>
          <li><img src="TUNNEL09.jpg" /></li>
          <li id="mccarthy"><img src="McCarthy01.jpg" /></li>
          <li><img src="McCarthy02.jpg" /></li>
          <li><img src="McCarthy03.jpg" /></li>
          <li><img src="McCarthy04.jpg" /></li>
          <li><img src="McCarthy05.jpg" /></li>
          <li id="dresden"><img src="Dresden01.jpg" /></li>
          <li><img src="Dresden02.jpg" /></li>
          <li><img src="Dresden03.jpg" /></li>
          <li><img src="Dresden04.jpg" /></li>
          <li id="trapper"><img src="Trapper%20Creek01.jpg" /></li>
          <li><img src="Trapper%20Creek02.jpg" /></li>
          <li><img src="Trapper%20Creek03.jpg" /></li>
          <li><img src="Trapper%20Creek04.jpg" /></li>
          <li><img src="Trapper%20Creek05.jpg" /></li>
          <li><img src="Trapper%20Creek06.jpg" /></li>
          <li><img src="Trapper%20Creek07.jpg" /></li>
          <li id="whittier"><img src="Whittier1.jpg" /></li>
          <li><img src="Whittier2.jpg" /></li>
          <li><img src="Whittier3.jpg" /></li>
          <li><img src="Whittier4.jpg" /></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container footer-nav">
    <div class="row">
      <div class="span2 offset6">
        <a href="../contact/">Contact</a>
      </div>
      <div class="span4 title">
        <a href="../book_design/">Book Design</a>
      </div>
    </div>
  </div>
</div>
   
<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>