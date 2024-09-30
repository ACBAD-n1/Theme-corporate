<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('container') ?>>

	<?php wp_body_open(); ?>
    
    <header class="header">
        <nav>

            <div class="nav-container">
                <!-- Brand/Logo -->
                <div class="nav-logo">
					<?php  

					if(has_custom_logo()) {
						the_custom_logo();
					} else { ?>
						   <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/corporation-logo.png' ?>" alt=""></a>
					<?php }
					?>
                </div>

                <!-- Mobile Menu Icon -->
                 <div class="mobile-menu-icon" onclick="toggleMenu();">
                    &#9776; <!--Humburger Icon -->
                 </div>

                 <!-- Navigation Menu -->
           

				  <?php 
					wp_nav_menu( [
						'theme_location'		=>	'menu-1',
						'container'				=>	'ul',
						'menu_class'        	=>  'nav-menu',
					]);
				  ?>

            </div>

        </nav>
    </header>