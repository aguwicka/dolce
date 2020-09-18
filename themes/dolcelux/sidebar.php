<nav class="cakes__nav-menu text-center">
    <div class="cakes__nav-menu-wrapper h-100">
        <div class="cakes__logo-wrapper">
            <a href="<?php the_permalink(72);?>">
                <p><img class="cakes__logo mt-5" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo-svg.svg"></p>
            </a>        <div class="cakes__logo-text d-flex flex-column">
                <a href="https://dolcelux.by/">
                    <p class="mb-0"><img class="cakes__logo-title" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo-title.svg"></p>
                </a>          <a href="<?php the_permalink(72);?>">
                    <p>
              <span class="cakes__logo-description">
                <img class="w-10" src="<?php bloginfo('template_directory')?>/assets/img/long-dash.svg"> <span>cakes</span> <img class="w-10" src="<?php bloginfo('template_directory')?>/assets/img/long-dash.svg">
              </span>
                    </p>
                </a>        </div>
        </div>
        <div class="cakes__nav-icon">
            <div class="cakes__burger"></div>
        </div>
        <div class="cakes__menu-wrapper">
                <?php
            wp_nav_menu( [
                'theme_location'  => 'header-menu',
                'menu'            => '',
                'container'       => 'ul',
                'container_class' => 'cakes__menu p-0 mt-5',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s cakes__menu p-0 mt-5">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>
            <div class="mb-8">
                <p>
                    <a target="_blank" href="https://www.instagram.com/dolcelux/">
                        <img class="w-3r" src="<?php bloginfo('template_directory')?>/assets/img/cakes__insta.svg">
                    </a>          <a target="_blank" href="https://vk.com/dolcelux">
                        <img class="w-3r" src="<?php bloginfo('template_directory')?>/assets/img/cakes__vk.svg"></a></p><a target="_blank" href="https://vk.com/dolcelux">
                </a>        <p class="mt-3"><a class="cakes__phone" href="tel:+375 44 722 33 77">+375 44 722 33 77</a></p>
            </div>
        </div>
    </div>
</nav>