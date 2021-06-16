<?php

/**
 * Enqueue scripts and styles.
 */
function afservices_scripts() {
    wp_enqueue_style( 'style-wp', THEME . '/css/style-wp.css', array(), time() );
    if ( is_front_page() ) :
        wp_enqueue_style( 'slick-css', THEME . '/slick/slick.css', array(), time() );
        wp_enqueue_style( 'slick-theme-css', THEME . '/slick/slick-theme.css', array(), time() );
    endif;
    wp_enqueue_style( 'jPushMenu-css', THEME . '/css/jPushMenu.css', array(), time() );
    wp_enqueue_style( 'jquery-fancybox-min', THEME . '/css/jquery.fancybox.min.css', array(), time() );
    wp_enqueue_style( 'all-min-css', THEME . '/css/all.min.css', array(), time() );
    wp_enqueue_style( 'afservices-style', get_stylesheet_uri(), array(),  time() );
    wp_enqueue_style( 'additional-style', THEME . '/css/additional-style.css', array(), time() );
    //wp_style_add_data( 'afservices-style', 'rtl', 'replace' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', THEME . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-bundle-min-js', THEME . '/js/bootstrap.bundle.min.js', array(), time(), true );
    wp_enqueue_script( 'fontawesome-min-js', THEME . '/js/fontawesome.min.js', array(), time(), true );
    wp_enqueue_script( 'brands-min-js', THEME . '/js/brands.min.js', array(), time(), true );
    wp_enqueue_script( 'jPushMenu-js', THEME . '/js/jPushMenu.js', array(), time(), true );
    wp_enqueue_script( 'jquery-fancybox-min-js', THEME . '/js/jquery.fancybox.min.js', array(), time(), true );
    if ( is_front_page() ) :
        wp_enqueue_script( 'slick-js', THEME . '/slick/slick.js', array(), time(), true );
        wp_enqueue_script( 'slider-js', THEME . '/js/slider.js', array(), time(), true );
    endif;

    wp_enqueue_script( 'afservices-navigation', get_template_directory_uri() . '/js/navigation.js', array(),  time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'afservices_scripts' );
