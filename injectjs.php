<?php
/**
 * Plugin Name: Injectjs
 * Version: 1.0
 * Description: Allows injecting global js such as google analytics into wordpress
 * Author: Vibhav Sinha
 * Author URI: http://vsinha.me
 * Plugin URI: https://github.com/vibhavsinha/injectJs
 * Text Domain: injectjs
 * Domain Path: /languages
 * @package Injectjs
 */


function wpmudev_google_analytics() { ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-39361049-1', 'auto');
	  ga('send', 'pageview');

	</script>

<?php }

add_action( 'wp_head', 'wpmudev_google_analytics', 10 );
