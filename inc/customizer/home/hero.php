<?php 

//Add A section for customizing our Home Hero page
$wp_customize->add_section('corporate_home_hero', [
    'title'					=>	__('Customize The Home Hero', 'corporate'),
    'priority'				=>	1,
    'capability'			=>	'edit_theme_options',
    'panel'					=>	'corporate_home_panel',
]);


//Customize The Home Hero background Image
$wp_customize->add_setting('home_hero_image', [
    'type'					=>	'theme_mod',
    'default'				=>	'',
    'sanitize_callback'		=>	'esc_url_raw',
]); 
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_hero_image', 
    [
        'label'				=>	__('Customize Home Hero Background Image', 'corporate'),
        'section'			=>	'corporate_home_hero',
        'description'		=>	__('You can customize The Hero background Image', 'corporate'),
    ]
));

//Customize the Home Hero Title 
$wp_customize->add_setting('home_hero_title', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Empowering Your Business<br>with Innovative Solutions', 'corporate'),
    'sanitize_callback'		=>	'wp_kses_post', // Allow HTML tags like <br>
]);
$wp_customize->add_control('home_hero_title', [
    'label'					=>	__('Customize the Home Hero Title', 'corporate'),
    'section'				=>	'corporate_home_hero',
    'type'					=>	'textarea', // Textarea allows for multi-line input
    'description'           => __('You can add a line break using <br> tag.', 'corporate'),
]);

//Customize the Home Hero SubTitle 
$wp_customize->add_setting('home_hero_subtitle', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Leading the Way in Acbad with Cutting-Edge<br>Technology and Expert Services ', 'corporate'),
    'sanitize_callback'		=>	'wp_kses_post', // Allow HTML tags like <br>
]);
$wp_customize->add_control('home_hero_subtitle', [
    'label'					=>	__('Customize the Home Hero Sub Title', 'corporate'),
    'section'				=>	'corporate_home_hero',
    'type'					=>	'textarea', // Textarea allows for multi-line input
    'description'           => __('You can add a line break using <br> tag.', 'corporate'),
]);

//Customize the Home Hero cta button 
$wp_customize->add_setting('home_hero_button', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Get Started', 'corporate'),
    'sanitize_callback'		=>	'sanitize_text_field',
]);
$wp_customize->add_control('home_hero_button', [
    'label'					=>	__('Customize the Home Hero Button', 'corporate'),
    'section'				=>	'corporate_home_hero',
    'type'					=>	'text', // Textarea allows for multi-line input
    'description'           => __('You can Customize the Hero CTA Button.', 'corporate'),
]);

//Customize the Home Hero cta button URL
$wp_customize->add_setting('home_hero_button_url', [
    'type'					=>	'theme_mod',
    'default'				=>	__('#', 'corporate'),
    'sanitize_callback'		=>	'esc_url_raw',
]);
$wp_customize->add_control('home_hero_button_url', [
    'label'					=>	__('Customize the Home Hero Button Url', 'corporate'),
    'section'				=>	'corporate_home_hero',
    'type'					=>	'url', // Textarea allows for multi-line input
    'description'           => __('You can Customize the Hero CTA Button URL.', 'corporate'),
]);