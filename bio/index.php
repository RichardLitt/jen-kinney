
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
	  	<div class="span8 offset2">
	  		<p>I am drawn like a moth to the lights that stay out after dark. I like the speed of the landscape through the driver's side window; the sliver of moon that sketches your profile onto the night. I am a photographer and a writer. I believe we subsist on stories like we flourish in the sun.</p>
			<p>In 2011 a series of fortuitous events brought me to Whittier, Alaska. The town is situated at the end of a 2.6-mile long tunnel and houses the majority of its 200 residents in one tall apartment complex. It is an unlikely crossroads of community and solitude; isolation and claustrophobia. The story drew me in utterly and I began to photograph. In July 2013 I will return to live in Whittier and will produce a book of this work with the support of the Alaska Humanities Forum.</p>
			<p>I received my B.F.A. in Photography and Imaging from NYU's Tisch School of the Arts. I have received grants from the Alaska Humanities Forum, the Tisch School, and NYU's Emerging Artists Fund. My work has been exhibited at NYU's Gulf and Western and 412 Galleries, Columbia's Post Crypt Gallery, and Calumet Gallery, among others. My photography and writing have been published in Satellite Magazine, ISO Magazine, SAND Magazine and Magazin XXX. I also self-publish hand-bound books in limited editions.</p>
		</div>
		<div class="span2"></div>
	  </div>
	</div>
</div>

<?php 
  $path_helper = "../";
  include('../inc/scripts.php');
  include('../inc/footer.php'); 
?>

