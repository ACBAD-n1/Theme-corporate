<?php 
// Add a new section for customizing the Team Section
$wp_customize->add_section('corporate_team_section', [
    'title'       => __('Team Section', 'corporate'),
    'priority'    => 6,
    'capability'  => 'edit_theme_options',
    'panel'       => 'corporate_home_panel',
]);

// Add setting for Team image
$wp_customize->add_setting('team_image', [
    'type'              => 'theme_mod',
    'default'           => get_template_directory_uri() . '/assets/img/team.jpg', // Default image
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'team_image', [
    'label'    => __('Team Image', 'corporate'),
    'section'  => 'corporate_team_section',
    'settings' => 'team_image',
]));
