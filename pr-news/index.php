<?php get_header();?>
<link rel="stylesheet" type="text/css" href="http://heap.pgm.netdna-cdn.com/demos/heap/wp-content/cache/minify/000000/44d65/default.include.8d0431.css" media="all" />

<?php 
require("featured.php"); 
require("postloop.php"); ?>
<div id="footernav">
<?php	if (has_nav_menu('boot_nav')) {
						wp_nav_menu(array('theme_location' => 'boot_nav', 'menu_class' => 'nav'));
					} ?>
</div>
  <div id="scroll-top"><a href="#"><img src="http://www.swagistan.com/wp-content/themes/pr-news/1.png" alt="TOP" /></a></div>
</div>
<?php get_footer(); ?>