<?php
/**
 * corporate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corporate
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


//
//Include
//

//Include setup adding all support and options
require get_template_directory() . '/inc/setup.php';

//Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';


//Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';


//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';


//Customizer additions.
require get_template_directory() . '/inc/customizer.php';


//Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Include enqueue for styling
require get_template_directory() . '/inc/front/enqueue.php';


//Include All Widgets
require get_template_directory() . '/inc/widgets.php';


//Hooks
add_action( 'wp_enqueue_scripts', 'corporate_scripts' );
add_action( 'after_setup_theme', 'corporate_content_width', 0 );
add_action( 'after_setup_theme', 'corporate_setup' );
add_action( 'widgets_init', 'corporate_widgets_init' );
add_action( 'customize_register', 'corporate_customize_register' );