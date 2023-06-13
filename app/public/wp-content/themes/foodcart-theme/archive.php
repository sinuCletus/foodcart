<?php 
    get_header();
?>

<section id="about">
        <div class="about" style="background: linear-gradient(hsla(var(--dark-primary) / .5), 
        hsla(var(--dark-primary) / .5)) , 
        url(<?php echo get_theme_file_uri('/images/foodtruck.jpg'); ?>);
        background-size: cover; background-position: center;">
            <h1><?php the_archive_title(); ?></h1>
            <div>
                <p><?php the_archive_description(); ?></p>
            </div>
        </div>
        <div class="about-body">
            <?php while(have_posts()) {
                the_post(); ?>
            <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="blog-detail">Posted by <?php the_author_posts_link(); ?> on 
            <?php the_time('F-j-Y') ?> in <?php echo get_the_category_list(', '); ?></p>
            <?php the_excerpt(); ?>
            <p class="blog-btn"><a href="<?php the_permalink(); ?>">Continue reading...</a></p>
           <?php  } ?>
        </div>
        <div class="about-pagination">
        <?php echo paginate_links(); ?>
        </div>
</section>

<?php 
    get_footer();
?>