<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="navbar">
            <a href="<?php echo site_url(); ?>" class="logo"><img src="#" alt="LOGO."></a>
            <nav class="navMain">
            <?php wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                )); ?>
                <!-- <ul class="nav-menu">
                    <li class="nav-item"><a href="<?php echo site_url('/about-us'); ?>" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul> -->
            </nav>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>