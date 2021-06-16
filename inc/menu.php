<?php
/**
 * Register navigation menus uses wp_nav_menu.
 */
function afservices_menus(){

    $locations = array(
        'menu-primary'              => esc_html__( 'Primary', 'afservices' ),
        'main_menu'                 => esc_html__( 'Main Menu', 'afservices' ),
        'footer_menu_social_links'  => esc_html__( 'Footer Menu Social Links', 'afservices' ),
    );

    register_nav_menus( $locations );
}
add_action( 'init', 'afservices_menus' );


/**
 * Add class active
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/***
 * @param $atts
 * @return mixed
 * Adds a custom class to each menu item
 */
function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

/***
 * @param $classes
 * @return mixed
 * Add class to last item menu
 */
function add_li_custom_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_custom_class');