<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <!-- This loads in a tab at the top of the page, and can change for each page if you like -->
    <title><?=$title?></title>
    
    <!-- Some basic metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Richard Littauer">
    <meta name="copyright" content="&copy; Jen Kinney 2013">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- This loads up the font that we're using in the header and the like --> 
    <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Noto+Sans:400,700:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>

    <!-- Le styles -->
    <link href="<?=$style?>" rel="stylesheet">
    <link href="<?=$responsive_style?>" rel="stylesheet">



    <!-- This is what would come up in a tab - it needs to be a 16x16 image, called favicon.ico
    <link rel="shortcut icon" href="favicon.ico"> -->

    <!-- Le fav and touch icons
    // These are what you would have as an icon on an iphone. They need to be the appropriate sizes, as labelled below.
    <link rel="apple-touch-icon" href="/images/touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/images/touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/images/touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/images/touch-icon-ipad-retina.png" />
     -->
</html>
<body>
