<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function true_customizer_init($wp_customize){

    $wp_customize->add_section(
        'example_section_one',
        array(
            'title'    => 'Мои настройки',
            'priority' => 11,
        )
    );

    //facebook
    $wp_customize->add_setting(
        'facebook',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(
        'facebook',
        array(
            'label'   => 'facebook',
            'section' => 'example_section_one',
            'type'    => 'text',
        )
    );

    //insta
    $wp_customize->add_setting(
        'insta',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(
        'insta',
        array(
            'label'   => 'insta',
            'section' => 'example_section_one',
            'type'    => 'text',
        )
    );

    //youtube
    $wp_customize->add_setting(
        'youtube',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(
        'youtube',
        array(
            'label'   => 'youtube',
            'section' => 'example_section_one',
            'type'    => 'text',
        )
    );

    //Описание в подвале
    $wp_customize->add_setting(
        'footer',
        array(
            'default' => ''
        )
    );

    $wp_customize->add_control(
        'footer',
        array(
            'label'   => 'footer',
            'section' => 'example_section_one',
            'type'    => 'text',
        )
    );
}


add_action('customize_register', 'true_customizer_init');