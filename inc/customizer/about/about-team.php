<?php 
//New About Section to customize team Image
$wp_customize->add_section('about_team', [
    'title'					=>	__('About Team Image', 'corporate'),
    'priority'				=>	2,
    'capability'			=>	'edit_theme_options',
    'panel'					=>	'corporate_about_panel',
]);


//Theam About Image Customize
$wp_customize->add_setting('about_team_bg', [
    'type'					=>	'theme_mod',
    'default'				=>	'',
    'sanitize_callback'		=>	'esc_url_raw'
]);
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_team_bg', [
    'label'					=>	__('Customize the Image Background', 'corporate'),
    'section'				=>	'about_team',
    'description'			=>	__('Here You Can Customize The Background Image', 'corporate'),
]));