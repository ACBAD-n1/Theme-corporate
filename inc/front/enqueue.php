<?php 

/**
 * Enqueue scripts and styles.
 */
function corporate_scripts() {
	wp_style_add_data( 'corporate-style', 'rtl', 'replace' );
    wp_enqueue_style( 'corporate-boostrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style( 'corporate-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style( 'corporate-style', get_template_directory_uri() . '/assets/css/style.css', array(), time() );


    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'corporate-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', true );
	wp_enqueue_script( 'corporate-js', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'corporate-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}