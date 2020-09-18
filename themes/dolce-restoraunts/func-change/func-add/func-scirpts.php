<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'dolcelux_styles' );
function dolcelux_styles() {
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', array() , null);
    wp_enqueue_style('fancycss', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array() , null);
}

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null);
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'dolcelux_scripts' );
function dolcelux_scripts() {
    wp_enqueue_script('jsapp' , get_stylesheet_directory_uri() . '/assets/js/vendors.js', array(), null, true);
    wp_enqueue_script('app' , get_stylesheet_directory_uri() . '/assets/js/app.js', array(), null, true);
    wp_enqueue_script('fancy' , get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
}


#thunbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

