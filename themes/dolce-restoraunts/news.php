<?php

/*
Template Name: Мероприятия
Template Post Type: page
*/
get_header();?>
    <section class="article uk-padding-large uk-padding-remove-horizontal">
        <div class="container">
            <div class="uk-margin-remove-left uk-margin-left@m">
                <h1 class="uk-h1 uk-text-primary uk-margin-medium-bottom"><?php the_title()?></h1>
                <div class="text-content">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content();?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>