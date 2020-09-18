<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

#carbon about us
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-dolcelux.php'])// only show our new fields on pages
    ->add_fields( array(
        Field::make( 'complex', 'crb_work', 'Работаем для Вас - блок' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_title', 'Описание' ),
            ) ),
        Field::make( 'complex', 'crb_reviews', 'Отзывы' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Изображение' )
                ->set_value_type('url'),
                Field::make( 'text', 'crb_name', 'Имя' ),
                Field::make( 'text', 'crb_profession', 'Профессия' ),
                Field::make( 'text', 'crb_review', 'Отзыв' ),
            ) ),
    ) );

#carbon tasting
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-tasting.php'])
    ->add_fields( array(
        Field::make( 'text', 'crb_description', 'Описание' ),
        Field::make( 'text', 'crb_time', 'Время работы' )
    ));

#carbon tasting toppings
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-price.php'])// only show our new fields on pages
    ->add_fields( array(
        Field::make( 'complex', 'crb_price', 'Начинки' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Изображение' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_name', 'Название' ),
                Field::make( 'text', 'crb_description', 'Описание' ),
                Field::make( 'text', 'crb_price', 'Цена за 1 кг' ),
            ) ),
    ) );

#carbong cake
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-cake.php'])// only show our new fields on pages
    ->add_fields( array(
        Field::make( 'complex', 'crb_all-cakes', 'cakes' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_img', 'Изображение' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'Название' ),
            ) ),
    ) );

#orderCake
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-cakeOrder.php'])
    ->add_fields( array(
        Field::make( 'rich_text', 'crb_delivery', 'Блок доставка' )
    ));

#Glogal settings
Container::make( 'theme_options', __( 'Глобальные настройки' ) )
    ->add_fields( array(
        Field::make( 'text', 'crb_tagline', __( 'Описание подвала сайта' ) ),
        Field::make( 'text', 'crb_email', __( 'Email сайта' ) ),
        Field::make( 'complex', 'crb_phones', 'Телефоны компании' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_phone', 'Номер телефона' ),
            ) )
    ) );