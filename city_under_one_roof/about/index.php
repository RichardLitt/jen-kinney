<?php 
  // This is necessary for ever page, it has all of the header information.
  // The title and styles can change per page - define them here. 
  $title="City Under One Roof";
  $style="../../css/photography.css";
  $responsive_style="../../css/responsive.css";
  include('../../inc/header.php');
  // This should be on every page - it's the generic navbar
  include('../../inc/navbar.php');
?>

<div class="container photos about">
  <div class="row">
    <div class="slider">
      <ul id="slider-list">
        <li>
          <img src="../39_Kinney.jpg" />
        </li>
        <li>
          <div class="text">
            <p>"If you can deal with yourself, you can love Whittier," Jim told me, late my last night in town. Jim's lived here twenty years.
             He knows a thing or two about solitude. Whittier echoes with solitude like it does with fog and silence. In summer, young lovers
              pour in for seasonal jobs. In winter, fewer than 200 residents remain.</p>
            <p>Nearly all live out the seasons in a Cold-War-era high-rise apartment building. Fifteen stories, no thirteenth floor, shelter
             the population. To its right looms the grey ruin of another military monolith. The U.S. Military incorporated Whittier in 1941.
              In 1957 the Buckner Building, "A City Under One Roof", was the largest, grandest building in Alaska. In 1960 Whittier was
               decommissioned. The Bucker has been abandoned since.</p>
           </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="container footer-nav">
  <div class="row">
    <div class="span4 offset2">
      <a href="../../book_design/#tunnel">Book</a>
      <a href="http://jkjenkinney.tumblr.com">Blog</a>
      <a href="../about/">About</a>
    </div>
    <div class="span6 title">
      <a href="../index.php">City Under One Roof</a>
    </div>
  </div>
</div>
   
<?php 
  $path_helper = "../../";
  include('../../inc/scripts.php');
?>

<!-- 
<script type="text/javascript">
    $("#slider-list li").click(function(e) {
      var element = $(this);
      var imgWidth = element.width();
      e.preventDefault();
      element.siblings().animate({
        opacity: 0, 
        }, 1000, function() {
          element.siblings().remove();
          element.parent().css({width: '100%'});
          var offset = element.offset(); // determine absolute position of the element
          element.css({
            position: 'absolute',
            top:      (offset.top-80)+'px',
            left:     (offset.left-135)+'px'
          }).animate({
            left: '0px',
            top:  '0px',
          }, 1000);
          element.css({width: '100%', height: '80%'});
          element.children('img').css({width: imgWidth+'px'});
          element.children('.text').css({display: 'block'}).animate({
            opacity: 1
          }, 2000)
        }); 
      
    });
</script>
-->

<?php 
  include('../../inc/footer.php'); 
?>