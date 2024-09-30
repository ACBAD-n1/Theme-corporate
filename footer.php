<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate
 */

?>

<?php

    $contact_title       = get_theme_mod('contact_section_title', __('Let\'s Connect', 'corporate'));
    $contact_description = get_theme_mod('contact_section_description', __('I\'m a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.', 'corporate'));
    ?>

    <div id="contact" class="contact">
        <!-- Contact section description -->
        <div class="contact__description" data-aos="fade-right" data-aos-duration="2000">
            <div class="contact__description-title">
                <h2><?php echo esc_html($contact_title); ?></h2>
            </div>
            <p class="connect__description-content">
                <?php echo esc_html($contact_description); ?>
            </p>
        </div>

        <!-- Contact form placeholder -->
        <div class="contact__form" data-aos="fade-left" data-aos-duration="3000">
            <!-- You can integrate a form here -->
           <?php 
            echo do_shortcode('[wpforms id="36"]');
           ?>
        </div>
    </div>

    
    <div class="footer">
        <!-- Footer copyright section -->
        <div class="footer__copy">
            <p>
                <?php echo esc_html(get_theme_mod('footer_copyright_text', '© 2025 by Adam Boureima')); ?> 
            </p>
        </div>
    </div>
    
    
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/scripts.js"></script>

<?php wp_footer(); ?>
</html>