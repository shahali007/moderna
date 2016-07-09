<?php
function moderna_function(){
	
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.1.0', 'all');
	wp_register_style('fancybox', get_template_directory_uri().'/css/fancybox/jquery.fancybox.css', array(), '2.1.4', 'all');
	wp_register_style('flexslider', get_template_directory_uri().'/css/flexslider.css', array(), '2.0', 'all');
	wp_register_style('main-css', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');
	wp_register_style('skins', get_template_directory_uri().'/skins/default.css', array(), '1.0', 'all');
	
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('fancybox');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('main-css');
	wp_enqueue_style('skins');
	 
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('easing' , get_template_directory_uri().'/js/jquery.easing.1.3.js' , array() , '1.3' , true);
	wp_enqueue_script('bootstrap-js' , get_template_directory_uri().'/js/bootstrap.min.js' , array() , '3.1.0' , true);
	wp_enqueue_script('fancybox-js' , get_template_directory_uri().'/js/jquery.fancybox.pack.js' , array() , '2.1.4' , true);
	wp_enqueue_script('fancybox-media-js' , get_template_directory_uri().'/js/jquery.fancybox-media.js' , array() , '2.1.4' , true);
	wp_enqueue_script('prettify-js' , get_template_directory_uri().'/js/google-code-prettify/prettify.js' , array() , '1.0' , true);
	wp_enqueue_script('quicksand-js' , get_template_directory_uri().'/js/portfolio/jquery.quicksand.js' , array() , '1.2.2' , true);
	wp_enqueue_script('portfolio-js' , get_template_directory_uri().'/js/portfolio/setting.js' , array() , '1.2.2' , true);
	wp_enqueue_script('flexslider-js' , get_template_directory_uri().'/js/jquery.flexslider.js' , array() , '1.8' , true);
	wp_enqueue_script('animate-js' , get_template_directory_uri().'/js/animate.js' , array() , '1.0' , true);
	wp_enqueue_script('custom-js' , get_template_directory_uri().'/js/custom.js' , array() , '1.0' , true);
	
}
add_action('wp_enqueue_scripts','moderna_function');
?>