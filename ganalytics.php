<?php
/*
Plugin Name: Google Analytics
Plugin URI: https://www.beamspace.com/
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Jason Giambona
Version: 1.0
 */
function ganalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'YOUR_ANALYTICS_NUMBER_HERE', 'auto');
  ga('send', 'pageview');

</script>
<?php }
add_action( 'wp_head', 'ganalytics', 10 );
