<?php get_header(); ?>

    <section aria-label="Newest Photos" class="menu-popular">
        <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-btn="prev">&#8656;</button>
            <button class="carousel-button next" data-carousel-btn="next">&#8658;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <img src="https://source.unsplash.com/kcA-c3f_3FE" alt="food image 1">
                </li>
                <li class="slide">
                    <img src="https://source.unsplash.com/eeqbbemH9-c" alt="food image 2">
                </li>
                <li class="slide">
                    <img src="https://source.unsplash.com/MqT0asuoIcU" alt="food image 3">
                </li>
            </ul>
        </div>
    </section>
    <section class="info" id="info">
        <div class="info-item">
            <h3>Hours</h2>
            <ul>
                <li>M-Th 9am - 7pm</li>
                <li>F, Sa 9am - 9pm</li>
                <li>Sunday closed</li>
            </ul>
            <h3>Options</h3>
                <p>Dine-in: <span>1234 foodcart ave Gravytown, OR 97777</span></p>
                <p>Takeout: <a href="tel:#">111-111-1111</a></p>
                <button class="order"><a href="#">Order Online</a></button>
        </div>
        <iframe class="info-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22510.64929640694!2d-122.60618517244228!3d45.15001644076255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495626d8096ae53%3A0x8eba113efac92d7e!2sMolalla%2C%20OR%2097038!5e0!3m2!1sen!2sus!4v1685585311383!5m2!1sen!2sus" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="accordion" id="menu">
        <div class="accordion-item">
            <div class="accordion-item-header"> 
                <h1>Appetizers</h1>  
            </div>
            <div class="accordion-item-body grid-parent">
                <?php 
                    $appetizers = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'appetizer'
                    ));
                    
                    while($appetizers->have_posts()) {
                        $appetizers->the_post(); 
                ?>
                
                    <div class="grid-item">
                        <div class="inline">
                            <h4><?php the_field('appetizer_name'); ?></h4>
                            <p>$<?php the_field('price'); ?></p>
                        </div>
                        <p><?php the_field('appetizer_description'); ?></p>
                        <p><?php the_field('dietary_info'); ?></p>
                    </div>
                
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header"> 
                <h1>Mains</h1>  
            </div>
            <div class="accordion-item-body grid-parent">
                <?php 
                    $entrees = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'entree'
                    ));
                    
                    while($entrees->have_posts()) {
                        $entrees->the_post(); 
                ?>
                
                    <div class="grid-item">
                        <div class="inline">
                                <h4><?php the_field('entree_name'); ?></h4>
                                <p>$<?php the_field('price'); ?></p>
                        </div>
                        <p><?php the_field('entree_description'); ?></p>
                        <p><?php the_field('dietary_info'); ?></p>
                    </div>
                
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header"> 
                <h1>Beverages</h1>  
            </div>
            <div class="accordion-item-body grid-parent">
                <?php 
                    $beverages = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'beverage'
                    ));
                    
                    while($beverages->have_posts()) {
                        $beverages->the_post(); 
                ?>
                
                    <div class="grid-item">
                        <div class="inline">
                            <h4><?php the_field('beverage_name'); ?></h4>
                            <p>$<?php the_field('price'); ?></p>
                        </div>
                        <p><?php the_field('beverage_description'); ?></p>
                        <p><?php the_field('dietary_info'); ?></p>
                    </div>
                
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header"> 
                <h1>Desert</h1>  
            </div>
            <div class="accordion-item-body grid-parent">
                <?php 
                    $deserts = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'desert'
                    ));
                    
                    while($deserts->have_posts()) {
                        $deserts->the_post(); 
                ?>
                
                    <div class="grid-item">
                        <div class="inline">
                            <h4><?php the_field('desert_name'); ?></h4>
                            <p>$<?php the_field('price'); ?></p>
                        </div>
                        <p><?php the_field('desert_description'); ?></p>
                        <p><?php the_field('dietary_info'); ?></p>
                    </div>
                
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

