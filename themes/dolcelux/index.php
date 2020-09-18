<?php
/*
Template Name: main
Template Post Type: page
*/
get_header();?>

<div class="container-fluid">
    <main class='sites'>
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo get_permalink('72')?>">
                    <div class="row sites__cakes">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__cakes-logo-a35b651d80650a740547d83aa0deb6cfb8fa5cae0b5e9e6f4a8547b97173dc6c.png?>" /></p>
                            <p><span class='sites__cakes-title'>ТОРТЫ</span></p>
                            <p><span class='sites__cakes-description'>на заказ</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__coffee">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__coffee-logo-e2846efd0507a10e74ed7b97853dc65448225b6dd37846e2e1d450068ea29692.png" /></p>
                            <p><span class='sites__coffee-title'>КОФЕ</span></p>
                            <p><span class='sites__coffee-description'>собственная обжарка</span></p>
                        </div>
                    </div>
                </a>          </div>
        </div>
        <div class="row" data-toggle="modal" data-target="#cakesOrder">
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__cafes">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__cafes-logo-f02ccf4e18d9f1b89188bc27a05fe7e873100d6c1f06f929182e74ef9f62e103.png" /></p>
                            <p><span class='sites__cafes-title'>НАШИ КАФЕ</span></p>
                            <p><span class='sites__cafes-description'>бронь столика, меню</span></p>
                        </div>
                    </div>
                </a>          </div>
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__catering">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__catering-logo-3ae37df866a81e7d7474b0de84a308e6545a370af7b226da3e31afa8a871e303.png" /></p>
                            <p><span class='sites__catering-title'>КЕЙТЕРИНГ</span></p>
                            <p><span class='sites__catering-description'>со вкусом</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="modal fade" id="cakesOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content rounded-0">
                        <div class="modal-header cake-orders__header border-0">
                            <button type="button" class="cakes-orders__close-btn" data-dismiss="modal" aria-label="Close" style="border:none;background: transparent;">
                                <span aria-hidden="true"><img class="cakes-orders__close-ic" src="<?php bloginfo('template_directory')?>/assets/img/cakes__close-ic.svg"></span>
                            </button>
                            <p class="mt-3"><span class="cakes-orders__title" style="color: #47152B;font-size: 1.5rem;">Выберите Ресторан</span></p>
                            <p class="mt-3 text-center">
          <span class="cakes-orders__description">
          </span>
                            </p>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <?php
                                    // переключаемся на блог 5
                                    switch_to_blog( 2 );

                                    // Выводим данные блога на который переключились
                                    // Получаем посты с блога 5
                                    $myposts = get_pages([
                                            'parent'=>$pages,
                                            'hierarchical' => 0
                                    ]);
                                    foreach( $myposts as $post ){?>
                                        <div style="color: #2B1212;font-size: 1.1rem;font-weight: 500;">
                                            <a style="color: #2B1212;" href="<?php the_permalink($post);?>"><?php echo $post->post_title;?></a>
                                            <div><?php the_meta($post->ID)?></div>
                                        </div>
                                    <?php }
                                    wp_reset_postdata();

                                    // возвращемся к текущему блогу
                                    restore_current_blog();

                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 cakes-orders__footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="sites__logo" src="<?php bloginfo('template_directory')?>/assets/img/sites__logo-d53ff6209cff091370090fef85777926ff1a119bcea72249e67964626ebb06da.png" />
    </main>
</div>

<?php wp_footer();?>
</body></html>