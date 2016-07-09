<?php

function moderna_theme_custom_posts(){
	register_post_type('slide',array(
		'public' => true,
		'label'  => 'Slide',
		'supports'  => array('title','editor','thumbnail','excerpt'),
		
	));
}
add_action('init','moderna_theme_custom_posts');

?>