<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?> data-menu="inactive">

    <header>
        <div class='logo-wrapper'>
            <img src="<?php echo get_field('site_logo', 'options')['sizes']['large']; ?>" alt="<?php echo get_field('site_logo', 'options')['alt']; ?>">
        </div>
        <div class="flex-grid menu-wrapper">
            <!-- Call your nav, logo, etc. here -->
            <?php $nav_menu =
                wp_nav_menu(
                    array(
                        'menu' => 'Main Menu',
                        'theme_location'  => 'primary',
                        'sort_column'      => 'menu_order',
                        'container'        => false,
                        'echo'            => '0',
                        'depth'            => 1,
                    )
                ); ?>
            <?php
            $nav_classes = 'primary-menu';
            $nav_id = "primary-nav";
            $cta = get_field('cta_button', 'options');
            include(locate_template('template-parts/nav.php', false, false));
            ?>
            <div class="nav-button"><a href="<?php echo $cta['url']; ?>" class="button"><?php echo $cta['title']; ?></a></div>
            <div id="hamburger" class="hamburger">
                <div class="hamburger__line"></div>
                <div class="hamburger__line"></div>
                <div class="hamburger__line"></div>
            </div>

        </div>
    </header>