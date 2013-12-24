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
      <div class="slider tarot">
        <ul id="slider-list">
          <li><img src="_MG_0675.jpg" /></li>
          <li><img src="_MG_0677.jpg" /></li>
          <li><img src="_MG_0679.jpg" /></li>
          <li><img src="_MG_0685.jpg" /></li>
          <li><img src="_MG_0688.jpg" /></li>
          <li><img src="_MG_0689.jpg" /></li>
          <li><img src="_MG_0690.jpg" /></li>
          <li><img src="_MG_0691.jpg" /></li>
          <li><img src="_MG_0696.jpg" /></li>
          <li><img src="_MG_0698.jpg" /></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container footer-nav">
    <div class="row">
      <div class="span4 offset3">
        <a href="../fool_and_the_world/">Fool and the World</a>
      </div>
      <div class="span5 title">
        <a href="../tarot/">Tarot Deck</a>
      </div>
    </div>
  </div>
</div>
   
<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>