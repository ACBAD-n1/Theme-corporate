<?php 
// Add a new section for customizing the Contact Section
$wp_customize->add_section('corporate_contact_section', [
    'title'       => __('Contact Section', 'corporate'),
    'priority'    => 7,
    'capability'  => 'edit_theme_options',
    'panel'       => 'corporate_home_panel',
]);

// Add setting for Contact Section Title
$wp_customize->add_setting('contact_section_title', [
    'type'              => 'theme_mod',
    'default'           => __('Let\'s Connect', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('contact_section_title', [
    'label'    => __('Contact Section Title', 'corporate'),
    'section'  => 'corporate_contact_section',
    'settings' => 'contact_section_title',
    'type'     => 'text',
]);

// Add setting for Contact Section Description
$wp_customize->add_setting('contact_section_description', [
    'type'              => 'theme_mod',
    'default'           => __('I\'m a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('contact_section_description', [
    'label'    => __('Contact Section Description', 'corporate'),
    'section'  => 'corporate_contact_section',
    'settings' => 'contact_section_description',
    'type'     => 'textarea',
]);
