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
        Field::make( 'complex', 'crb_work', 'work_text' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_title', 'Title' ),
            ) ),
        Field::make( 'complex', 'crb_reviews', 'reviews' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Image' )
                ->set_value_type('url'),
                Field::make( 'text', 'crb_name', 'name' ),
                Field::make( 'text', 'crb_profession', 'profession' ),
                Field::make( 'text', 'crb_review', 'review' ),
            ) ),
    ) );

#carbon tasting
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-tasting.php'])
    ->add_fields( array(
        Field::make( 'text', 'crb_description', 'description' ),
        Field::make( 'text', 'crb_time', 'time_work' )
    ));

#carbon tasting toppings
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['page-price.php'])// only show our new fields on pages
    ->add_fields( array(
        Field::make( 'complex', 'crb_price', 'price' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Image' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_name', 'name' ),
                Field::make( 'text', 'crb_description', 'description' ),
                Field::make( 'text', 'crb_price', 'price' ),
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
                Field::make( 'image', 'crb_img', 'Image' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'name' ),
            ) ),
    ) );