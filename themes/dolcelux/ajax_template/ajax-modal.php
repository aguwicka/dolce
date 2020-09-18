<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action('wp_ajax_my_action', 'data_fetch');
add_action('wp_ajax_nopriv_my_action', 'data_fetch');

function data_fetch($postID){
    $postID=intval( $_POST['param'] );

    $args = array(
        'p' => $postID, // ID of a page, post, or custom type
        //’post_type’ => ‘any’
        'cat' => 2,
    );
    $recent = new WP_Query($args);
    while ( $recent->have_posts() ) : $recent->the_post();?>
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content ajax rounded-0">
                <div class="modal-header cake-orders__header border-0">
                    <button type="button" class="cakes-orders__close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img class="cakes-orders__close-ic" src="<?php bloginfo('template_directory')?>/assets/img/cakes__close-ic.svg"></span>
                    </button>
                    <div class="cakes__logo-wrapper text-center">
                        <a href="/cakes">
                            <p><img class="cakes__logo mt-5" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo.svg"></p>
                        </a>
                        <div class="cakes__logo-text d-flex flex-column">
                            <a href="/">
                                <p class="mb-0"><img class="cakes__logo-title" src="<?php bloginfo('template_directory')?>/assets/img/cakes__logo-title.svg"></p>
                            </a>
                            <a href="/cakes">
                                <p>
                            <span class="cakes__logo-description">
                              <img class="w-10" src="<?php bloginfo('template_directory')?>/assets/img/long-dash.svg"> <span>cakes</span> <img class="w-10" src="<?php bloginfo('template_directory')?>/assets/img/long-dash.svg">
                            </span>
                                </p>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <p class="mt-3 text-center">
          <span class="cakes-orders__description">
            Каждый торт уникален, как и событие каждого из нас.<br>
            Калькулятор даёт ориентировочную цену, в которой учитываются начинка + возможные дополнительные элементы торта.<br>
            Точная цена может оказаться на 10-20% ниже от максимальной в диапазоне, после вычета надбавки за фигурки и украшения.
          </span>
                    </p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="cakes__cake-image-wrapper">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($my_post->ID)); ?>">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <p class="cakes__cake-name"><?php echo $my_post->post_title?></p>
                            <p class="cakes__cake-select-filling-title">Выберите начинку:</p>
                            <p class="cakes__cake-select-filling">
                                <select name="fillings" id="fillings" class="form-control fillings">
                                    <?php $modalContents = carbon_get_post_meta('28','crb_price');
                                    foreach ($modalContents as $modalContent):
                                        ?>
                                        <option class="test" value="<?php echo $modalContent['crb_price'];?>" data-img="<?php echo $modalContent['crb_image'];?>" data-content="<?php echo $modalContent['crb_description'];?>"><?php echo  $modalContent['crb_name'];?></option>
                                    <? endforeach;?>
                                </select>
                            </p>
                            <div class="result"></div>
                            <div class="cakes__cake-selected-filling">
                                <div id="cakes__cake-selected-img" class="cakes__cake-selected-img"><img src="<?php echo $modalContent['crb_image'];?>"></div>
                                <div id="cakes__cake-selected-description" class="cakes__cake-selected-description ml-3"><?php echo $modalContent['crb_description'];?></div>
                            </div>
                            <p class="cakes__cake-enter-guests-number-label mt-5">Введите количество гостей:</p>
                            <p class="cakes__cake-select-filling">
                                <input type="number" name="guests_number" id="guests_number" class="form-control guests_number" min="10">
                            </p>
                            <p id="test"></p>
                            <p id="guests-number-validation-message" class="guests-number-validation-message"></p>
                            <p class="text-center"><button name="button" type="button" id="cakes__cake-calculate-price" class="cakes__cake-calculate-price" value="">Рассчитать цену</button></p>
                            <p class="cakes__cake-price text-center" id="cakes__cake-price"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 cakes-orders__footer">
                    <img class="cakes-orders__border-bottom" src="<?php bloginfo('template_directory');?>/assets/img/cakes-orders__border-bottom.png">
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on('change', '.fillings',  function () {
                let $atrImg = $(this).find(':selected').attr('data-img');
                let atrText = $(this).attr('data-content');
                $('.cakes__cake-selected-img img').attr('src', function () {
                    return $atrImg;
                });
            });
        </script>
        <script type="text/javascript">
            $(document).on('click', '#cakes__cake-calculate-price', function () {
                let selectEl = $('.fillings');
                let questNum = $('.guests_number');
                let message = $('.guests-number-validation-message');
                if(questNum.val() < 10){
                    message.html('Минимальный заказ в Dolce — 2 килограмма.<br>Для человека на празднике золотая серединка — 200 грамм, тогда и всем хватает и с утра с чаем остаётся :)<br>Поэтому минимальное число гостей — 10-ть');
                    $('#cakes__cake-price').html(' ');
                }else {
                    let minPrice = 2*selectEl.val() + (2*selectEl.val() * ((questNum.val() / 10) -1));
                    let maxPrice = 2*selectEl.val() + (2*selectEl.val() * (0.4 + 1.4 * ((questNum.val() / 10) -1)));
                    let cakePrice = $('#cakes__cake-price');
                    message.html(' ');
                    cakePrice.html(minPrice.toFixed(2) + ' ' + '-' + '' + maxPrice.toFixed(2) + ' ' + 'РУБ')
                }
            });
        </script>
    <?php endwhile; ?>
    <?php
    die();
}
