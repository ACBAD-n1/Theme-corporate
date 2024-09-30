<?php 
    get_header();

    $path = get_template_directory_uri();
?>

<div class="portfolio__hero">
        <div class="portfolio__hero-content">
            <!-- Portfolio Hero Title -->
            <div class="portfolio__hero-content--title" data-aos="fade-down" data-aos-duration="3000">
                <h1>Our Portfolio</h1>
            </div>
            <!-- Portfolio Hero Description -->
            <p data-aos="zoom-in" data-aos-duration="1000">
                At Acbad, we take pride in delivering innovative, high-quality solutions tailored 
                to meet the unique needs of our clients. Our diverse portfolio showcases the range 
                of projects we’ve completed across various industries, demonstrating our expertise 
                in custom software development, web design, IT consulting, and more. Explore some 
                of our featured projects below and see how we’ve helped businesses achieve their 
                goals through cutting-edge technology.
            </p>
        </div>
    </div>
    
    <div class="portfolio">
        Portfolio Categories (Web Application, E-commerce, etc.)

        <?php   
            echo do_shortcode('[visual_portfolio id="171"]');
        ?>
        <!-- <div class="portfolio__items">
            <ul>
                <li><a href="#">Web Application</a></li>
                <li><a href="#">E-commerce</a></li>
                <li><a href="#">Cybersecurity</a></li>
                <li><a href="#">LMS</a></li>
                <li><a href="#">IT Consulting</a></li>
                <li><a href="#">WordPress Website</a></li>
            </ul>
        </div> -->
        
        <!-- <div class="portfolio__content" data-aos="zoom-in-up" data-aos-duration="2000">
             Card 1: Web Application 
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="Web Application">
                <h3>Web Application</h3>
            </div>
    
           
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="E-commerce">
                <h3>E-commerce</h3>
            </div>
    
            
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="Cybersecurity">
                <h3>Cybersecurity</h3>
            </div>
    
           
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="LMS">
                <h3>LMS</h3>
            </div>
    
          
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="IT Consulting">
                <h3>IT Consulting</h3>
            </div>
    
            
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="WordPress Website">
                <h3>WordPress Website</h3>
            </div>
    
           
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="Web Application">
                <h3>Web Application</h3>
            </div>
    
           
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="E-commerce">
                <h3>E-commerce</h3>
            </div>
    
            
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="Cybersecurity">
                <h3>Cybersecurity</h3>
            </div>
    
       
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="LMS">
                <h3>LMS</h3>
            </div>
    
            
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="IT Consulting">
                <h3>IT Consulting</h3>
            </div>
    
           
            <div class="portfolio__content-card">
                <img src="https://via.placeholder.com/400x300" alt="WordPress Website">
                <h3>WordPress Website</h3>
            </div>
        </div> -->
    </div> 

    <? get_footer(); ?>