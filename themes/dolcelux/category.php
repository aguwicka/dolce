<?php
get_header();?>
<?php get_template_part('form_template/orderCake');?>
<?php get_template_part('form_template/tastingToppings');?>
</section>
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
    <div class="col-lg-6 offset-lg-3 cakes-categories__categories-wrapper">
        <?php
        $categories = get_categories([
                'parent' => 2,
                'type' => 'post'
        ]);
        foreach ($categories as $category):?>
            <div class="col-xl-6 text-center">
              <a href="<?php echo get_category_link($category->term_id)?>" class="cakes-categories__category-link"><?php echo $category->name;?></a>
            </div>
        <?php endforeach; wp_reset_postdata();?>
    </div>
  </div>
  <div class="cakes-categories__cakes-wrapper mt-5 mb-5" >
      <?php
      if (is_category(2)) {
          foreach ($categories as $category):
          $args = array(
            'category_name' => $category->slug,
            'post_type' => 'post'
          );
          $query = new WP_Query;
          $my_posts = $query->query($args);
              $catName = $category-> name;
              foreach ($my_posts as $my_post):
      ?>
    <div class="col-xl-4 cakes-categories__cake-wrapper ajax-post" data-name="<?php echo $catName?>" data-total="<?php echo get_queried_object()->name?>">
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
      <?php endforeach; endforeach; wp_reset_postdata();
      }else {
           foreach ($categories as $category):
          $args = array(
            'category_name' => $category->slug,
            'post_type' => 'post'
          );
          $query = new WP_Query;
          $my_posts = $query->query($args);
              $catName = $category-> name;
              foreach ($my_posts as $my_post):
          if ($catName == get_queried_object()->name):
      ?>
    <div class="col-xl-4 cakes-categories__cake-wrapper ajax-post" data-name="<?php echo $catName?>" data-total="<?php echo get_queried_object()->name?>">
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
<?php endif; endforeach; endforeach; wp_reset_postdata(); }?>
      

  </div>
  <section class="cakes__order-and-tasting">
    <img class="cakes__order-and-tasting-logo" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo.png">
    <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory')?>/assets/img/cakes__order-and-tasting-border.png">
    <div class="cakes__order-and-tasting-buttons-wrapper">
      <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#exampleModalLong" href="https://dolcelux.by/cakes/orders/new">ЗАКАЗАТЬ ТОРТ</a> <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#cakesOrder"  href="https://dolcelux.by/cakes/tastings/new">ДЕГУСТАЦИЯ</a>
    </div>
  </section>
<?php get_template_part('form_template/contentForm');?>

<?php get_footer();?>