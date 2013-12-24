
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
      <div class="span2 cv">
        <a href="#"><p><strong>Download CV</strong></p></a>
      </div>
	  	<div class="span8">

        <h5>JEN KINNEY</h5>
        <p><a href="mailto:jkjenkinney@gmail.com">jkjenkinney@gmail.com</a></p>
	  	
        <h5>EDUCATION</h5>
        <p>B.F.A. in Photography and Imaging, New York University, Tisch School of the Arts, 2012 Tisch School of the Arts 2012 Commencement Speaker</p>
        <p>Dean’s List, 2009 - 2012</p>

        <h5>GRANTS & AWARDS</h5>
        <table>
          <tr><td class="year">2013</td><td>General Grant, Alaska Humanities Forum</td></tr>
          <tr><td class="year">2012</td><td>Honorarium from the Fund for Emerging Artists, New York University</td></tr>
          <tr><td></td><td>Recognition for Creative and Innovative Excellence, Tisch School of the Arts</td></tr>
          <tr><td class="year">2011</td><td>Thomas Drysdale Production Grant, Tisch School of the Arts</td></tr></table>
        </table>

        <h5>EXHIBITIONS</h5>
        <table>
          <tr><td class="year">2012</td><td>In Spite of Itself, Gallery 412, New York, NY (solo)</td></tr>
          <tr><td class="year"></td><td>Dirty Werk, Littlefield, New York, NY</td></tr>
          <tr><td class="year"></td><td>Aporetics, Post Crypt Gallery, New York, NY</td></tr>
          <tr><td class="year"></td><td>The Fool and the World, Think Gallery, New York, NY (solo)</td></tr>
          <tr><td class="year"></td><td>Senior B.F.A. Exhibition, Calumet Photographic, New York, NY</td></tr>
          <tr><td class="year"></td><td>The Fool and the World, Gulf + Western Gallery, New York, NY</td></tr>
          <tr><td class="year">2011</td><td>What Matters Now, Aperture Gallery, New York, NY</td></tr>
        </table>

        <h5>PRESS & BIBLIOGRAPHY</h5>
        <table>
          <tr><td class="year">2013</td><td>Magazin XXX. Spring 2013.</td></tr>
          <tr><td class="year">2012</td><td>“Whittier, Alaska.” Interview of Jen Kinney by Sarah Wesseler. Satellite Magazine. December 2012. Web.</td></tr>
          <tr><td class="year"></td><td>“In Spite of Itself: An Interview with Jen Kinney.” CityWide. WNYU, New York. 29 August 2012. Radio.</td></tr>
          <tr><td class="year"></td><td>Lopez, Agustin. “Tarot Cards.” The Subjective Life. July 2012, www.thesubjectivelife.com. Web.</td></tr>
          <tr><td class="year"></td><td>Stark, Haley. “Jen Kinney,” ISO Magazine: A New Landscape. Spring 2012, pp. 11-15. Print.</td></tr>
          <tr><td class="year"></td><td>ISO Magazine: Ritual. Fall 2012, pp. 41, 55. Print.</td></tr>
          <tr><td class="year">2011</td><td>SAND Magazine, Fall 2011, p. 45. Print.</td></tr>
          <tr><td class="year">2010</td><td>ISO Magazine: Mystique, p. 60. Print.</td></tr>
        </table>

        <h5>PROJECTS, COLLABORATIONS & EVENTS</h5>
        <table>
          <tr><td class="year">2013</td><td>EarSay presents “Where We Meet: Our Love of Stories,” one of two main presenters and organizers</td></tr>
          <tr><td class="year"></td><td>Satellite Magazine “Show and Tell” collaborative text and image event</td></tr>
          <tr><td class="year">2012</td><td>On-set photography for feature film ROVER, directed by Tony Blahd</td></tr>
          <tr><td class="year"></td><td>Told story at Moth Storytelling Event, 6 January, theme: Underground</td></tr>
          <tr><td class="year"></td><td>Co-organizer of senior B.F.A. thesis exhibitions at Gulf + Western and Calumet Galleries</td></tr>
          <tr><td class="year">2011</td><td>Senior B.F.A. Catalog design, Department of Photography and Imaging</td></tr>
        </table>

        <h5>PUBLICATIONS</h5>  
        <table>
          <tr><td class="year">2013</td><td>I Set My Watch By Tunnel Time, self-published</td></tr>
          <tr><td class="year">2012</td><td>The Fool and the World (deck of Tarot cards), self-published</td></tr>
          <tr><td class="year">2011</td><td>The Light at the End of the Tunnel, self-published. </td></tr>
          <tr><td class="year"></td><td>Trapper Creek, self-published.</td></tr>
          <tr><td class="year">2009</td><td>“On Timing,” Mercer Street, essay.</td></tr>
        </table>

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

