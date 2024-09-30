<?php 

// Add Section for Team
$wp_customize->add_section('corporate_team_section', array(
    'title'       => __('Team Section', 'corporate'),
    'priority'    => 3,
    'panel'       => 'corporate_about_panel',
));

// Team Title
$wp_customize->add_setting('corporate_team_title', array(
    'default'           => __('Meet Our Team', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('corporate_team_title', array(
    'label'    => __('Team Section Title', 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'text',
));

// Team Description
$wp_customize->add_setting('corporate_team_description', array(
    'default'           => __('Behind every successful project is a team of dedicated professionals...', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('corporate_team_description', array(
    'label'    => __('Team Description', 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'textarea',
));

// Team Member 1
corporate_add_team_member_customizer($wp_customize, 1, 'Amadou Souleymane - Chief Executive Officer (CEO)', 'Amadou Souleymane is the visionary leader and founder of Acbad...', '123-456-7890', 'ce@acbad.com', get_template_directory_uri() . '/assets/img/perso-2.jpg');

// Team Member 2
corporate_add_team_member_customizer($wp_customize, 2, 'Mariama Diallo - Chief Technology Officer (CTO)', 'Mariama Diallo is Acbad\'s Chief Technology Officer...', '153-956-8394', 'cto@acbad.com', get_template_directory_uri() . '/assets/img/perso-1.jpg');

// Team Member 3
corporate_add_team_member_customizer($wp_customize, 3, 'Ibrahim Harouna - Chief Operations Officer (COO)', 'Ibrahim Harouna is the Chief Operations Officer at Acbad...', '093-786-8765', 'coo@acbad.com', get_template_directory_uri() . '/assets/img/perso-3.jpg');


function corporate_add_team_member_customizer($wp_customize, $member_number, $default_name, $default_bio, $default_phone, $default_email, $default_image) {
// Name
$wp_customize->add_setting("corporate_team_member_{$member_number}_name", array(
    'default'           => __($default_name, 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control("corporate_team_member_{$member_number}_name", array(
    'label'    => __("Team Member {$member_number} Name", 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'text',
));

// Bio
$wp_customize->add_setting("corporate_team_member_{$member_number}_bio", array(
    'default'           => __($default_bio, 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control("corporate_team_member_{$member_number}_bio", array(
    'label'    => __("Team Member {$member_number} Bio", 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'textarea',
));

// Phone
$wp_customize->add_setting("corporate_team_member_{$member_number}_phone", array(
    'default'           => $default_phone,
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control("corporate_team_member_{$member_number}_phone", array(
    'label'    => __("Team Member {$member_number} Phone", 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'text',
));

// Email
$wp_customize->add_setting("corporate_team_member_{$member_number}_email", array(
    'default'           => $default_email,
    'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control("corporate_team_member_{$member_number}_email", array(
    'label'    => __("Team Member {$member_number} Email", 'corporate'),
    'section'  => 'corporate_team_section',
    'type'     => 'email',
));

// Image
$wp_customize->add_setting("corporate_team_member_{$member_number}_image", array(
    'default'           => $default_image,
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "corporate_team_member_{$member_number}_image", array(
    'label'    => __("Team Member {$member_number} Image", 'corporate'),
    'section'  => 'corporate_team_section',
    'settings' => "corporate_team_member_{$member_number}_image",
)));
}