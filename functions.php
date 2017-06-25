<?php function enqueue_styles() {
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/libs/animate.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font.css');
	

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/*function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts'); */?>