<div class="container-fluid  container"> 
	<div id="mcontainer">
		<?php
		prnews_sidebar_home($paged);		
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="boxy post type-post status-publish format-standard has-post-thumbnail hentry category-graphics tag-t-shirt mosaic__item article-archive article-archive--masonry has-thumbnail">
	<header class="article__header">
		<div class="article__featured-image" style="padding-top: 98.25%">
			<?php echo prnews_thumbnail($post->ID); ?>
			<div class="article__featured-image-meta">
				<div class="flexbox">
					<div class="flexbox__item">
						<hr class="separator">
						<span class="read-more">Read more</span>

						<hr class="separator">
					</div>
				</div>
			</div></a>
		</div>

		<ol class="nav article__categories">
			<li>
				<?php 
					$category = get_the_category(); 
					if($category[0]){
					echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
					}
				?>	
			</li>
		</ol>

		<h3 class="article__title entry-title">
			<a href="<?php the_permalink(); ?>">
			<div class="posttitle1"><?php the_title(); ?></div>
			</a>
		</h3>
		<span class="vcard author"><span class="fn"><span class="value-title"></span></span></span>
	</header>

	<section class="article__content entry-summary">
		<a href="<?php the_permalink(); ?>">
		<p>
			<?php the_excerpt(); ?>
		</p>
		</a>
	</section>

	<footer class="article__meta">
		<span class="meta-box article__date"><i class="icon-time"></i>
		<span class="meta-text"><abbr class="published updated"><?php //echo time_ago(); ?></abbr></span></span>
	</footer>
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
		<?php endif; 
		?>
	</div>
	<div id="navigation">
		<ul class="pager">
			<li id="navigation-next"><?php next_posts_link(__('&laquo; Previous', 'prnews')) ?></li>
			<li id="navigation-previous"><?php previous_posts_link(__('Next &raquo;', 'prnews')) ?></li>
		</ul>
	</div>