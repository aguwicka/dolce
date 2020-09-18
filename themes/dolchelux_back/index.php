<?php
get_header();?>

<div class="container-fluid">
    <main class='sites'>
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo get_permalink('72')?>">
                    <div class="row sites__cakes">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__cakes-logo-a35b651d80650a740547d83aa0deb6cfb8fa5cae0b5e9e6f4a8547b97173dc6c.png?>" /></p>
                            <p><span class='sites__cakes-title'>ТОРТЫ</span></p>
                            <p><span class='sites__cakes-description'>на заказ</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__coffee">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__coffee-logo-e2846efd0507a10e74ed7b97853dc65448225b6dd37846e2e1d450068ea29692.png" /></p>
                            <p><span class='sites__coffee-title'>КОФЕ</span></p>
                            <p><span class='sites__coffee-description'>собственная обжарка</span></p>
                        </div>
                    </div>
                </a>          </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__cafes">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__cafes-logo-f02ccf4e18d9f1b89188bc27a05fe7e873100d6c1f06f929182e74ef9f62e103.png" /></p>
                            <p><span class='sites__cafes-title'>НАШИ КАФЕ</span></p>
                            <p><span class='sites__cafes-description'>бронь столика, меню</span></p>
                        </div>
                    </div>
                </a>          </div>
            <div class="col-lg-6">
                <a href="#">
                    <div class="row sites__catering">
                        <div class="col-md-12 text-center">
                            <p><img class="sites__categories-logos" src="<?php bloginfo('template_directory')?>/assets/img/sites__catering-logo-3ae37df866a81e7d7474b0de84a308e6545a370af7b226da3e31afa8a871e303.png" /></p>
                            <p><span class='sites__catering-title'>КЕЙТЕРИНГ</span></p>
                            <p><span class='sites__catering-description'>со вкусом</span></p>
                        </div>
                    </div>
                </a>          </div>
        </div>
        <img class="sites__logo" src="<?php bloginfo('template_directory')?>/assets/img/sites__logo-d53ff6209cff091370090fef85777926ff1a119bcea72249e67964626ebb06da.png" />
    </main>
</div>

<?php wp_footer();?>
</body></html>