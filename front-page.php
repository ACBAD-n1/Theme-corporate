<?php 

    get_header();
    $path = get_template_directory_uri();

    ?>

    <?php 

    $home_hero_image = get_theme_mod('home_hero_image', '');

    if($home_hero_image) {
        $background_image = $home_hero_image;
    } else {
        $background_image = $path . '/assets/img/hero.jpg';
    }

    ?>
    <div class="hero" style="background-image: url(<?php echo $background_image; ?>);">
        <div class="hero__content">
    
            <!-- Title Section with AOS animation for fade down effect -->
            <div class="hero__content-title" data-aos="fade-down" data-aos-duration="1500">
                <h1><?php echo wp_kses_post(get_theme_mod('home_hero_title', 'Empowering Your Business <br> with Innovative Solutions')); ?></h1>
            </div>
    
            <!-- Text Section with AOS animation for zoom in effect -->
            <div class="hero__content-text" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <?php 
                     echo wp_kses_post(get_theme_mod('home_hero_subtitle', ' Leading the Way in Acbad with Cutting-Edge <br>
                                                                         Technology and Expert Services'));
                    ?>
                </p>
            </div>
    
            <!-- Button Section with AOS animation for flip left effect -->
            <div class="hero__content-button" data-aos="flip-left" data-aos-duration="3000">
                <button class="hero__button"><a href="<?php echo esc_url('home_hero_button_url', '#') ?>"><?php echo esc_html(get_theme_mod('home_hero_button', 'Get Started')); ?></a></button>
            </div>
    
        </div>
    </div>
    

    <div class="about">
        <div class="about__content">
            <!-- Section title with smooth animation on scroll for visibility -->
            <div class="about__content-title" data-aos="fade-down" data-aos-duration="1500">
                <h2><?php echo esc_html(get_theme_mod('home_about_title', 'Who We Are')); ?></h2>
            </div>
    
            <!-- Introduction text for the 'About Us' section with engaging animation -->
            <div class="about__content-p" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <?php 
                    echo esc_html(get_theme_mod('home_about_content', 'At Acbad, we are committed to delivering exceptional technology
                                                solutions that drive success and foster growth. With years of experience
                                                and a team of passionate professionals, we provide innovative services
                                                tailored to meet the unique needs of our clients.'));
                    ?>
                </p>
            </div>
        </div>
    
        <div class="about__card">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="about__card-<?php echo esc_attr($i); ?>">
                    <div class="about__card-<?php echo esc_attr($i); ?>--image">
                        <img src="<?php echo esc_url(get_theme_mod("about_card_{$i}_image", get_template_directory_uri() . "/assets/img/card-{$i}.jpg")); ?>" alt="">
                    </div>
                    <div class="about__card-<?php echo esc_attr($i); ?>--title">
                        <hr>
                        <h4><?php echo wp_kses_post(get_theme_mod("about_card_{$i}_title", 'Stock <br>Trading')); ?></h4>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
    

    <div class="home-services">
    <div class="home-services__items">
        <!-- Section title with animation for attention grabbing -->
        <div class="home-services__items-title" data-aos="zoom-out-right" data-aos-duration="1500">
            <h2><?php echo wp_kses_post(get_theme_mod('home_services_title', 'Our <br>Home Services')); ?></h2>
        </div>

        <!-- Loop through each service to display the icon, title, and description -->
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="home-services__items-<?php echo esc_attr($i); ?>" data-aos="fade-right" data-aos-duration="<?php echo esc_attr(1500 + ($i * 500)); ?>">
                <div class="home-services__items-<?php echo esc_attr($i); ?>--icon">
                    <span class="icon"><i class="<?php echo esc_attr(get_theme_mod("home_service_{$i}_icon", 'bi bi-shield-check')); ?>"></i></span>
                </div>
                <hr class="home-services__items-<?php echo esc_attr($i); ?>--separator">
                <h3 class="home-services__items-<?php echo esc_attr($i); ?>--title">
                    <?php echo esc_html(get_theme_mod("home_service_{$i}_title", 'Service Title')); ?>
                </h3>
                <p class="home-services__items-<?php echo esc_attr($i); ?>--description">
                    <?php echo esc_html(get_theme_mod("home_service_{$i}_description", 'Service description text here.')); ?>
                    </p>
                </div>
            <?php endfor; ?>
        </div>                                                                                                      

        <!-- Image representing the services offered -->
        <div class="home-services__image">
            <img src="<?php echo esc_url(get_theme_mod('home_services_image', get_template_directory_uri() . '/assets/img/services.jpg')); ?>" alt="">
        </div>
    </div>

    
    <?php

    $case_study_title = get_theme_mod('case_studies_title', 'Success Stories');
    $case_study_1_title = get_theme_mod('case_study_1_title', 'Case Study 1:');
    $case_study_1_description = get_theme_mod('case_study_1_description', 'Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.');
    $case_study_2_title = get_theme_mod('case_study_2_title', 'Case Study 2:');
    $case_study_2_description = get_theme_mod('case_study_2_description', 'Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.');
    $case_study_3_title = get_theme_mod('case_study_3_title', 'Case Study 3:');
    $case_study_3_description = get_theme_mod('case_study_3_description', 'Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.');
    $case_study_4_title = get_theme_mod('case_study_4_title', 'Case Study 4:');
    $case_study_4_description = get_theme_mod('case_study_4_description', 'Discover how Acbad helped Karim Hamed achieve Building strong personal branding with our innovative solutions.');
    $card_bg_color = get_theme_mod('case_study_card_bg_color', '#ffffff'); // Default white background
    ?>

    <div class="case">
        <div class="case__title" data-aos="fade-down" data-aos-duration="3000">
            <h2><?php echo esc_html($case_study_title); ?></h2>
        </div>

        <div class="case__card" style="background-color: <?php echo esc_attr($card_bg_color); ?>;">
            <div class="case__card-1" data-aos="fade-right" data-aos-duration="1000">
                <div class="case__card-1--title">
                    <h3><?php echo esc_html($case_study_1_title); ?></h3>
                </div>
                <span>Karim Hamed</span>
                <p class="case__card-1"><?php echo esc_html($case_study_1_description); ?></p>
            </div>

            <div class="case__card-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="case__card-2--title">
                    <h3><?php echo esc_html($case_study_2_title); ?></h3>
                </div>
                <span>Karim Hamed</span>
                <p class="case__card-2"><?php echo esc_html($case_study_2_description); ?></p>
            </div>

            <div class="case__card-3" data-aos="fade-right" data-aos-duration="2000">
                <div class="case__card-3--title">
                    <h3><?php echo esc_html($case_study_3_title); ?></h3>
                </div>
                <span>Karim Hamed</span>
                <p class="case__card-3"><?php echo esc_html($case_study_3_description); ?></p>
            </div>

            <div class="case__card-4" data-aos="fade-left" data-aos-duration="3000">
                <div class="case__card-4--title">
                    <h3><?php echo esc_html($case_study_4_title); ?></h3>
                </div>
                <span>Karim Hamed</span>
                <p class="case__card-4"><?php echo esc_html($case_study_4_description); ?></p>
            </div>
        </div>
    </div>

    
<?php
$plan_pricing_title = get_theme_mod('plan_pricing_title', 'Plan and Pricing');
$plan_pricing_description = get_theme_mod('plan_pricing_description', 'A RANGE OF OPPORTUNITIES TO SUIT EVERY CLIENT');
$plan_pricing_button_text = get_theme_mod('plan_pricing_button_text', 'Learn More');
$plan_pricing_button_link = get_theme_mod('plan_pricing_button_link', '#');
?>

<div class="plans">
    <div class="plans__title" data-aos="fade-down" data-aos-duration="1000">
        <h2><?php echo esc_html($plan_pricing_title); ?></h2>
    </div>

    <p class="plans__description" data-aos="zoom-in" data-aos-duration="1000">
        <?php echo esc_html($plan_pricing_description); ?>
    </p>

    <button class="btn__transparent" data-aos="flip-right" data-aos-duration="3000">
        <a href="<?php echo esc_url($plan_pricing_button_link); ?>"><?php echo esc_html($plan_pricing_button_text); ?></a>
    </button>
</div>

    

<?php 
    $team_image = get_theme_mod('team_image', get_template_directory_uri() . '/assets/img/team.jpg');
?>

<div class="team">
    <!-- Team image from customizer -->
    <img src="<?php echo esc_url($team_image); ?>" alt="Team Image" class="team__image">
</div>


 <?php get_footer(); ?>