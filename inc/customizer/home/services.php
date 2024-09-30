<?php 
	// Add a New Section to Customize the Home Services
$wp_customize->add_section('corporate_home_services', [
    'title'       => __('Customize Home Services Section', 'corporate'),
    'priority'    => 4,
    'capability'  => 'edit_theme_options',
    'panel'       => 'corporate_home_panel',  // Assuming this panel exists
]);

// Customize the Section Title
$wp_customize->add_setting('home_services_title', [
    'type'              => 'theme_mod',
    'default'           => __('Our <br>Home Services', 'corporate'),
    'sanitize_callback' => 'wp_kses_post', // Allows HTML like <br>
]);
$wp_customize->add_control('home_services_title', [
    'label'       => __('Home Services Section Title', 'corporate'),
    'section'     => 'corporate_home_services',
    'type'        => 'textarea',
]);

// Customize the Section Background Image
$wp_customize->add_setting('home_services_image', [
    'type'              => 'theme_mod',
    'default'           => get_template_directory_uri() . '/assets/img/services.jpg',
    'sanitize_callback' => 'esc_url_raw',
]);
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_services_image', [
    'label'       => __('Home Services Background Image', 'corporate'),
    'section'     => 'corporate_home_services',
    'description' => __('Upload a background image for the services section.', 'corporate'),
]));

	// Loop to Customize Each Service Item
	for ($i = 1; $i <= 3; $i++) {
		// Customize Service Icon
		$wp_customize->add_setting("home_service_{$i}_icon", [
			'type'              => 'theme_mod',
			'default'           => 'bi bi-shield-check',  // Default Bootstrap Icon
			'sanitize_callback' => 'sanitize_text_field',
		]);
		$wp_customize->add_control("home_service_{$i}_icon", [
			'label'       => __("Service {$i} Icon Class", 'corporate'),
			'section'     => 'corporate_home_services',
			'type'        => 'text',
			'description' => __('Add the Bootstrap icon class for the service.', 'corporate'),
		]);

		// Customize Service Title
		$wp_customize->add_setting("home_service_{$i}_title", [
			'type'              => 'theme_mod',
			'default'           => __('Service Title', 'corporate'),
			'sanitize_callback' => 'sanitize_text_field',
		]);
		$wp_customize->add_control("home_service_{$i}_title", [
			'label'       => __("Service {$i} Title", 'corporate'),
			'section'     => 'corporate_home_services',
			'type'        => 'text',
		]);

		// Customize Service Description
		$wp_customize->add_setting("home_service_{$i}_description", [
			'type'              => 'theme_mod',
			'default'           => __('Service description text here.', 'corporate'),
			'sanitize_callback' => 'sanitize_textarea_field',
		]);
		$wp_customize->add_control("home_service_{$i}_description", [
			'label'       => __("Service {$i} Description", 'corporate'),
			'section'     => 'corporate_home_services',
			'type'        => 'textarea',
		]);
	}