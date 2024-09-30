<?php 
// Add Footer Section to Customize Footer
$wp_customize->add_section('corporate_footer_section', [
    'title'       => __('Footer Settings', 'corporate'),
    'priority'    => 140,
    'capability'  => 'edit_theme_options',
]);

// Customize Footer Copyright Text
$wp_customize->add_setting('footer_copyright_text', [
    'type'              => 'theme_mod',
    'default'           => __('© 2025 by Adam Boureima', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('footer_copyright_text', [
    'label'       => __('Footer Copyright Text', 'corporate'),
    'section'     => 'corporate_footer_section',
    'type'        => 'text',
]);
