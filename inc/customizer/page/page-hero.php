<?php 
//Create A New Section For About Hero
$wp_customize->add_section('page_hero', [
    'title'					=>	__('Page Hero', 'corporate'),
    'priority'				=>	1,
    'capability'			=>	'edit_theme_options',
]);


// Customize the background color
$wp_customize->add_setting('page_hero_bg', [
    'type'                  =>  'theme_mod',
    'default'               =>  '#061B75',
    'sanitize_callback'     =>  'sanitize_hex_color',
]);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_hero_bg', [
    'label'                 =>  'Customize the Page Background Color',
    'section'               =>  'page_hero',
    'description' => __('Choose a background color for the about Hero', 'corporate'),
]));

