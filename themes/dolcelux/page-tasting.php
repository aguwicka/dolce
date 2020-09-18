<?php
/*
Template Name: tasting templates
Template Post Type: page
*/
get_header();?>
<section id="modal"></section>
<div id="toasts-wrapper" style="position: absolute; top: 0; right: 0; z-index: 9999999999;"></div>
<?php get_sidebar();?>
<script>
    $('.cakes__nav-icon').on('click', function(){
        $(this).toggleClass('active');
        $('.cakes__menu-wrapper').toggleClass('active');
    })
</script>

<main>
    <div class="container-fluid">
        <div class="cakes-categories__border-top"></div>
        <section>
            <div class="row cakes-tastings__introduction">
                <img class="cakes-tastings__introduction-cake" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction-cake.png">
                <img class="cakes-tastings__introduction1" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction1.svg">
                <img class="cakes-tastings__introduction2" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction2.svg">
                <img class="cakes-tastings__introduction5" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction1.svg">
                <img class="cakes-tastings__introduction6" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction2.svg">
                <img class="cakes-tastings__introduction3" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction3.svg">
                <img class="cakes-tastings__introduction4" src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__introduction4.svg">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (have_posts()) :
                                while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                            endif;?>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <?php
                            echo carbon_get_the_post_meta('crb_description');
                            ?>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="cakes-tastings__introduction-time">
                                <div><img src="<?php bloginfo('template_directory');?>/assets/img/cakes-tastings__clock-ico.svg"></div>
                                <div class="ml-3">
                                    <?php
                                    echo carbon_get_the_post_meta('crb_time');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <p class="cakes-orders__orders-urgent-cake-production mt-5"><button class="rounded-pill" type="button">Дегустация осуществляется по предварительной записи.</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row cakes__line-break">
        </div>
        <section class="position-relative">
            <div class="cakes__line-break-title rounded-circle">ЗАПИСЬ</div>
            <div class="row cakes-tastings__recording">
                <img class="cakes-tastings__recording-ico1" src="<?php bloginfo('template_directory');?>/assets/img/cakes-fillings__top-ico.svg">
                <img class="cakes-tastings__recording-ico2" src="<?php bloginfo('template_directory');?>/assets/img/rolling-pin.svg">
                <img class="cakes-tastings__recording-ico3" src="<?php bloginfo('template_directory');?>/assets/img/capcake.svg">
                <img class="cakes-tastings__recording-ico4" src="<?php bloginfo('template_directory');?>/assets/img/cakes-fillings__top-ico.svg">
                <img class="cakes-tastings__recording-ico5" src="<?php bloginfo('template_directory');?>/assets/img/donut.svg">
                <img class="cakes-tastings__recording-ico6" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico7" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico8" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico9" src="<?php bloginfo('template_directory');?>/assets/img/toque.svg">
                <img class="cakes-tastings__recording-ico10" src="<?php bloginfo('template_directory');?>/assets/img/confectionery-syringe.svg">
                <img class="cakes-tastings__recording-ico11" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico12" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico13" src="<?php bloginfo('template_directory');?>/assets/img/dot.svg">
                <img class="cakes-tastings__recording-ico14" src="<?php bloginfo('template_directory');?>/assets/img/baguette.svg">
                <img class="cakes-tastings__recording-ico15" src="<?php bloginfo('template_directory');?>/assets/img/capcake.svg">
                <div class="col-lg-6 offset-lg-3">
                    <?php echo  do_shortcode('[contact-form-7 id="22" title="CF tasting" html_class="cakes-orders__modal-form"]')?>
                </div>
            </div>
        </section>
        <section class="position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory')?>/assets/img/cakes__order-and-tasting-border.png">
                </div>
            </div>
        </section>
<?php get_footer();?>
