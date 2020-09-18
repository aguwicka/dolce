<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'dolcelux_styles' );
function dolcelux_styles() {
    if (!is_front_page()){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array() , null, 'all');
    }else
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', array() , null, 'all');
}

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null);
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'dolcelux_scripts' );
function dolcelux_scripts() {
    wp_enqueue_script('jsapp' , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true);
}

/*function true_loadmore_scripts() {
    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/assets/loadmore.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );*/

#thunbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

