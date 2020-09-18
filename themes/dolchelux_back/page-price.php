<?php

/*
Template Name: price templates
Template Post Type: page
*/
get_header();?>
<?php get_template_part('form_template/orderCake');?>
<?php get_template_part('form_template/tastingToppings');?>
<div id="toasts-wrapper" style="position: absolute; top: 0; right: 0; z-index: 9999999999;"></div>
<?php get_sidebar();?>
<script>
    $('.cakes__nav-icon').on('click', function(){
        $(this).toggleClass('active');
        $('.cakes__menu-wrapper').toggleClass('active');
    })
</script>
<main>
    <div class="cakes-categories__border-top"></div>
    <div class="row pt-5 no-gutters">
        <div class="col-lg-6 offset-lg-3 text-center cakes-fillings__fillings-description">
            <p>Кондитерская «Дольче» приглашает на <br>
                <u><a data-remote="true" href="https://dolcelux.by/cakes/tastings/new">бесплатную дегустацию</a></u> по предварительной <br>
                записи.</p>
            <p><img src="<?php bloginfo('template_directory');?>/assets/img/cakes-fillings__top-ico.svg"></p>
            <p>
                Вы можете придумать вместе с персональным <br>
                консультантом неповторимую начинку Вашего <br>
                торта, которую мы воплотим в жизнь
            </p>
        </div>
    </div>
    <div class="mt-5 mb-5" id="cakes-fillings__fillings-wrapper">
        <?php
        $tastingFields = carbon_get_the_post_meta('crb_price');
        foreach ($tastingFields as $tastingField): ?>
        <a data-remote="true" href="https://dolcelux.by/cakes/tastings/new">
            <div class="row no-gutters pt-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cakes__fillings-wrapper">
                        <div class="cakes__fillings-image-wrapper"><img class="cakes__fillings-image" src="<?php echo $tastingField['crb_image'];?>"></div>
                        <div class="cakes__fillings-description p-4">
                            <p class="text-center"><span class="cakes__filling-name"><?php echo $tastingField['crb_name'];?></span></p>
                            <p class="text-center"><span class="cakes__filling-description"><?php echo $tastingField['crb_description'];?></span></p>
                            <p class="text-center"><span class="cakes__filling-price"><?php echo $tastingField['crb_price'];?> руб / кг</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach;?>
    </div>
    <div class="pagination cakes-categories__spinner-wrapper" id="cakes-categories__spinner-wrapper" data-pagination-endpoint="/cakes/fillings/pagination" data-pagination-pages="4" style="display: none;">
        <img class="fa-spin" src="./Начинки И Цены - Кондитерская DOLCE_files/cakes__logo-df6bb67088ece5a948cc6392d37ede600be989bbee832a9ae3651646201b22a3.svg">
    </div>
    <section class="cakes__order-and-tasting">
        <img class="cakes__order-and-tasting-logo" src="<?php bloginfo('template_directory');?>/assets/img/cakes__logo.png">
        <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory');?>/assets/img/cakes__order-and-tasting-border.png">
        <div class="cakes__order-and-tasting-buttons-wrapper">
            <a data-toggle="modal" class="cakes__order-and-tasting-button"  data-target="#exampleModalLong">ЗАКАЗАТЬ ТОРТ</a> <a data-toggle="modal" class="cakes__order-and-tasting-button" data-target="#cakesOrder">ДЕГУСТАЦИЯ</a>
        </div>
    </section>
<?php get_footer();?>
