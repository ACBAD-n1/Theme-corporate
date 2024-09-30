<?php 
//Add A New Section To Customize Home About section
$wp_customize->add_section('corporate_home_about', [
    'title'					=>	__('Customize The Home About ', 'corporate'),
    'priority'				=>	2,
    'capability'			=>	'edit_theme_options',
    'panel'					=>	'corporate_home_panel',
]);


//Customize The About Title
$wp_customize->add_setting('home_about_title', [
    'type'					=>	'theme_mod',
    'default'				=>	__('Who We Are', 'corporate'),
    'sanitize_callback'		=>	'sanitize_text_field',
]);
$wp_customize->add_control('home_about_title', [
    'label'					=>	__('Home About Title', 'corporate'),
    'section'				=>	'corporate_home_about',
    'type'					=>	'text',
]);

//Customize The About content
$wp_customize->add_setting('home_about_content', [
    'type'					=>	'theme_mod',
    'default'				=>	__('At Acbad, we are committed to delivering exceptional 
                                    technology solutions that drive success and foster growth. 
                                    With years of experience and a team of passionate professionals, 
                                    we provide innovative services tailored to meet the unique needs of our clients.', 
                                    'corporate'),
    'sanitize_callback'		=>	'sanitize_textarea_field',
]);
$wp_customize->add_control('home_about_content', [
    'label'					=>	__('Home About Content', 'corporate'),
    'section'				=>	'corporate_home_about',
    'type'					=>	'textarea',
]);




// Loop through the service cards to add controls dynamically
for ($i = 1; $i <= 5; $i++) {
// Customize the Card Image
$wp_customize->add_setting("about_card_{$i}_image", [
    'type'              => 'theme_mod',
    'default'           => get_template_directory_uri() . "/assets/img/card-{$i}.jpg",
    'sanitize_callback' => 'esc_url_raw',
]);
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "about_card_{$i}_image", [
    'label'       => __("Card {$i} Image", 'corporate'),
    'section'     => 'corporate_home_about',
    'description' => __("Customize the image for Card {$i}.", 'corporate'),
]));

// Customize the Card Title
$wp_customize->add_setting("about_card_{$i}_title", [
    'type'              => 'theme_mod',
    'default'           => __("Stock <br>Trading", 'corporate'),
    'sanitize_callback' => 'wp_kses_post',  // Allow HTML like <br>
]);
$wp_customize->add_control("about_card_{$i}_title", [
    'label'       => __("Card {$i} Title", 'corporate'),
    'section'     => 'corporate_home_about',
    'type'        => 'textarea',
    'description' => __("Customize the title for Card {$i}.", 'corporate'),
]);


}