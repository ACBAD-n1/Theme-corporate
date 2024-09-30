<?php 
    get_header();

    $path = get_template_directory_uri();
?>

    <div class="services__hero">
        <div class="services__hero-content">
            <div class="services__hero-content--title" data-aos="fade-down" data-aos-duration="3000">
                <h1><?php echo get_theme_mod('corporate_services_title', __('Our Services', 'corporate')); ?></h1>
            </div>
            <p data-aos="zoom-in" data-aos-duration="1000">
                <?php echo get_theme_mod('corporate_services_description', __('At Acbad, we offer a range of innovative and customized technology solutions to help businesses grow...', 'corporate')); ?>
            </p>
        </div>
    </div>

    
    <div class="services">
        <div class="services__description">
            <div class="services__description-title" data-aos="fade-down" data-aos-duration="3000">
                <h2><?php echo esc_html(get_theme_mod('services_title', 'Our Expertise')); ?></h2>
            </div>
            <div class="services__description-content" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <?php echo esc_html(get_theme_mod('services_text', 'Behind every successful project is a team of dedicated professionals who are passionate about delivering results. At Acbad, our team is made up of seasoned experts with extensive experience in software development, IT consulting, cybersecurity, and project management. Together, we bring a blend of technical expertise and business insight to every project we undertake.'));
                    ?>
                </p>
            </div>
        </div>
    
        <div class="services__content">
    <!-- Card 1: Custom Software Development -->
    <div class="services__content-card--1">
        <div class="services__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_1', 'bi bi-app-indicator')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_1', 'Custom Software Development')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_1', 'We specialize in building high-performance, scalable, 
                and secure custom software solutions tailored to meet the specific needs of your 
                business. Whether you\'re looking for a web application, mobile app, or enterprise 
                software, our experienced team will deliver a product that aligns perfectly with your objectives.'));
                ?>   
            </p>
        </div>
        <div class="services__content-card-1-image" data-aos="fade-left" data-aos-duration="1000">
            <?php 
                $corporate_service_image_1 = get_theme_mod('corporate_service_image_1');
                if ($corporate_service_image_1) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_1) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/software.jpg') . '" alt="">';
                }
            ?>
        </div>
    </div>

    <!-- Card 2: IT Consulting -->
    <div class="services__content-card--1">
        <div class="services__content-card-1-image" data-aos="fade-right" data-aos-duration="1000">
            <?php 
                $corporate_service_image_2 = get_theme_mod('corporate_service_image_2');
                if ($corporate_service_image_2) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_2) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/consultent.jpg') . '" alt="">';
                }
            ?>
        </div>
        <div class="services__content-card--1-content" data-aos="fade-left" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_2', 'bi bi-briefcase-fill')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_2', 'IT Consulting')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_2', 'Navigating the complexities of technology can be challenging. Our IT consulting services are designed to help you align your technology strategy with your business goals. We assess your current infrastructure, recommend improvements, and create a roadmap for future growth, ensuring that you’re always ahead of the curve.'));
                ?>
            </p>
        </div>
    </div>

    <!-- Card 3: Cybersecurity Solutions -->
    <div class="services__content-card--1">
        <div class="services__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_3', 'bi bi-shield-check')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_3', 'Cybersecurity Solutions')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_3', 'In an era where cybersecurity is critical, we provide advanced security solutions to protect your business from cyber threats. Our comprehensive services help safeguard your data, systems, and networks, ensuring that your business remains secure and compliant with industry regulations.'));
                ?>
            </p>
        </div>
        <div class="services__content-card-1-image" data-aos="fade-left" data-aos-duration="1000">
            <?php 
                $corporate_service_image_3 = get_theme_mod('corporate_service_image_3');
                if ($corporate_service_image_3) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_3) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/security.jpg') . '" alt="">';
                }
            ?>
        </div>
    </div>

    <!-- Card 4: Web Development & Design -->
    <div class="services__content-card--1">
        <div class="services__content-card-1-image" data-aos="fade-right" data-aos-duration="1000">
            <?php 
                $corporate_service_image_4 = get_theme_mod('corporate_service_image_4');
                if ($corporate_service_image_4) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_4) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/design.jpg') . '" alt="">';
                }
            ?>
        </div>
        <div class="services__content-card--1-content" data-aos="fade-left" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_4', 'bi bi-code-slash')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_4', 'Web Development & Design')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_4', 'Your website is often the first interaction customers have with your brand. We design and develop beautiful, responsive websites that provide a seamless user experience on any device. From e-commerce to corporate websites, we create solutions that are both visually stunning and highly functional.'));
                ?>
            </p>
        </div>
    </div>

    <!-- Card 5: Cloud Solutions -->
    <div class="services__content-card--1">
        <div class="services__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_5', 'bi bi-cloud-fog2-fill')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_5', 'Cloud Solutions')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_5', 'We help businesses harness the full potential of cloud technology to improve scalability, flexibility, and efficiency. Whether you’re moving to the cloud for the first time or optimizing your existing infrastructure, we provide solutions that meet your specific needs.'));
                ?>
            </p>
        </div>
        <div class="services__content-card-1-image" data-aos="fade-left" data-aos-duration="1000">
            <?php 
                $corporate_service_image_5 = get_theme_mod('corporate_service_image_5');
                if ($corporate_service_image_5) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_5) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/cloud.png') . '" alt="">';
                }
            ?>
        </div>
    </div>

    <!-- Card 6: Managed IT Services -->
    <div class="services__content-card--1">
        <div class="services__content-card-1-image" data-aos="fade-right" data-aos-duration="1000">
            <?php 
                $corporate_service_image_6 = get_theme_mod('corporate_service_image_6');
                if ($corporate_service_image_6) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_6) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/manage.jpg') . '" alt="">';
                }
            ?>
        </div>
        <div class="services__content-card--1-content" data-aos="fade-left" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_6', 'bi bi-kanban-fill')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_6', 'Managed IT Services')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_6', 'Our managed IT services provide you with the peace of mind that your IT infrastructure is in expert hands. From proactive monitoring to technical support, we ensure that your systems are running smoothly, allowing you to focus on what you do best—growing your business.'));
                ?>
            </p>
        </div>
    </div>

    <!-- Card 7: Digital Marketing Services -->
    <div class="services__content-card--1">
        <div class="services__content-card--1-content" data-aos="fade-right" data-aos-duration="3000">
            <span><i class="<?php echo esc_html(get_theme_mod('corporate_service_icon_7', 'bi bi-globe-europe-africa')); ?>"></i></span>
            <h2><?php echo esc_html(get_theme_mod('corporate_service_title_7', 'Digital Marketing Services')); ?></h2>
            <p>
                <?php 
                echo esc_html(get_theme_mod('corporate_service_description_7', 'We provide a full suite of digital marketing services to help you reach your target audience, generate leads, and grow your brand online. From SEO and PPC to content marketing and social media management, we craft strategies that deliver measurable results.'));
                ?>
            </p>
        </div>
        <div class="services__content-card-1-image" data-aos="fade-left" data-aos-duration="1000">
            <?php 
                $corporate_service_image_7 = get_theme_mod('corporate_service_image_7');
                if ($corporate_service_image_7) {
                    echo '<img src="' . esc_url_raw($corporate_service_image_7) . '" alt="">';
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/services/Marketing.jpg') . '" alt="">';
                }
            ?>
            </div>
        </div>
    </div>

    </div>

    <? get_footer(); ?>