<footer class="footer uk-text-center">
    <p class="uk-margin-remove-bottom">designed by <span class="uk-text-bold"><a href="https://straut-skobelev.com/" target="_blank">Straut & Skobelev</a></span></p>
    <p class="uk-margin-remove-bottom">2020. All rights reserved.</p></footer>
<?php wp_footer();?>
<div class="uk-modal-full" data-uk-modal id="mobile-menu">
    <div class="uk-modal-dialog uk-modal-close-full"><img class="mobile-menu__logo" height="18" src="<?php echo carbon_get_the_post_meta('crb_logomobile')?>" width="83">
        <div class="container mobile-menu">
            <div>
                <ul>
                    <li class="nav-link"><a <?php if($post->post_parent) { echo '';}else { echo 'data-uk-scroll';} ?> href="<?php if($post->post_parent) { echo  get_permalink($post->post_parent);}else { echo '#main';} ?>">Главная</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#kitchen">Меню</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#news">Новости</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="uk-margin-large-top">
                <div class="social">
                    <div class="social__list"><a class="social__item" href="<?php echo get_theme_mod( 'facebook' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: facebook; ratio: 1"></span></div>
                        </a><a class="social__item" href="<?php echo get_theme_mod( 'insta' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: instagram; ratio: 1"></span></div>
                        </a><a class="social__item" href="<?php echo get_theme_mod( 'youtube' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: youtube; ratio: 1"></span></div>
                        </a></div>
                </div>
                <div class="uk-margin-medium-top">
                    <form>
                        <textarea class="uk-textarea" placeholder="КОММЕНТАРИЙ"></textarea>
                            <input class="uk-input" placeholder="+375 (29) 111-11-11" type="tel">
                            <button class="uk-button uk-button-default uk-width-1-1" type="submit">отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>