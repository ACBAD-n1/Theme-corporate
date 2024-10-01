<?php
/**
 * corporate Theme Customizer
 *
 * @package corporate
 */


function corporate_customize_register( $wp_customize ) {
	//Include The base
	require get_template_directory() . '/inc/customizer/base.php';

	/**
	 * Add A NEW panel for custominf the home page fully
	 */
	$wp_customize->add_panel('corporate_home_panel', [
		'title'					=>	__('Corporate Home Page', 'corporate'),
		'priority'				=>	10,
		'capability'			=>	'edit_theme_options',
	]);

	/**
	 * Add A NEW panel for custominf the about page fully
	 */
	$wp_customize->add_panel('corporate_about_panel', [
		'title'					=>	__('Corporate About Page', 'corporate'),
		'priority'				=>	11,
		'capability'			=>	'edit_theme_options',
	]);


	/**
	 * Add A NEW panel for custominf the Service page fully
	 */
	$wp_customize->add_panel('corporate_service_panel', [
		'title'					=>	__('Corporate Service Page', 'corporate'),
		'priority'				=>	12,
		'capability'			=>	'edit_theme_options',
	]);


	//Include The Hero customizer
	require get_template_directory() . '/inc/customizer/home/hero.php';

	//Include The Home About Customizer
	require get_template_directory() . '/inc/customizer/home/about.php';

	//Include The Services Customizer
	require get_template_directory() . '/inc/customizer/home/services.php';

	//Include The Case Customizer
	require get_template_directory() . '/inc/customizer/home/case.php';

	//Include The Plan Customizer
	require get_template_directory() . '/inc/customizer/home/plan.php';

	//Include The contact Customizer
	require get_template_directory() . '/inc/customizer/contact.php';

	//Include The contact Customizer
	require get_template_directory() . '/inc/customizer/footer.php';

	//Include The About page Hero
	require get_template_directory() . '/inc/customizer/about/about-hero.php';

	//Include The About Team Image
	require get_template_directory() . '/inc/customizer/about/about-team.php';

	//Include The About Profil
	require get_template_directory() . '/inc/customizer/about/about-profil.php';

	//Include The Service Hero 
	require get_template_directory() . '/inc/customizer/services/hero.php' ;

	//Include The Service Items 
	require get_template_directory() . '/inc/customizer/services/services-items.php';

	//Include The Page Hero
	require get_template_directory() . '/inc/customizer/page/page-hero.php';

	
	
}





//include All blog informations customizer
require get_template_directory() . '/inc/customizer/blog.php';