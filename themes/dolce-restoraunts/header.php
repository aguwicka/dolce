<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DevBox company</title>
    <meta content="Description of DevBox" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
</head>
<body class="index-page">
<header>
    <div class="header__desktop uk-visible@m">
        <div class="header">
            <div>
                <ul data-uk-scrollspy-nav="closest: li; scroll: true;">
                    <li class="nav-link nav-link--active"><a <?php if($post->post_parent) { echo '';}else { echo 'data-uk-scroll';} ?> href="<?php if($post->post_parent) { echo  get_permalink($post->post_parent);}else { echo '#main';} ?>">Главная</a></li>
                    <li class="nav-link"><a <?php if($post->post_parent) { echo '';}else { echo 'data-uk-scroll';} ?> href="<?php if($post->post_parent ) { echo  get_permalink($post->post_parent);}else { echo '#kitchen';} ?>">Меню</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#news">Новости</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#about">О нас</a></li>
                    <li class="nav-link"><a data-uk-scroll href="#contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="uk-margin-large-top">
                <div class="social">
                    <div class="social__list">
                        <a class="social__item" href="<?php echo get_theme_mod( 'facebook' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: facebook; ratio: 1"></span></div>
                        </a>
                        <a class="social__item" href="<?php echo get_theme_mod( 'insta' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: instagram; ratio: 1"></span></div>
                        </a>
                        <a class="social__item" href="<?php echo get_theme_mod( 'youtube' );?>" target="_blank">
                            <div class="icon"><span uk-icon="icon: youtube; ratio: 1"></span></div>
                        </a>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                <span class="uk-h3 uk-active uk-text-primary"><?php echo get_theme_mod( 'footer' );?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="header__modile uk-hidden@m">
        <button class="burger-icon" data-uk-toggle="target: #mobile-menu"><span></span><span></span><span></span>
        </button>
    </div>
</header>
<?php wp_head();?>