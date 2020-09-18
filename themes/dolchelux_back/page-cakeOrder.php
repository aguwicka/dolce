<?php

/*
Template Name: cake order templates
Template Post Type: page
*/
get_header();?>

<?php get_template_part('form_template/tastingToppings');?>
<?php get_sidebar();?>
<script>
    $('.cakes__nav-icon').on('click', function(){
        $(this).toggleClass('active');
        $('.cakes__menu-wrapper').toggleClass('active');
    })
</script>
<main>
    <div class="containter-fluid">
        <div class="cakes-categories__border-top"></div>
        <div class="row no-gutters pt-5 pb-5 position-relative">
            <div class="col-lg-6 offset-lg-3 text-center cakes-orders__orders-title-wrapper">
                <p>Кондитерская «Дольче» изготовит торт любой<br>
                    сложности для вашего торжества.</p>
                <p>Дизайн торта можно выбрать из <u><a href="<?php echo get_category_link('2')?>">нашей галереи</a></u><br>
                    или прислать нам <b>фото торта вашей мечты</b>.</p>
                <p><u><a data-toggle="modal" data-target="#cakesOrder">Дегустируйте</a></u> начинки бесплатно и будьте<br>
                    уверены в своем выборе.</p>
                <p class="cakes-orders__orders-urgent-cake-production mt-5"><button class="rounded-pill" type="button">Cрочное изготовление торта за 3 часа!</button></p>
            </div>
            <img class="cakes-orders__orders-image-right-top" src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__orders-image-right-top.png">
            <img class="cakes-orders__orders-image-left-bottom" src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__orders-image-left-bottom.png">
        </div>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes-orders__how-to-make-order">
            <div class="cakes__line-break-title rounded-circle">КАК СДЕЛАТЬ<br>ЗАКАЗ</div>
            <div class="row no-gutters justify-content-center d-flex">
                <div class="cakes-orders__how-to-make-order-wrapper">
                    <div class="cakes-orders__how-to-make-order-ico-wrapper">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__form-ico.svg">
                    </div>
                    <div class="cakes-orders__how-to-make-order-option-wrapper ml-5">
                        заполните форму ниже и наш<br>
                        менеджер свяжется с вами
                    </div>
                </div>
            </div>
            <div class="row no-gutters justify-content-center d-flex mt-4">
                <div class="cakes-orders__how-to-make-order-wrapper">
                    <div class="cakes-orders__how-to-make-order-ico-wrapper">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__phone-ico.svg">
                    </div>
                    <div class="cakes-orders__how-to-make-order-option-wrapper ml-5">
                        позвоните нам по номеру<br>
                        <a href="tel:+375447223377">+375 44 722 33 77</a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters justify-content-center d-flex mt-4">
                <div class="cakes-orders__how-to-make-order-wrapper">
                    <div class="cakes-orders__how-to-make-order-ico-wrapper">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__message-ico.svg">
                    </div>
                    <div class="cakes-orders__how-to-make-order-option-wrapper ml-5">
                        напишите нам в viber<br>
                        <a href="viber://chat?number=+375447223377">+375 44 722 33 77</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes-orders__cake-delivery">
            <div class="cakes__line-break-title rounded-circle">ДОСТАВКА<br>ТОРТА</div>
            <div class="row no-gutters">
                <div class="col-lg-6 offset-lg-3 text-center cakes-orders__cake-delivery-descr">
                    <p>Доставка тортов осуществляется на автомобиле-рефрижераторе, в котором<br>
                        соблюдены все температурные и санитарные нормы хранения и перевозки.</p>
                    <p><img src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__car-ico.svg"></p>
                    <p>Доставка бесплатна в пределах 3 км от МКАД, более 3 км и по Минской области<br>
                        - доставка платная.</p>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="cakes-orders__order-cake">
            <div class="cakes__line-break-title rounded-circle">ЗАКАЗАТЬ<br>ТОРТ</div>
            <div class="row no-gutters">
                <div class="col-lg-12 text-center cakes-orders__order-cake-title">
                    Заполните эту форму и наш менеджер перезвонит вам,<br>
                    чтобы уточнить все детали и  сориентировать вас по стоимости.
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 offset-lg-3">
                    <?php echo do_shortcode('[contact-form-7 id="30" title="Order cake" html_class="cakes-orders__modal-form"]')?>
                </div>
            </div>
        </section>
        <div class="cakes__line-break w-100"></div>
        <section class="position-relative">
            <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory');?>/assets/img/cakes__order-and-tasting-border.png">
        </section>
<?php get_footer();?>
