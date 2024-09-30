<?php 
// Add a new section for customizing the Plan and Pricing section
$wp_customize->add_section('corporate_plan_pricing_section', [
    'title'       => __('Plan and Pricing Section', 'corporate'),
    'priority'    => 5,
    'capability'  => 'edit_theme_options',
    'panel'       => 'corporate_home_panel',
]);

// Add setting for Plan and Pricing section title
$wp_customize->add_setting('plan_pricing_title', [
    'type'              => 'theme_mod',
    'default'           => __('Plan and Pricing', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('plan_pricing_title', [
    'label'   => __('Section Title', 'corporate'),
    'section' => 'corporate_plan_pricing_section',
    'type'    => 'text',
]);

// Add setting for Plan and Pricing section description
$wp_customize->add_setting('plan_pricing_description', [
    'type'              => 'theme_mod',
    'default'           => __('A RANGE OF OPPORTUNITIES TO SUIT EVERY CLIENT', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('plan_pricing_description', [
    'label'   => __('Section Description', 'corporate'),
    'section' => 'corporate_plan_pricing_section',
    'type'    => 'textarea',
]);

// Add setting for the button text
$wp_customize->add_setting('plan_pricing_button_text', [
    'type'              => 'theme_mod',
    'default'           => __('Learn More', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('plan_pricing_button_text', [
    'label'   => __('Button Text', 'corporate'),
    'section' => 'corporate_plan_pricing_section',
    'type'    => 'text',
]);

// Add setting for the button link
$wp_customize->add_setting('plan_pricing_button_link', [
    'type'              => 'theme_mod',
    'default'           => '#',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control('plan_pricing_button_link', [
    'label'   => __('Button Link', 'corporate'),
    'section' => 'corporate_plan_pricing_section',
    'type'    => 'url',
]);
