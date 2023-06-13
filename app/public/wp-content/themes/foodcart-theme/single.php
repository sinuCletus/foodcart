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
            <div>
                <p><?php the_time('F j, y'); ?></p>
            </div>
        </div>
        <div class="about-body">
            <a href="<?php echo site_url('/blog'); ?>"><button class="blog-btn">Blog Home</button></a>
            <p style="font-size: .75em;" class="blog-detail">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F-j-Y') ?> in
             <?php echo get_the_category_list(', ') ?></p>
            <?php the_content(); ?>
        </div>
</section>
   <?php }

    get_footer();

?>