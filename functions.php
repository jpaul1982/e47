<?php
/**
 * Element 47 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Element_47
 */

require get_template_directory() . '/inc/theme_setup.php';
require get_template_directory() . '/inc/theme_wp_cleanup.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/theme_scripts.php';

// fontawesome
wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/fontawesome.min.css');
wp_enqueue_style('font-awesome-brands', get_template_directory_uri() . '/assets/fontawesome/css/brands.min.css');
wp_enqueue_style('font-awesome-solid', get_template_directory_uri() . '/assets/fontawesome/css/solid.min.css');

// scripts
wp_register_script( 'script', get_template_directory_uri() . '/src/js/scripts.js', array('jquery'), '1.0.0', true );
wp_enqueue_script('script');