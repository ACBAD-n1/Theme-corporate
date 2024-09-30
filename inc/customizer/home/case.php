<?php 
// Add a new section for customizing the Success Stories section
$wp_customize->add_section('corporate_case_studies', [
    'title'       => __('Customize Success Stories Section', 'corporate'),
    'priority'    => 4,
    'capability'  => 'edit_theme_options',
    'panel'       => 'corporate_home_panel',
]);

// Add setting for Success Stories section title
$wp_customize->add_setting('case_studies_title', [
    'type'              => 'theme_mod',
    'default'           => __('Success Stories', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('case_studies_title', [
    'label'   => __('Section Title', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'text',
]);

// Add setting and controls for Case Study 1
$wp_customize->add_setting('case_study_1_title', [
    'type'              => 'theme_mod',
    'default'           => __('Case Study 1:', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('case_study_1_title', [
    'label'   => __('Case Study 1 Title', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'text',
]);

$wp_customize->add_setting('case_study_1_description', [
    'type'              => 'theme_mod',
    'default'           => __('Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('case_study_1_description', [
    'label'   => __('Case Study 1 Description', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'textarea',
]);

// Add setting and controls for Case Study 2
$wp_customize->add_setting('case_study_2_title', [
    'type'              => 'theme_mod',
    'default'           => __('Case Study 2:', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('case_study_2_title', [
    'label'   => __('Case Study 2 Title', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'text',
]);

$wp_customize->add_setting('case_study_2_description', [
    'type'              => 'theme_mod',
    'default'           => __('Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('case_study_2_description', [
    'label'   => __('Case Study 2 Description', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'textarea',
]);

// Add setting and controls for Case Study 3
$wp_customize->add_setting('case_study_3_title', [
    'type'              => 'theme_mod',
    'default'           => __('Case Study 3:', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('case_study_3_title', [
    'label'   => __('Case Study 3 Title', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'text',
]);

$wp_customize->add_setting('case_study_3_description', [
    'type'              => 'theme_mod',
    'default'           => __('Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('case_study_3_description', [
    'label'   => __('Case Study 3 Description', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'textarea',
]);

// Add setting and controls for Case Study 4
$wp_customize->add_setting('case_study_4_title', [
    'type'              => 'theme_mod',
    'default'           => __('Case Study 4:', 'corporate'),
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('case_study_4_title', [
    'label'   => __('Case Study 4 Title', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'text',
]);

$wp_customize->add_setting('case_study_4_description', [
    'type'              => 'theme_mod',
    'default'           => __('Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.', 'corporate'),
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('case_study_4_description', [
    'label'   => __('Case Study 4 Description', 'corporate'),
    'section' => 'corporate_case_studies',
    'type'    => 'textarea',
]);

// Add setting for the background color of the case study cards
$wp_customize->add_setting('case_study_card_bg_color', [
    'type'              => 'theme_mod',
    'default'           => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'case_study_card_bg_color', [
    'label'       => __('Case Study Card Background Color', 'corporate'),
    'section'     => 'corporate_case_studies',
    'description' => __('Choose a background color for the case study cards.', 'corporate'),
]));
