<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?global $USER;
if ($USER->IsAdmin()) {?>
<!--    <pre>-->
<?//print_r($arResult["ITEMS"]['PROPERTY_68'])?>
<!--</pre>-->
<!--<pre>-->
<?//print_r($arResult)?>
<!--</pre>-->
<?}?>

<div class="sidebar-widget search-properties">
    <div class="sidebar-title"><h2>Фильтр объектов</h2></div>
    <div class="property-search-form style-four">
        <form method="get"
              action="<?echo $arResult["FORM_ACTION"]?>"
              name="<?echo $arResult["FILTER_NAME"]."_form"?>">
            <div class="row no-gutters">
                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_68"])):?>
                    <div class="form-group selection range-slider-one" style="display: none;">
                        <label>Менеджер</label>
                        <?=$arResult["ITEMS"]["PROPERTY_68"]["INPUT"]?>
<!--                        <input type="text" name="arrFilter_pf[SALES_AGENT__ID]" size="20" value="" >-->
                    </div>
                <?endif;?>

                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_19"])):?>

                    <div class="form-group selection range-slider-one">
                        <label>Тип недвижимости</label>
                        <?=$arResult["ITEMS"]["PROPERTY_19"]["INPUT"]?>
                    </div><!--тип недвижимости-->
                <?endif;?>

                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_22"])):?>

                    <div class="form-group selection range-slider-one">
                        <label>Количество комнат</label>
                        <?=$arResult["ITEMS"]["PROPERTY_22"]["INPUT"]?>
                    </div>
                <?endif;?>

                <div class="form-group">
                    <div class="range-slider-one clearfix">
                        <label>Цена</label>
                        <div class="price-amount_range-slider"></div>
                        <div class="input">
                            <input type="text"
                                   class="price-amount"
                                   name="<?=$arResult["ITEMS"]["PROPERTY_13"]["NAME"]?>"
                                   data-prop="PROPERTY_13"
                                   readonly>
                            <input type="hidden"
                                   class="price-amount_left"
                                   name="arrFilter_pf[PRICE][LEFT]"
                                   data-min="<?=$arResult["ITEMS"]["PROPERTY_13"]["INPUT_VALUES"][0];?>"
                                   >
                            <input type="hidden"
                                   class="price-amount_right"
                                   name="arrFilter_pf[PRICE][RIGHT]"
                                   data-max="<?=$arResult["ITEMS"]["PROPERTY_13"]["INPUT_VALUES"][1];?>"
                                   >
                        </div>
                        <div class="title"><i class="fa fa-ruble-sign"></i></div>
                    </div>
                </div><!--цена-->

                <div class="form-group">
                    <div class="range-slider-one clearfix">
                        <label>Общая площадь</label>
                        <div class="area_range-slider"></div>
                        <div class="input">
                            <input type="text"
                                   class="area"
                                   name="<?=$arResult["ITEMS"]["PROPERTY_4"]["NAME"]?>"
                                   data-prop="PROPERTY_4"
                                   readonly>
                            <input type="hidden"
                                   class="area_left"
                                   name="arrFilter_pf[AREA][LEFT]"
                                   data-min="<?=$arResult["ITEMS"]["PROPERTY_4"]["INPUT_VALUE"][0]?>">
                            <input type="hidden"
                                   class="area_right"
                                   name="arrFilter_pf[AREA][RIGHT]"
                                   data-max="<?=$arResult["ITEMS"]["PROPERTY_4"]["INPUT_VALUE"][1]?>">

                        </div>
                        <div class="title">м<sup>2</sup></div>
                    </div>
                </div> <!--общая площадь-->

<!--                <div class="form-group">-->
<!--                    <div class="range-slider-one clearfix">-->
<!--                        <label>Количество комнат</label>-->
<!--                        <div class="room-count_range-slider"></div>-->
<!--                        <div class="input">-->
<!--                            <input type="text"-->
<!--                                   class="room-count"-->
<!--                                   name="--><?//=$arResult["ITEMS"]["PROPERTY_22"]["NAME"]?><!--">-->
<!--                            <input type="hidden"-->
<!--                                   class="room-count_left"-->
<!--                                   name="--><?//=$arResult["ITEMS"]["PROPERTY_22"]["INPUT_NAMES"][0]?><!--">-->
<!--                            <input type="hidden"-->
<!--                                   class="room-count_right"-->
<!--                                   name="--><?//=$arResult["ITEMS"]["PROPERTY_22"]["INPUT_NAMES"][1]?><!--">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="form-group">
                    <div class="range-slider-one clearfix">
                        <label>Этаж</label>
                        <div class="floor-count_range-slider"></div>
                        <div class="input">
                            <input type="text"
                                   class="floor-count"
                                   name="<?=$arResult["ITEMS"]["PROPERTY_9"]["NAME"]?>"
                                   data-prop="PROPERTY_9">
                            <input type="hidden"
                                   class="floor-count_left"
                                   name="<?=$arResult["ITEMS"]["PROPERTY_9"]["INPUT_NAMES"][0]?>"
                                   data-min="<?=$arResult["ITEMS"]["PROPERTY_9"]["INPUT_VALUES"][0];?>">
                            <input type="hidden"
                                   class="floor-count_right"
                                   name="<?=$arResult["ITEMS"]["PROPERTY_9"]["INPUT_NAMES"][1]?>"
                                   data-max="<?=$arResult["ITEMS"]["PROPERTY_9"]["INPUT_VALUES"][1];?>">
                        </div>
                    </div>
                </div> <!--Этаж-->

                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_34"])):?>
                    <?if(isset($arResult["ITEMS"]["PROPERTY_34"]["VALUE"])):?>
                        <div class="form-group selection">
                            <?=$arResult["ITEMS"]["PROPERTY_34"]["INPUT"]?>
                        </div> <!-- Площадь участка -->
                    <?endif;?>
                <?endif;?>

                <div class="form-group d-flex">
                    <input type="submit" name="set_filter" class="theme-btn btn-style-two btn-title"
                        value="Поиск">
                    <input type="hidden" name="set_filter" value="Y" />&nbsp;
                    <input type="submit" name="del_filter" class="theme-btn btn-style-two btn-title"
                        value="Сбросить">
                </div>
            </div>
        </form>

        <script>

            function getFilterSlider($selectorIn, $min, $max) {
                let $baseClass = '_range-slider';
                let $classSlider = $('.'+$selectorIn + $baseClass);

                let $inputSlider = 'input.' + $selectorIn;
                let $inputClassSlider = $($inputSlider);

                let $inputLeftValue = $($inputSlider + '_left');
                let $inputRightValue = $($inputSlider + '_right');

                let propFilterMin = $inputLeftValue.attr('data-min');
                let propFilterMax = $inputRightValue.attr('data-max');
                let valueMin;
                let valueMax;
                if (propFilterMin) {
                    valueMin = propFilterMin;
                } else {
                    valueMin = $min;
                }
                if (propFilterMax) {
                    valueMax = propFilterMax;
                } else {
                    valueMax = $max;
                }
                if($classSlider.length){
                    $classSlider.slider({
                        range: true,
                        min: $min,
                        max: $max,
                        values: [ valueMin, valueMax ],
                        slide: function( event, ui ) {
                            $inputClassSlider.val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                            $inputLeftValue.val(ui.values[0]);
                            $inputRightValue.val(ui.values[1]);
                        }
                    });
                    $inputClassSlider.val( $classSlider.slider( "values", 0 ) + " - " + $classSlider.slider( "values", 1 ) );
                }
            }

            getFilterSlider("room-count", 1, 6);

            getFilterSlider("floor-count", 1, 25);

            getFilterSlider("price-amount", 500000, 10000000);

            getFilterSlider("area", 0, 100);

            $(document).ready(function () {

                //Кол-во комнат Slider
                // if($('.room-count_range-slider').length){
                //     $('.room-count_range-slider').slider({
                //         range: true,
                //         min: 1,
                //         max: 6,
                //         values: [ 1, 6 ],
                //         slide: function( event, ui ) {
                //             $( "input.room-count" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                //
                //             $("input.room-count_left").val(ui.values[0]);
                //             $("input.room-count_right").val(ui.values[1]);
                //         }
                //     });
                //
                //     $( "input.room-count" ).val( $( ".room-count_range-slider" ).slider( "values", 0 ) + " - " + $( ".room-count_range-slider" ).slider( "values", 1 ) );
                // }

                //Этаж Slider
                // if($('.floor-count_range-slider').length){
                //     $( ".floor-count_range-slider" ).slider({
                //         range: true,
                //         min: 1,
                //         max: 25,
                //         values: [ 6, 20 ],
                //         slide: function( event, ui ) {
                //             $( "input.floor-count" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                //
                //             $("input.floor-count_left").val(ui.values[0]);
                //             $("input.floor-count_right").val(ui.values[1]);
                //         }
                //     });
                //
                //     $( "input.floor-count" ).val( $( ".floor-count_range-slider" ).slider( "values", 0 ) + " - " + $( ".floor-count_range-slider" ).slider( "values", 1 ) );
                // }

                //Price Range Slider

                // if($('.price-range-slider').length){
                //     $( ".price-range-slider" ).slider({
                //         range: true,
                //         min: 500000,
                //         max: 10000000,
                //         values: [ valueMin, valueMax ],
                //         slide: function( event, ui ) {
                //             $( "input.price-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                //
                //             $("input.price-amount_left").val(ui.values[0]);
                //             $("input.price-amount_right").val(ui.values[1]);
                //         }
                //     });
                //
                //     $( "input.price-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - \u20bd" + $( ".price-range-slider" ).slider( "values", 1 ) );
                // }

                //area4 Range Slider
                // if($('.area-range-slider').length){
                //     $( ".area-range-slider" ).slider({
                //         range: true,
                //         min: 0,
                //         max: 100,
                //         values: [ 40, 70 ],
                //         slide: function( event, ui ) {
                //             $( "input.property-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                //             $("input.property-amount_left").val(ui.values[0]);
                //             $("input.property-amount_right").val(ui.values[1]);
                //         }
                //     });
                //
                //     $( "input.property-amount" ).val( $( ".area-range-slider" ).slider( "values", 0 ) + " - " + $( ".area-range-slider" ).slider( "values", 1 ) );
                // }
                //area5 Range Slider
                // if($('.area_living-range-slider').length){
                //     $( ".area_living-range-slider" ).slider({
                //         range: true,
                //         min: 0,
                //         max: 100,
                //         values: [ 20, 40 ],
                //         slide: function( event, ui ) {
                //             $( "input.property-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                //         }
                //     });
                //
                //     $( "input.property-amount" ).val( $( ".area_living-range-slider" ).slider( "values", 0 ) + " - " + $( ".area_living-range-slider" ).slider( "values", 1 ) );
                // }
                let inputManager = $('input[name="arrFilter_pf[SALES_AGENT__NAME]"]');
                let nameManager = $('h3.name').text();
                inputManager.val(nameManager);
                // alert(nameManager);
                $('.form-group.selection select').addClass('custom-select-box');
                //Custom Seclect Box
                if($('.custom-select-box').length){
                    $('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
                }
            });
        </script>
    </div>
<!--    --><?//global $USER;
//    if ($USER->IsAdmin()) {?>
<!--<pre>-->
<?//print_r($arResult['arrProp'][22]);?>
<!--</pre>-->
<!--    --><?//}?>
</div>
