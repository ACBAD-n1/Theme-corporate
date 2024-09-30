<?php 

// Add Section for Services Hero
$wp_customize->add_section('corporate_services_hero_section', [
    'title'       => __('Services Hero Section', 'corporate'),
    'priority'    => 1,
    'panel'       => 'corporate_service_panel',
    ]
);

// Services Title
$wp_customize->add_setting('corporate_services_title', [
    'default'           => __('Our Services', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]
);

$wp_customize->add_control('corporate_services_title', [
    'label'    => __('Services Section Title', 'corporate'),
    'section'  => 'corporate_services_hero_section',
    'type'     => 'text',
]
);

// Services Description
$wp_customize->add_setting('corporate_services_description', [
    'default'           => __('At Acbad, we offer a range of innovative and customized technology solutions to help businesses grow...', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]
);

$wp_customize->add_control('corporate_services_description', [
    'label'    => __('Services Description', 'corporate'),
    'section'  => 'corporate_services_hero_section',
    'type'     => 'textarea',
]
);