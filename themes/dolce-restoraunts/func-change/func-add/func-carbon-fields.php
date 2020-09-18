<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['restourant.php'])// only show our new fields on pages
    ->add_fields( array(
        Field::make( 'image', 'crb_loboback', 'Изображение обоев' )->set_value_type('url'),
        Field::make( 'image', 'crb_logomobile', 'Лого для мобильной версии' )->set_value_type('url'),
        Field::make( 'image', 'crb_logo', 'Лого' )->set_value_type('url'),
        Field::make( 'text', 'crb_logowrite', 'Лого текстом' ),
        Field::make( 'text', 'crb_logodesc', 'Описание ресторана' ),
        Field::make('complex', 'crb_sort', 'Блюда')
            ->set_layout('tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'text', 'crb_eatsort', 'Категория блюд' ),
            ) ),
        Field::make( 'complex', 'crb_header_info', 'Информация о ресторане' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_number', 'Количество' ),
                Field::make( 'text', 'crb_info', 'Описание' ),
            ) ),
        Field::make( 'text', 'crb_keach', 'Описание блока Кухня' ),
        Field::make( 'complex', 'crb_keach_card', 'Карточка товара' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_keach_img', 'Изображение блюда' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_keach_name', 'Название блюда' ),
                Field::make( 'text', 'crb_keach_price', 'Стоимость блюда' ),
                Field::make('text', 'crb_keach_select', 'Категория блюда')
            ) ),
        Field::make( 'rich_text', 'crb_about', 'Блок о нас' ),
        Field::make( 'text', 'crb_map', 'Google карта' )
    ) );
#posts
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
        Field::make( 'text', 'crb_time', 'Время проведения' ),
    ));
