<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>

<section id="about">
        <div class="about" style="background: linear-gradient(hsla(var(--dark-primary) / .5), 
        hsla(var(--dark-primary) / .5)) , 
        url(<?php echo get_theme_file_uri('/images/foodtruck.jpg'); ?>);
        background-size: cover; background-position: center;">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="about-body">
            <?php the_content(); ?>
        </div>
</section>

   <?php }

    get_footer();

?>