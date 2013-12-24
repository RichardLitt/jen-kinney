    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?=$path_helper?>js/jquery.js"></script>
    <script src="<?=$path_helper?>js/bootstrap.min.js"></script>
    <!-- script src="assets/js/switch.js"></script -->

    <!-- This changes the backgrounds for the navbar images -->
    <script type="text/javascript">
      $(window).load(function() {
        var navImage = function(navlink, image) {
          $(navlink).click(function(e){
            $('.logo').remove();
            $('.container').remove();
            $('body').css({background: 'none'});
            $('html').css({backgroundImage: "url(\'"+image+"\')"})
          }); 
        };
        navImage('#photography', '../img/bus_contact_page.jpg');
        navImage('#storytelling', '../img/tools.jpg');
        navImage('#about', '../img/forest_intro_page.jpg');
      })
    </script>

    <!-- This is the google analytics code -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-41927550-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>