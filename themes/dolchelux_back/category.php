<?php
get_header();?>


</div>
<?php get_template_part('form_template/orderCake');?>
<?php get_template_part('form_template/tastingToppings');?>
<script>
$(document).ready(function(){
    Cakes.show()
  })
</script>
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
  <div class="cakes-categories__border-top"></div>
  <div class="row pt-5 no-gutters">
    <div class="col-lg-6 offset-lg-3 cakes-categories__categories-wrapper">
        <?php
        $categories = get_categories([
           'child_of' => 2
        ]);
        foreach ($categories as $category):?>
        <div class="col-xl-6 text-center">
          <a href="<?php get_category_link($category->term_id)?>" class="cakes-categories__category-link"><?php echo $category->name;?></a>
        </div>
        <?php endforeach;?>
    </div>
  </div>
  <div class="cakes-categories__cakes-wrapper mt-5 mb-5" id="cakes-categories__cakes-wrapper">
      <?php $args = array(
      'parent' => $category->cat_id, // ID поста
      'post_type' => 'post',
      'numberposts' => '3'
      );
      $recent = new WP_Query($args);
      while ( $recent->have_posts() ) : $recent->the_post();?>

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
      <?php endwhile; ?>
      <?php if (  $recent->max_num_pages > 1 ) : ?>
          <script id="true_loadmore">
              var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
              var true_posts = '<?php echo serialize($recent->query_vars); ?>';
              var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
          </script>
      <?php endif; ?>
  </div>
  <section class="cakes__order-and-tasting">
    <img class="cakes__order-and-tasting-logo" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo.png">
    <img class="cakes__order-and-tasting-border" src="<?php bloginfo('template_directory')?>/assets/img/cakes__order-and-tasting-border.png">
    <div class="cakes__order-and-tasting-buttons-wrapper">
      <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#exampleModalLong"     href="https://dolcelux.by/cakes/orders/new">ЗАКАЗАТЬ ТОРТ</a> <a class="cakes__order-and-tasting-button" data-toggle="modal" data-target="#cakesOrder"  href="https://dolcelux.by/cakes/tastings/new">ДЕГУСТАЦИЯ</a>
    </div>
  </section>
<?php get_footer();?>


