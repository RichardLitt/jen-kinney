
<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="Jen Kinney";
  $style="../css/about.css";
  $responsive_style="../css/responsive.css";
  include('../inc/header.php');
  // This should be on every page - it's the generic navbar
  include('../inc/navbar.php');
?>

<div class="wrap">
	<div class="container bio">
	  <div class="row">
      <div class="span3">
        <img src="../img/logo.png" />
      </div>
	  	<div class="span9">

        <h5>EMAIL: <a href="mailto:jkjenkinney@gmail.com">jkjenkinney@gmail.com</a></h5>
        <p>[Here's the best way to contact me]</p>

        <h5>BLOG: <a href="http://jkjenkinney.tumblr.com">jkjenkinney.tumblr.com</a></h5>
        <p>[Here's where I post photographs and writing, and updates on my work in Whittier, Alaska]</p>

        <h5>FOTOVISURA: <a href="http://jkjenkinney.fotovisura.com">jkjenkinney.fotovisura.com</a></h5>

        <h5>FACEBOOK: <a href="http://www.facebook.com/jennifer.kinney.359">facebook.com/jennifer.kinney.359</a></h5>
	  	
    

      </div>
	  </div>
	</div>
</div>

<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>

