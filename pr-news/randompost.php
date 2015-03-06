<?php 

wp_reset_query(); 
query_posts( array ('posts_per_page' => 6, 'orderby' => 'rand', 'post__not_in'=> array($postmainid)  ) ); 
require("postloop.php"); 

?>
