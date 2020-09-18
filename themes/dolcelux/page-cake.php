<?php

/*
Template Name: cake for order templates
Template Post Type: page
*/
get_header();?>
<?php get_template_part('form_template/orderCake');?>
<?php get_template_part('form_template/tastingToppings');?>
</section>
<div id="toasts-wrapper" style="position: absolute; top: 0; right: 0; z-index: 9999999999;"></div>
<?php get_sidebar();?>
<script>
    $('.cakes__nav-icon').on('click', function(){
        $(this).toggleClass('active');
        $('.cakes__menu-wrapper').toggleClass('active');
    })
</script>


<main>
    <div class="containter-fluid">
        <section class="cakes__introduction">
            <div class="row no-gutters h-100">
                <div class="col-lg-12 d-flex flex-column align-items-center justify-content-between h-100">
                    <div class="cakes__introduction-title mt-auto">
                        <p>Торт вашей мечты</p>
                    </div>
                    <div class="cakes__introduction-buttons mt-3">
                        <a class="cakes__introduction-order p-3 mr-2" role="button" data-toggle="modal" data-target="#exampleModalLong" href="https://dolcelux.by/cakes/orders/new">ЗАКАЗАТЬ ТОРТ</a>
                        <a class="cakes__introduction-tasting p-3 ml-2" role="button" data-toggle="modal" data-target="#cakesOrder" href="https://dolcelux.by/cakes/tastings/new">ДЕГУСТАЦИЯ</a>
                    </div>
                </div>
            </div>
            <img class="cakes__introduction-cake-left" src="<?php bloginfo('template_directory')?>/assets/img/cakes__introduction-cake-left-8364fbf9d8071895b32ec63e6cdf6af00d9a6501a7b37175bb3826b0539a41ce.png">
            <img class="cakes__introduction-cake-right" src="<?php bloginfo('template_directory')?>/assets/img/cakes__introduction-cake-right-ffb27615a54b31e983587c3e045a8cef6495d039f7270722d79c4a36452ceafb.png">
            <div class="cakes__introduction-categories">
                <ul class="cakes__introduction-categories-list w-100">
                    <?php
                    $categories = get_categories([
                        'child_of' => '2'
                    ]);
                    foreach ($categories as $category){?>
                    <li class="cakes_introduction-categories-item"><a href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name;?></a></li>
                    <?php }?>
                </ul>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes__working-for-you">
            <div class="cakes__line-break-title rounded-circle">РАБОТАЕМ<br>ДЛЯ ВАС</div>
            <div class="row no-gutters pt-3">
                <div class="col-lg-4 col-12 text-center mt-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__working-for-you-tasting-ic-929976a0b7c8af1c85274ab74b54c513c36a95db1cbe5ce7c00ee2578797fc4a.svg">
                    <p class="cakes__working-for-you-plus">БЕСПЛАТНАЯ ДЕГУСТАЦИЯ<br>НАЧИНОК</p>
                </div>
                <div class="col-lg-4 col-12 text-center mt-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__working-for-you-cooking-time-ic-6885513ca097f8a2c544c773699f017dd33af9339850dd217e84a586d8a05fb4.svg">
                    <p class="cakes__working-for-you-plus">СРОК ИЗГОТОВЛЕНИЯ<br>1-3 ДНЯ</p>
                </div>
                <div class="col-lg-4 col-12 text-center mt-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__working-for-you-asap-ic-153ac4885b730de4c02e5159e8b10bd102c42cae60a9ca382d2a30874340433d.svg">
                    <p class="cakes__working-for-you-plus">СРОЧНОЕ ИЗГОТОВЛЕНИЕ<br>ЗА 3 ЧАСА</p>
                </div>
            </div>
            <div class="row no-gutters pb-3">
                <div class="col-lg-2 col-12 text-center offset-lg-3 mt-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__working-for-you-professionals-ic-6e2fb833c89cd935d34cb7270c2cfba0cd79a7c13559bfc205907aa023dd75df.svg">
                    <p class="cakes__working-for-you-plus">ДЛЯ ВАС РАБОТАЕТ КОМАНДА<br>ПРОФЕССИОНАЛОВ</p>
                </div>
                <div class="col-lg-2 col-12 text-center offset-lg-2 mt-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__working-for-you-delivery-ic-6454070a0b2af2dabc91aeb2f27a79a49030ec8a98be13868adfd78364493602.svg">
                    <p class="cakes__working-for-you-plus">БЕСПЛАТНАЯ ДОСТАВКА<br>В ПРЕДЕЛАХ 3КМ ОТ МКАД</p>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes__cakes">
            <div class="cakes__line-break-title rounded-circle">ТОРТЫ</div>
            <div class="row no-gutters pt-3">
                <?php
                $categories = get_categories([
                    'parent' => 2,
                    'type' => 'post',
                    'posts_per_page' => 4
                ]);
                foreach ($categories as $category):
                $args = array(
                    'category_name' => $category->slug,
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $query = new WP_Query;
                $my_posts = $query->query($args);
                $catName = $category-> name;
                foreach ($my_posts as $my_post):
                    if($catName == 'детские'):
                ?>
                <div class="col-lg-3 text-center d-flex justify-content-center ajax-post" data-name="<?php echo $catName?>" data-total="<?php echo get_queried_object()->name?>">
                    <figure class="w-75" onclick="return true">
                        <img class="cakes__cakes-image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($my_post)); ?>">
                        <div class="cakes__cakes-figcaption-wrapper">
                            <figcaption class="cakes__cakes-caption">
                                <p><span class="cakes__cakes-name"><?php echo $my_post->post_title?></span></p>
                                <p class="mt-3"><a data-toggle="modal" class="cakes__cakes-show-link" data-target="#myModal" data-ajax-param="<?php echo $my_post->ID;?>">ПОСМОТРЕТЬ</a></p>
                            </figcaption>
                        </div>
                    </figure>
                </div>
                <?php endif; endforeach; endforeach; wp_reset_postdata();?>
            </div>
            <?php get_template_part('form_template/contentForm');?>
            <div class="row no-gutters mt-5">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo get_category_link(2)?>">ПОСМОТРЕТЬ ВСЕ...</a>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes__fillings">
            <div class="cakes__line-break-title rounded-circle">ТОП<br>НАЧИНОК</div>
            <?php $cakes = carbon_get_post_meta('28','crb_price');?>
            <?php for ($i = 0; $i<=4; $i++){?>
            <div class="row no-gutters pt-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cakes__fillings-wrapper">
                        <div class="cakes__fillings-image-wrapper"><img class="cakes__fillings-image" src="<?php echo $cakes[$i]['crb_image'];?>"></div>
                        <div class="cakes__fillings-description p-4">
                            <p class="text-center"><span class="cakes__filling-name"><?php echo $cakes[$i]['crb_name'];?>"></span></p>
                            <p class="text-center"><span class="cakes__filling-description"><?php echo $cakes[$i]['crb_description'];?>"></span></p>
                            <p class="text-center"><span class="cakes__filling-price"><?php echo $cakes[$i]['crb_price'];?>" руб / кг</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php };
            wp_reset_postdata();?>
            <div class="row no-gutters mt-5">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo get_permalink('28');?>">ПОСМОТРЕТЬ ВСЕ...</a>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes__capcakes">
            <div class="cakes__line-break-title rounded-circle">ПИРОЖНЫЕ,<br>КАПКЕЙКИ</div>
            <div class="row no-gutters">
                <div class="col-lg-8 offset-lg-2">
                    <p class="cakes__capcakes-section-description">
                        Капкейки похожи на тортики, в которых крем не внутри, а снаружи (в классическом варианте).
                        Капкейки удобно есть - они не крошатся, не ломаются, их не надо резать.
                        Они могут быть украшены кремом, декором, цветами, фигурками, аппликациями.
                        Набор капкейков - это идеальное решение для детского праздника или свадьбы.
                    </p>
                    <p class="text-center"><img class="cakes__cupcake-ico" src="<?php bloginfo('template_directory')?>/assets/img/cakes__cupcake-ico-b4658cc8b3ac2a081305d7865fa84b8ab096fd94582fe79013dec2951171588b.svg"></p>
                    <p class="text-center"><span class="cakes__capcakes-min-order">Минимальное колличество для заказа - <b>15 шт</b></span></p>
                    <p class="text-center"><span class="cakes_capcakes-by-photo"><b>Возможно изготовление по вашей фотографии</b></span></p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cakes__capcakes-wrapper">
                        <?php $allCakes = carbon_get_the_post_meta('crb_all-cakes');
                        foreach ($allCakes as $allCake):?>
                        <div class="cakes__capcake-wrapper mt-4">
                            <img src="<?php echo $allCake['crb_img']?>">
                            <span class="cakes__capcake-name"><?php echo $allCake['crb_title']?></span>
                        </div>
                        <?php
                        wp_reset_postdata();
                        endforeach;?>
                    </div>
                </div>
            </div>
        </section>
        <section class="cakes__order-and-tasting">
            <img class="cakes__order-and-tasting-logo" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo.png">
            <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory')?>/assets/img/cakes__order-and-tasting-border.png">
            <div class="cakes__order-and-tasting-buttons-wrapper">
                <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#exampleModalLong" href="https://dolcelux.by/cakes/orders/new">ЗАКАЗАТЬ ТОРТ</a> <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#cakesOrder" href="https://dolcelux.by/cakes/tastings/new">ДЕГУСТАЦИЯ</a>
            </div>
        </section>
        <?php get_footer();?>
