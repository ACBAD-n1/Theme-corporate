<?php 

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function corporate_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function corporate_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function corporate_customize_preview_js() {
	wp_enqueue_script( 'corporate-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}

add_action( 'customize_preview_init', 'corporate_customize_preview_js' );
