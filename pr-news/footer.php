<div id="footer" class="container">

<?php require("subscribe.php"); ?>
<?php
//echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="6" button_label="Loading!"]' );
?>	

<div class="text-align-center">
Copyright &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>">
AM Universal
   </div> 
</div>
<?php wp_footer(); ?>
</body>
</html>