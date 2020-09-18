<?php
if (!defined('ABSPATH')) {
    exit;
}
add_action( 'after_setup_theme', function () {
    add_theme_support( 'menus' );
    register_nav_menus( [
        'header-menu' => 'Главное меню',
    ] );
} );

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'header-menu' ) {
        // add the desired attributes:
        $atts['class'] = 'cakes__menu-item';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );