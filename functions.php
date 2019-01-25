<?php
//adds support to show thumbnails of post
function mytheme_post_thumbnails(){
	add_theme_support('post-thumbnails' );
	add_post_type_support('page', 'excerpt' );
}
//post thumbnails run feature images
add_action('after_setup_theme',
'mytheme_post_thumbnails' );
?>