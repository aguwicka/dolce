<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :

        // запускаем цикл
        while( have_posts() ): the_post();?>

            <div class="col-xl-4 cakes-categories__cake-wrapper">
                <figure class="w-75" onclick="return true">
                    <img class="cakes__cakes-image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>">
                    <div class="cakes__cakes-figcaption-wrapper">
                        <figcaption class="cakes__cakes-caption">
                            <p><span class="cakes__cakes-name"><?php the_title();?></span></p>
                            <p class="mt-3"><a data-toggle="modal" class="cakes__cakes-show-link" data-target="#modal-<?php echo get_the_ID($recent)?>">ПОСМОТРЕТЬ</a></p>
                        </figcaption>
                    </div>
                </figure>
            </div>
            <?php get_template_part('form_template/contentForm');?>

        <?php endwhile;

    endif;
    die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
