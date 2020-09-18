<?php

/*
Template Name: restaraunt
Template Post Type: page
*/
get_header();?>
<section class="main" id="main" style="background-image: url(<?php echo carbon_get_the_post_meta('crb_loboback');?>)" ">
    <div class="container">
        <div class="uk-flex-between uk-flex-middle main__content" data-uk-grid>
            <div class="uk-width-2-3@m uk-width-1-1">
                <?php if(carbon_get_the_post_meta('crb_logo')) {?>
                    <img alt="Dolce" src="<?php echo carbon_get_the_post_meta('crb_logo');?>">
                <?php }else {?>
                    <h2 class="uk-h1 uk-text-primary"><?php echo carbon_get_the_post_meta('crb_logowrite');?></h2>
                <?php }?>
                <h2 class="uk-h2 uk-text-uppercase uk-margin-small-top"><?php echo carbon_get_the_post_meta('crb_logodesc');?></h2></div>
            <div class="uk-width-1-3@m uk-width-1-1">
                <?php $descNames = carbon_get_the_post_meta('crb_header_info');
                foreach ($descNames as $item):
                ?>
                <div>
                    <span class="uk-h1"><?php echo $item['crb_number'];?></span>
                    <p class="uk-margin-top uk-text-large uk-text-uppercase"><?php echo $item['crb_info'];?></p>
                </div>
                <? endforeach;?>
                <? wp_reset_postdata();?>
            </div>
        </div>
    </div>
</section>
<section class="uk-padding-large uk-padding-remove-horizontal" id="kitchen">
    <div class="container">
        <div class="uk-margin-left@m uk-margin-remove-left uk-margin-medium-bottom uk-width-2-3@xl uk-width-1-1" style="max-width: 95%">
            <h2 class="uk-h1 uk-text-primary">Кухня</h2>
            <p><?php echo carbon_get_the_post_meta('crb_keach');?></p>
        </div>
        <div>
            <div data-uk-filter="target: .js-filter">
                <div class="uk-margin-left@m uk-margin-remove-left uk-margin-medium-bottom">
                    <div class="uk-text-primary filter"><span class="uk-h3 current-filter-value"></span><span uk-icon="icon: chevron-down"></span></div>
                    <div class="filter-values" data-uk-dropdown="mode: click; pos: bottom-justify; boundary: .filter; boundary-align: true">
                        <ul>
                            <li class="uk-active" data-uk-filter-control><a href="#">Все</a></li>
                            <?php $sorts = carbon_get_the_post_meta('crb_sort');
                            foreach ($sorts as $sort):?>
                            <li data-uk-filter-control="[data-filter='<?php echo $sort['crb_eatsort'];?>']"><a href="#"><?php echo $sort['crb_eatsort'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" data-uk-grid>
                    <?php $cards = carbon_get_the_post_meta('crb_keach_card');
                    foreach ($cards as $card):
                    ?>
                    <div data-filter="<?php echo $card['crb_keach_select'];?>">
                        <div class="card">
                            <div class="card-img"><img alt="#" src="<?php echo $card['crb_keach_img'];?>"></div>
                            <div class="card-body uk-flex uk-flex-column uk-flex-between">
                                <div><h4 class="uk-text-small uk-margin-small-bottom"><?php echo $card['crb_keach_name'];?></h4>
                                </div>
                                <div><span class="uk-button uk-button-primary"><?php echo $card['crb_keach_price'];?></span></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <? wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news" id="news"><h2 class="uk-h1 uk-text-primary uk-margin-medium-bottom uk-hidden@m">Новости</h2>
    <div class="slider uk-position-relative" data-uk-slider tabindex="-1">
        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1">
            <?php
            $myID = get_the_ID();
            $posts = get_children([
                'numberposts' => -1,
                'post_parent' =>$myID,
                'post_type' => 'page'
            ]);
            foreach ($posts as $post):
            ?>
            <li>
                <a href="<?php the_permalink($post);?>">
                    <div class="slider__img"><img alt="#" class="uk-width-1-1" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>">
                    </div>
                    <div class="uk-position-bottom slider__text">
                        <time class="uk-h5 uk-text-primary" datatime="26.08.2019"><?php the_time();?></time>
                        <span class="uk-text-uppercase uk-text-bold"><?php echo $post->post_title;?></span></div>
                </a>
            </li>
            <? endforeach;?>
            <? wp_reset_postdata();?>
        </ul>
        <div class="slider__nav uk-text-right uk-visible@m">
            <a href="#" uk-slider-item="previous"><img data-uk-img src="resources/assets/img/arr-left.svg" width="40"></a>
            <a href="#" uk-slider-item="next"><img class="uk-margin-left" data-uk-img src="resources/assets/img/arr-right.svg" width="40"></a>
        </div>
        <div class="uk-text-center">
            <button class="uk-button uk-button-primary uk-margin-large-top uk-text-uppercase uk-hidden@m">загрузить еще</button>
        </div>
    </div>
</section>
<section class="article uk-padding-large uk-padding-remove-horizontal" id="about">
    <div class="container">
        <div class="uk-margin-left@m uk-margin-remove-left uk-margin-medium-bottom uk-width-2-3@xl uk-width-1-1" style="max-width: 95%">
            <h2 class="uk-h1 uk-text-primary">О нас</h2>
            <p><?php echo carbon_get_the_post_meta('crb_about');?></p>
        </div>
    </div>
</section>
<section class="contacts uk-padding-large uk-padding-remove-horizontal" id="contacts">
    <div class="container"><h2 class="uk-h1 uk-text-primary uk-margin-remove-left uk-margin-medium-bottom uk-margin-left@m">Контакты</h2>
        <div data-uk-grid>
            <div class="uk-width-2-5@s uk-width-1-1">
                <?php the_content();?>
            </div>
            <div class="contacts__map uk-width-3-5@s uk-width-1-1">
                <?php echo carbon_get_the_post_meta('crb_map')?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
