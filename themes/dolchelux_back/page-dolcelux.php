<?php

/*
Template Name: dolce templates
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
            <div class="row cakes-dolces__introduction">
                <img class="cakes-dolces__cake-ico1" src="<?php bloginfo('template_directory')?>/assets/img/cakes-dolces__cake-ico1.svg">
                <img class="cakes-dolces__cake-ico2" src="<?php bloginfo('template_directory')?>/assets/img/cakes-dolces__cake-ico2.svg">
                <img class="whisk-img" src="<?php bloginfo('template_directory')?>/assets/img/whisk.svg">
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
                            <span class="cakes-dolces__introduction-signature">Dolce cakes</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row cakes__line-break">
        </div>
        <section class="position-relative">
            <div class="cakes__line-break-title rounded-circle">РАБОТАЕМ<br>ДЛЯ ВАС</div>
            <div class="row cakes-dolces__working-for-you">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <ul class="cakes-dolces__working-for-you-list">
                        <?php
                            $works_repeater = carbon_get_the_post_meta('crb_work');
                            foreach ($works_repeater as $work_repeater){
                        ?>
                        <li><?php echo $work_repeater['crb_title']?></li>
                        <?php };?>
                    </ul>
                </div>
            </div>
        </section>
        <div class="row cakes__line-break">
        </div>
        <section class="position-relative">
            <div class="cakes__line-break-title rounded-circle">ОТЗЫВЫ</div>
            <div class="row cakes-dolces__testimonials">
                <div class="col-lg-8 offset-lg-2">
                    <?php
                        $reviews_repeater = carbon_get_the_post_meta('crb_reviews');
                        foreach ($reviews_repeater as $review_repeater):
                    ?>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="cakes-dolces__testimonial-wrapper">
                                <div class="cakes-dolces__testimonial-img-wrapper">
                                    <img src="<?php echo $review_repeater['crb_image']?>">
                                </div>
                                <div class="cakes-dolces__testimonial-text-wrapper ml-5">
                                    <p class="cakes-dolces__testimonial-text-name mb-0"><?php echo $review_repeater['crb_name']?></p>
                                    <p class="cakes-dolces__testimonial-text-profession"><?php echo $review_repeater['crb_profession']?></p>
                                    <p class="cakes-dolces__testimonial-text"><?php echo $review_repeater['crb_review']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? endforeach;?>
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
