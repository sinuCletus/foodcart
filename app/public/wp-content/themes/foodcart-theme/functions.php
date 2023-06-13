<?php 

    function foodcart_files() {
        wp_enqueue_script('main-foodcart-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Sansita:wght@400;700&family=Tsukimi+Rounded:wght@400;700&display=swap');
        wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
        wp_enqueue_style('foodcart_main_styles', get_theme_file_uri('/css/index.css'));
    }

    add_action('wp_enqueue_scripts', 'foodcart_files');

    function foodcart_features() {
        add_theme_support('title-tag');
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    }

    add_action('after_setup_theme', 'foodcart_features');



    add_filter('ai1wm_exclude_themes_from_export', function ($exclude_filters) {
        $exclude_filters[] = 'foodcart-theme/node_modules';
        return $exclude_filters;
      });
?>