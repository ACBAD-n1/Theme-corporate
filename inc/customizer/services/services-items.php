<?php 

//Add New Section Services to services page
$wp_customize->add_section('services_items_sections', [
    'title'					=>	__('Here You can Customize Services Items', 'corporate'),
    'priority'				=>	2,
    'capability'			=>	'edit_theme_options',
    'panel'					=>	'corporate_service_panel',
]);

//Add Control and Setting to customize the title
$wp_customize->add_setting('services_title', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Our Expertise', 'corporate'),
    'sanitize_callback'		=>	'sanitize_text_field',
]);
$wp_customize->add_control('services_title', [
    'label'					=>	__('Here You Can Customize the Services Title', 'corporate'),
    'section'				=>	'services_items_sections',
    'type'					=>	'text'
]);

//Add Control and Setting to customize the text
$wp_customize->add_setting('services_text', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Behind every successful project is a team of dedicated professionals who are passionate about delivering results. At Acbad, our team is made up of seasoned experts with extensive experience in software development, IT consulting, cybersecurity, and project management. Together, we bring a blend of technical expertise and business insight to every project we undertake. ', 'corporate'),
    'sanitize_callback'		=>	'sanitize_textarea_field',
]);
$wp_customize->add_control('services_text', [
    'label'					=>	__('Here You Can Customize the Services Content', 'corporate'),
    'section'				=>	'services_items_sections',
    'type'					=>	'textarea'
]);

// Add a new section for Services Content
$wp_customize->add_section('corporate_services_content_section', [
    'title'       => __('Services Content Section', 'corporate'),
    'priority'    => 3,
    'panel'       => 'corporate_service_panel',
]);

// Add settings and controls for each service card
for ($i = 1; $i <= 7; $i++) {
    // Service Title
    $wp_customize->add_setting("corporate_service_title_$i", [
        'default'           => sprintf(__('Service Title %d', 'corporate'), $i),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control("corporate_service_title_$i", [
        'label'    => sprintf(__('Service %d Title', 'corporate'), $i),
        'section'  => 'corporate_services_content_section',
        'type'     => 'text',
    ]);

    // Service Description
    $wp_customize->add_setting("corporate_service_description_$i", [
        'default'           => sprintf(__('Service %d description goes here.', 'corporate'), $i),
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control("corporate_service_description_$i", [
        'label'    => sprintf(__('Service %d Description', 'corporate'), $i),
        'section'  => 'corporate_services_content_section',
        'type'     => 'textarea',
    ]);

    // Service Icon Class
    $wp_customize->add_setting("corporate_service_icon_$i", [
        'default'           => 'bi bi-app-indicator',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control("corporate_service_icon_$i", [
        'label'    => sprintf(__('Service %d Icon Class', 'corporate'), $i),
        'section'  => 'corporate_services_content_section',
        'type'     => 'text',
    ]);

    // Service Image
    $wp_customize->add_setting("corporate_service_image_$i", [
        'default'           => get_template_directory_uri() . "/assets/img/services/service-$i.jpg",
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "corporate_service_image_$i", [
        'label'    => sprintf(__('Service %d Image', 'corporate'), $i),
        'section'  => 'corporate_services_content_section',
    ]));
}