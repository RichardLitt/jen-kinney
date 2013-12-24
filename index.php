<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="Jen Kinney";
  $style="/css/bootstrap.css";
  $responsive_style="/css/responsive.css";
  include('inc/header.php');
  // This should be on every page - it's the generic navbar
  include('inc/navbar.php');
?>

<!-- This is the logo that we see only on the main splash page -->
  <div class="container-fluid logo">
    <div class="row-fluid">
      <div class="span3 offset2">
        <img src="img/logo.png">
      </div>
      <div class="span7">
      </div>
    </div>
  </div>

<?php 
  include('inc/scripts.php');
  // For some pages, there will be another include here for other scripts
  include('inc/footer.php'); 
?>