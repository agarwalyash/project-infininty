<!--******************Featured*******************-->


<?php query_posts( array ( 'category_name' => 'featured1', 'posts_per_page' => 1 ) ); ?>
<?php prnews_sidebar_home($paged); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="highlights-section">
  <div id="highlights-tint"></div>
 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div id="highlights-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
 <div id="highlights-primary">
    <div class="section-eb">
    <?php 
		$category = get_the_category(); 
		if($category[0]){
		echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
		}
	?>
	</div>
    <div class="headline">
	 <a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
 	</a>
    </div> 
  </div>

<?php 
endwhile; endif; 
wp_reset_query(); 
?>

<div id="highlights-secondary">
      <div class="primary-overlay"></div>   
<?php query_posts( array ( 'category_name' => 'featured2', 'posts_per_page' => 3 ) ); ?>
<?php prnews_sidebar_home($paged); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="secondary-story">
            <div class="eb">
              <?php 
				$category = get_the_category(); 
				if($category[0]){
				echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
				}
			?>
			</div>
            <div class="headline">
 			<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
 			</a>
            </div>
    </div>
<?php 
endwhile; endif; 
wp_reset_query(); 
?>
</div>
</div>
</div>

<!--******************Featured_ends*******************-->
