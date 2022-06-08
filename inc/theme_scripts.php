<?php
/**
 * Enqueue scripts and styles. This is where you'll call your scripts and styles.
 */

wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );
/**
 * Everything below should stay the same.
 */

//enqueue E47 brand fonts and styles for login page
function element_47_admin_scripts() {

    // Version CSS file in a theme
    wp_enqueue_style(
        'e47-style',
        get_stylesheet_directory_uri() . '/assets/css/admin-styles.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/admin-styles.css' )
    );
}
add_action( 'login_enqueue_scripts', 'element_47_admin_scripts' );

add_action( 'admin_head', 'element_47_admin_scripts' );

function element_47_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700', false );
}
add_action( 'login_enqueue_scripts', 'element_47_google_fonts');
