<?php
get_header();?>
<section class="uk-padding-large uk-padding-remove-horizontal">
    <div class="container">
        <div class="uk-margin-remove-left uk-margin-left@m">
            <h1 class="uk-h1 uk-text-primary uk-margin-medium-bottom"><?php the_title()?></h1>
            <div class="text-content">
               <?php the_content();?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
