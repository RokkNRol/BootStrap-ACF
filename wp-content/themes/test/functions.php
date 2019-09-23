<?php
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
}