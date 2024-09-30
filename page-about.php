<?php 
    get_header();

    $path = get_template_directory_uri();
?>

    <?php 
        $background_color = get_theme_mod('about_hero_bg', '#061B75');
    ?>

<div class="about__hero" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <!-- Hero content section -->
        <div class="about__hero-content">
            <div class="about__hero-content--title" data-aos="fade-down" data-aos-duration="3000">
                <h1><?php echo esc_html(get_theme_mod('about_hero_title', 'About Acbad')); ?> </h1>
            </div>
            <p data-aos="zoom-in" data-aos-duration="1000">
                <?php echo esc_html(get_theme_mod('about_hero_content', 'At Acbad, we are passionate about empowering businesses through cutting-edge 
                                    technology and innovative solutions. With years of experience in the industry, 
                                    we specialize in providing custom software development, IT consulting, 
                                    and cybersecurity services designed to meet the unique needs of our clients. 
                                    Our team of skilled professionals is dedicated to helping businesses thrive in a 
                                    constantly evolving digital world.'));
                ?>
            </p>
        </div>
    
        <!-- Hero mission and vision cards -->
        <div class="about__hero-card">
            <!-- Mission card -->
            <div class="about__hero-card--1" data-aos="fade-right" data-aos-duration="1000">
                <div class="about__hero-card--1-title">
                    <h2><?php echo esc_html(get_theme_mod('mission_card_title', 'Our Mission')); ?></h2>
                </div>
                <p>
                    <?php echo esc_html(get_theme_mod('mission_card_text', ' Our mission is to deliver high-quality, scalable solutions 
                                        that drive success and growth for our clients. We are committed 
                                        to offering services that are not only efficient but also adaptable, 
                                        ensuring that our clients are always ahead in their industries. Whether 
                                        it\'s developing custom software or providing strategic consulting, 
                                        we work closely with our clients to turn their visions into reality.'));
                   ?>
                </p>
            </div>
    
            <!-- Vision card -->
            <div class="about__hero-card--1" data-aos="fade-left" data-aos-duration="2000">
                <div class="about__hero-card--1-title">
                    <h2><?php echo esc_html(get_theme_mod('vision_card_title', 'Our Vision')); ?></h2>
                </div>
                <p>
                    <?php echo esc_html(get_theme_mod('vision_card_text', 'We envision a future where businesses are empowered by technology 
                                    to reach their fullest potential. We strive to be a trusted partner 
                                    for organizations looking to innovate and stay competitive in the 
                                    digital era. Our goal is to continuously push the boundaries of 
                                    technology to create solutions that drive long-term value for our clients.'));
                    ?>
                </p>
            </div>
        </div>
    </div>

    <?php 

    $team_image = get_theme_mod('about_team_bg');

    ?>
    <div class="team">
        <div class="team__image">
            <?php 
            if($team_image) {?>
                <img src="<?php echo esc_url_raw($team_image); ?>" alt="">
            <?php } else { ?>
                <img src="<?php echo $path . '/assets/img/team-about.jpg' ?>" alt="">
            <?php }
            ?>
        </div>
    </div>
    
    <div class="profil">
    <div class="profil__description">
        <div class="profil__description-title" data-aos="fade-down" data-aos-duration="3000">
            <h2><?php echo get_theme_mod('corporate_team_title', __('Meet Our Team', 'corporate')); ?></h2>
        </div>
        <div class="profil__description-content" data-aos="zoom-in" data-aos-duration="1000">
            <p><?php echo get_theme_mod('corporate_team_description', __('Behind every successful project...', 'corporate')); ?></p>
        </div>
    </div>

    <div class="profil__content">
        <!-- Team member 1 -->
        <div class="profil__content-card--1">
            <div class="profil__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
                <h2><?php echo get_theme_mod('corporate_team_member_1_name', 'Amadou Souleymane - Chief Executive Officer (CEO)'); ?></h2>
                <p><?php echo get_theme_mod('corporate_team_member_1_bio', 'Amadou Souleymane is the visionary leader...'); ?></p>
                <div class="profil__content-card--1-content--spans">
                    <span>Phone: <?php echo get_theme_mod('corporate_team_member_1_phone', '123-456-7890'); ?></span> <br>
                    <span><?php echo get_theme_mod('corporate_team_member_1_email', 'ce@acbad.com'); ?></span>
                </div>
            </div>
            <div class="profil__content-card-1-image" data-aos="fade-left" data-aos-duration="1000">
                <img src="<?php echo get_theme_mod('corporate_team_member_1_image', get_template_directory_uri() . '/assets/img/perso-2.jpg'); ?>" alt="">
            </div>
        </div>

        
        <!-- Team member 2 -->
        <div class="profil__content-card--1">
            <div class="profil__content-card-1-image" data-aos="fade-right" data-aos-duration="2000">
                <img src="<?php echo get_theme_mod('corporate_team_member_2_image', get_template_directory_uri() . '/assets/img/perso-1.jpg'); ?>" alt="">
            </div>
            <div class="profil__content-card--1-content" data-aos="fade-left" data-aos-duration="3000">
                <h2><?php echo get_theme_mod('corporate_team_member_2_name', 'Amadou Souleymane - Chief Executive Officer (CEO)'); ?></h2>
                <p><?php echo get_theme_mod('corporate_team_member_2_bio', 'Amadou Souleymane is the visionary leader...'); ?></p>
                <div class="profil__content-card--1-content--spans">
                    <span>Phone: <?php echo get_theme_mod('corporate_team_member_2_phone', '223-456-7890'); ?></span> <br>
                    <span><?php echo get_theme_mod('corporate_team_member_2_email', 'ce@acbad.com'); ?></span>
                </div>
            </div>
           
        </div>

        <!-- Team member 3 -->
        <div class="profil__content-card--1">
            <div class="profil__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
                <h2><?php echo get_theme_mod('corporate_team_member_3_name', 'Amadou Souleymane - Chief Executive Officer (CEO)'); ?></h2>
                <p><?php echo get_theme_mod('corporate_team_member_3_bio', 'Amadou Souleymane is the visionary leader...'); ?></p>
                <div class="profil__content-card--1-content--spans">
                    <span>Phone: <?php echo get_theme_mod('corporate_team_member_3_phone', '323-456-7890'); ?></span> <br>
                    <span><?php echo get_theme_mod('corporate_team_member_3_email', 'ce@acbad.com'); ?></span>
                </div>
            </div>
            <div class="profil__content-card-1-image" data-aos="fade-left" data-aos-duration="3000">
                <img src="<?php echo get_theme_mod('corporate_team_member_3_image', get_template_directory_uri() . '/assets/img/perso-3.jpg'); ?>" alt="">
            </div>
        </div>
    </div>
</div>


    <? get_footer(); ?>