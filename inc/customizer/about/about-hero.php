<?php 
//Create A New Section For About Hero
$wp_customize->add_section('about_hero', [
    'title'					=>	__('About Hero', 'corporate'),
    'priority'				=>	1,
    'capability'			=>	'edit_theme_options',
    'panel'					=>	'corporate_about_panel'
]);


// Customize the background color
$wp_customize->add_setting('about_hero_bg', [
    'type'                  =>  'theme_mod',
    'default'               =>  '#061B75',
    'sanitize_callback'     =>  'sanitize_hex_color',
]);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_hero_bg', [
    'label'                 =>  'Customize the Background Color',
    'section'               =>  'about_hero',
    'description' => __('Choose a background color for the about Hero', 'corporate'),
]));


//Customize About Hero Title
$wp_customize->add_setting('about_hero_title', [
    'type'					=>	'theme_mod',
    'default'				=>	__('About Acbad', 'corporate'),
    'sanitize_callback'		=>	'sanitize_text_field',
]);

$wp_customize->add_control('about_hero_title', [
    'label'					=>	__('About Hero Title', 'corporate'),
    'section'				=>	'about_hero',
    'type'					=>	'text',
]);

//Customize About Hero Title
$wp_customize->add_setting('about_hero_content', [
    'type'					=>	'theme_mod',
    'default'				=>	__('At Acbad, we are passionate about empowering businesses 
                                    through cutting-edge technology and innovative solutions. With years of 
                                    experience in the industry, we specialize in providing custom software 
                                    development, IT consulting, and cybersecurity services designed to meet 
                                    the unique needs of our clients. Our team of skilled professionals is 
                                    dedicated to helping businesses thrive in a constantly evolving digital world. ', 
                                    'corporate'),
    'sanitize_callback'		=>	'sanitize_textarea_field',
]);

$wp_customize->add_control('about_hero_content', [
    'label'					=>	__('About Hero content', 'corporate'),
    'section'				=>	'about_hero',
    'type'					=>	'textarea',
]);


// Setting and Control for Mission Card Title
$wp_customize->add_setting('mission_card_title', [
    'default'           => __('Our Mission', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('mission_card_title', [
    'label'       => __('Mission Card Title', 'corporate'),
    'section'     => 'about_hero',
    'type'        => 'text',
]);

// Setting and Control for Mission Card Text
$wp_customize->add_setting('mission_card_text', [
    'default'           => __('Our mission is to deliver high-quality, scalable solutions that drive success and growth for our clients...', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('mission_card_text', [
    'label'       => __('Mission Card Text', 'corporate'),
    'section'     => 'about_hero',
    'type'        => 'textarea',
]);

// Setting and Control for Vision Card Title
$wp_customize->add_setting('vision_card_title', [
    'default'           => __('Our Vision', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('vision_card_title', [
    'label'       => __('Vision Card Title', 'corporate'),
    'section'     => 'about_hero',
    'type'        => 'text',
]);

// Setting and Control for Vision Card Text
$wp_customize->add_setting('vision_card_text', [
    'default'           => __('We envision a future where businesses are empowered by technology to reach their fullest potential...', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('vision_card_text', [
    'label'       => __('Vision Card Text', 'corporate'),
    'section'     => 'about_hero',
    'type'        => 'textarea',
]);