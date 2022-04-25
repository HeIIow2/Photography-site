<?php
register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
    'menu-2' => __( 'Secondary Menu', 'my-custom-theme' ),
));

function my_custom_theme_enqueue() {
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

/* Custom script with no dependencies, enqueued in the footer */
add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');
function tutsplus_enqueue_custom_js() {
	wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/manage_cookies.js',
		array(), false, false);
}