<section class="cakes__footer">
    <div class="row no-gutters">
        <div class="col-lg-12 text-center">
            <div class="cakes__footer-wrapper">
                <?php if (carbon_get_theme_option('crb_tagline')):?><p class="mb-0"><span class="cakes__footer-title"><?php echo carbon_get_theme_option('crb_tagline')?></span></p><?php endif; ?>
                <div class="cakes__footer-mail-wrapper">
                    <img class="mr-1" src="<?php bloginfo('template_directory')?>/assets/img/cakes__mail.svg"><a class="cakes__footer-mail ml-1" href="mailto:<?php echo carbon_get_theme_option('crb_email');?>"><?php echo carbon_get_theme_option('crb_email');?></a>
                </div>
                <p class="text-center mt-5"><span class="cakes__footer-client-office">КЛИЕНТ-ОФИС:</span></p>
                <div class="cakes__footer-location-wrapper">
                    <img class="mr-1" src="<?php bloginfo('template_directory')?>/assets/img/cakes__location.svg"><a target="_blank" class="cakes__footer-location ml-1" href="https://yandex.by/maps/-/CBFnIWs9tB">ул. К.Либкнехта, 45</a>
                </div>
                <div class="cakes__footer-phones-wrapper mt-5">
                    <?php $companyPhones  = carbon_get_theme_option('crb_phones');
                    foreach ($companyPhones as $companyPhone):
                    ?>
                    <div class="cakes__footer-phone-wrapper">
                        <img class="mr-1" src="<?php bloginfo('template_directory')?>/assets/img/cakes__phone.svg"> <a class="cakes_footer-phone ml-1" href="tel:<?php echo $companyPhone['crb_phone'];?>"><?php echo $companyPhone['crb_phone'];?></a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="cakes__copyrights p-2">
    <div class="row no-gutters">
        <div class="col-lg-12 cakes__copyrights-wrapper">
            <span class="cakes__copyrights-year">© Dolcelux 1993 - 2020. All Rights Reserved</span>
            <a target="_blank" class="cakes__copyrights-author" href="https://vk.com/antowa_plawkevich">
                Developed by Anton Plashkevich <!--<img class="cakes__copyrights-muffin" src="./Галерея Тортов - Кондитерская DOLCE_files/cakes__muffin-ic-dce3acaf8eb0882fae11345857c340d1baa730895fbd402ce1fdf14e7070dfcc.svg">-->
            </a>
        </div>
    </div>
</footer>
<?php wp_footer();?>

