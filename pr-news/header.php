<!DOCTYPE html>
<!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<title><?php wp_title(); ?></title>
<link rel="stylesheet" href="http://www.swagistan.com/css/rrssb.css" />
<link rel="stylesheet" href="http://www.swagistan.com/css/demo.css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if(of_get_option('prnews_favicon')) { ?><link rel="shortcut icon" href="<?php echo esc_url(of_get_option('prnews_favicon')); ?>" />
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
	
<?php wp_head(); 	?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=375887732582360&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 	<div id="topmenu" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">

			<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"  href="#nav-main">
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
				</a>
 			<a class="brand<?php if (of_get_option('prnews_logo') != '') { echo ' logo'; } ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if (of_get_option('prnews_logo') != '') { ?>
					<img src="<?php echo of_get_option('prnews_logo') ?>" alt="Logo" />
				<?php } else {
					bloginfo('name');
				}
				?>
				</a>
            <div id="nav-main" class="nav-collapse collapse">
					<?php  wp_nav_menu( array(
                'theme_location'    => 'top_nav',
                'depth'             => 12,
				'container' => false,
       			'menu_class'        => 'nav navbar-nav nav-collapse collapse', 
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

<?php    if ('' != $prsearch = of_get_option('prnews_search')) { ?>						
			  <form class="navbar-search pull-right" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" class="input-medium search-query" placeholder="<?php _e('Search', 'prnews'); ?>" name="s" id="s" value="<?php the_search_query(); ?>">
					</form>    
<?php } 
if ('' != $prrss = of_get_option('prnews_rss')) { ?>			
					<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to our RSS Feed', 'prnews'); ?>" class="social pull-right"><i class="icon-rss icon-large"></i></a>					
	<?php } 
   if ('' != $google = of_get_option('prnews_google')) { ?>
					<a href="<?php echo esc_url($google); ?>" title="<?php _e('Find us on Google+', 'prnews'); ?>" class="social pull-right"><i class="icon-google-plus icon-large"></i></a>
	<?php } 

if ('' != $linkedin = of_get_option('prnews_linkedin')) { ?>
					<a href="<?php echo esc_url($linkedin); ?>" title="<?php _e('Find us on Linkedin', 'prnews'); ?>" class="social pull-right"><i class="icon-linkedin icon-large"></i></a>	
						<?php } 
	if ('' != $pinterest = of_get_option('prnews_pinterest')) { ?>
					<a href="<?php echo esc_url($pinterest); ?>" title="<?php _e('Find us on Pinterest', 'prnews'); ?>" class="social pull-right"><i class="icon-pinterest icon-large"></i></a>	
						<?php } 						
if ('' != $twitter = of_get_option('prnews_twitter')) { ?>
					<a href="<?php echo esc_url($twitter); ?>" title="<?php _e('Follow us on Twitter', 'prnews'); ?>" class="social pull-right"><i class="icon-twitter icon-large"></i></a>
					<?php } 
		if ('' != $facebook = of_get_option('prnews_facebook')) { ?>
					<a href="<?php echo esc_url($facebook); ?>" title="<?php _e('Find us on Facebook', 'prnews'); ?>" class="social pull-right"><i class="icon-facebook icon-large"></i></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<div id="leader-wrapper" class="container"> 
	<div class="row-fluid">	
<?php	if (of_get_option('prnews_logo_large') != '' ) { ?>
		<div  class="span12">
			<?php if (of_get_option('prnews_logo_large') != '') { ?>
<div id="logo_large">
	<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('prnews_logo_large') ?>" alt="Logo" /></a></div>
    	     <?php	} ?>	
</div> 	
<?php	} ?>	
	</div>
</div>