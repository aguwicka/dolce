<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header cake-orders__header border-0">
                <button type="button" class="cakes-orders__close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img class="cakes-orders__close-ic" src="<?php bloginfo('template_directory')?>/assets/img/cakes__close-ic.svg"></span>
                </button>
                <img src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo.svg">
                <p class="mt-3"><span class="cakes-orders__title">ЗАКАЗАТЬ ТОРТ</span></p>
                <p class="mt-3 text-center">
          <span class="cakes-orders__description">
            Заполните эту форму и наш менеджер перезвонит вам,<br>
            чтобы уточнить все детали и  сориентировать вас по стоимости.
          </span>
                </p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <?php echo do_shortcode('[contact-form-7 id="30" title="Order cake" html_class="cakes-orders__modal-form"]')?>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 cakes-orders__footer">
                <img class="cakes-orders__border-bottom" src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__border-bottom.png">
            </div>
        </div>
    </div>
</div>