<head>
	<link href=
	'http://pluton.themeart.co/wp-content/themes/ta-pluton/css/bootstrap.css?ver=2.3.2'
	id='bootstrap-styles-css' media='all' rel='stylesheet' type='text/css'>
	<link href=
	'http://pluton.themeart.co/wp-content/themes/ta-pluton/css/bootstrap-responsive.css?ver=2.3.2'
	id='bootstrap-responsive-styles-css' media='all' rel='stylesheet' type=
	'text/css'>

	<link href=
	'http://fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C700&#038;subset=latin%2Clatin-ext&#038;ver=4.1'
	id='Google-font-css' media='all' rel='stylesheet' type='text/css'>
	<link href=
	'http://pluton.themeart.co/wp-content/themes/ta-pluton/style.css?ver=4.1'
	id='ta-pluton-style-css' media='all' rel='stylesheet' type='text/css'>

</head>
<?php get_header();
require("featured.php"); 
?>








<div class="container-fluid  container"> 
	<div id="mcontainer">
		<?php 
		wp_reset_query(); 
		prnews_sidebar_home($paged);		
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="boxy">
		

	<ul class="thumbnails row" id="portfolio-grid">
		<!-- the loop -->

	<a href="<?php the_permalink(); ?>">
		<li class="span4 mix identity photo mix_all" style="display: inline-block; opacity: 1;">
			<div class="thumbnail animated fadeInDown">
				
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	 			<img alt="project" src="<?php echo $image[0]; ?>">
				
				<h3><?php the_title(); ?></h3>
				
				<p>
				<?php 
						$category = get_the_category(); 
						if($category[0]){
						echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
				}?>	
				</p>
			
			</div>
		</li>
	</a>
		<!-- end of the loop -->
	</ul>

		
	</div>
		<?php 
		endwhile; 
		else :
		?>
			<div class="boxy">
				<div class="post-wrapper">
					<div class="h1-wrapper">
						<h1><?php _e( 'No Items Found', 'prnews' ); ?></h1>
					</div>		
	
					<div class="post-content text-align-center">
					<p><?php _e('Perhaps searching will help.', 'prnews'); ?></p>
					<?php get_search_form(); ?>
					</div>
				</div>
			</div>
	</div>
		<?php endif; ?>
	</div>
	<div id="navigation">
		<ul class="pager">
			<li id="navigation-next"><?php next_posts_link(__('&laquo; Previous', 'prnews')) ?></li>
			<li id="navigation-previous"><?php previous_posts_link(__('Next &raquo;', 'prnews')) ?></li>
		</ul>
	</div>


















<div id="footernav">
<?php	if (has_nav_menu('boot_nav')) {
						wp_nav_menu(array('theme_location' => 'boot_nav', 'menu_class' => 'nav'));
					} ?>
</div>
  <div id="scroll-top"><a href="#"><img src="http://www.swagistan.com/wp-content/themes/pr-news/1.png" alt="TOP" /></a></div>
</div>
<?php get_footer(); ?>

