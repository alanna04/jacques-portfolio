<?php
//adds support to show thumbnails of post
function mytheme_post_thumbnails(){
	add_theme_support('post-thumbnails' );
}
//post thumbnails run feature images
add_action('after_setup_theme',
'mytheme_post_thumbnails' );
?>