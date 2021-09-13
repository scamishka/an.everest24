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

$cur_reg = $_GET["arrFilter_pf"]["LOCATION__LOCALITY_NAME"];
if (!$cur_reg) {
    $cur_reg = '';
}

$cur_micro = $_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"];
if (!$cur_micro) {
    $cur_micro = [];
}

$_tmp = [];

foreach ($cur_micro as &$item) {
    $item = htmlentities($item);
    $_tmp[$item] = $item;
}

$cur_micro = array_values($_tmp);

?>
<!--<pre>-->
<?//print_r($arResult["ITEMS"])?>
<!--</pre>-->
<div class="sidebar-widget search-properties">
<!--    <div class="sidebar-title"><h2>Фильтр объектов</h2></div>-->
    <div class="property-search-form style-four form-inner">
        <form method="get"
              action="/catalog<?echo $arResult["FORM_ACTION"]?>"
              name="<?echo $arResult["FILTER_NAME"]."_form"?>">
<!--            --><?//foreach($arResult["ITEMS"] as $arItem):
//                if(array_key_exists("HIDDEN", $arItem)):
//                    echo $arItem["INPUT"];
//                endif;
//            endforeach;?>
            <div class="row">

                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_19"])):?>

                    <div class="form-group selection col-lg-3 col-md-6 col-sm-12">
                        <div class="range-slider-one clearfix">
                            <label>Тип недвижимости</label>
                        <?=$arResult["ITEMS"]["PROPERTY_19"]["INPUT"]?>
                        </div>
                    </div><!--тип недвижимости-->
                <?endif;?>

                <div class="form-group col-lg-3 col-md-6 col-sm-12">
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

                <div class="form-group col-lg-3 col-md-6 col-sm-12">
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

                <div class="form-group col-lg-3 col-md-6 col-sm-12">
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

                <div class="form-group col-lg-3 col-md-6 col-sm-12 selection range-slider-one">
                    <label>Количество комнат</label>
                    <div class="block_checkbox">
                        <?foreach ($arResult["ITEMS"]["PROPERTY_22"]['LIST'] as $xml_id => $value) :?>
                            <?if(!empty($xml_id)):?>
                                <input id="<?=$xml_id?>"
                                       class="checkbox"
                                       type="checkbox" name="arrFilter_pf[ROOMS][]"
                                       value="<?=$xml_id?>"
                                    <?=(in_array($xml_id, $arResult["ITEMS"]["PROPERTY_22"]["INPUT_VALUE"]))?'checked':''?>
                                >
                                <label for="<?=$xml_id?>"><?=$value?></label>
                            <?endif;?>
                        <?endforeach;?>
                    </div>
                </div>

                <div class="form-group selection col-lg-3 col-md-6 col-sm-12">
                    <div class="clearfix">
                        <label>Город/Населённый пункт</label>
                        <div class="input">
                            <select
                                    id="HOME_LOCATION__LOCALITYS"
                                    name="<?=$arResult["ITEMS"]["PROPERTY_49"]["INPUT_NAME"]?>"
                            >
                                <option>(Все)</option>
                            </select>
                        </div>
                    </div>
                </div> <!--Регион-->
                <div class="form-group selection col-lg-3 col-md-6 col-sm-12">
                    <div class="clearfix">
                        <label>Район</label>
                        <?if($_GET['arrFilter_pf']['LOCATION__MICRO_LOCALITY_NAME']){?>
                            <div class="block_checkbox micro-location">
                                <?php

                                ?>
                                <?foreach ($cur_micro as $xml_id => $value) :?>

                                    <input id="<?=$xml_id?>"
                                           class="checkbox"
                                           type="checkbox"
                                           value='<?=$value?>'
                                           checked
                                    >
                                    <label for="<?=$xml_id?>"><?=$value?></label>
                                <?endforeach;?>
                            </div>
                        <?}?>
                        <div class="input">
                            <select id="HOME_LOCATION__MICRO_LOCALITYS"
                                    class="multiple_select" multiple
                                    name="arrFilter_pf[LOCATION__MICRO_LOCALITY_NAME][]">
                                <option>(Все)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <?if(!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_34"])):?>
                    <?if(isset($arResult["ITEMS"]["PROPERTY_34"]["VALUE"])):?>
                        <div class="form-group selection">
                            <?=$arResult["ITEMS"]["PROPERTY_34"]["INPUT"]?>
                        </div> <!-- Площадь участка -->
                    <?endif;?>
                <?endif;?>

                <div class="form-group d-flex justify-content-center">
                    <input type="submit" name="set_filter" class="button theme-btn btn-style-one" btn-title
                           value="Поиск">
                    <input type="hidden" name="set_filter" value="Y" />&nbsp;
                    <input type="submit" name="del_filter" class="button theme-btn btn-style-one btn-title"
                           value="Сбросить">

                </div>
            </div>
        </form>

        <script>
            $(".multiple_select").mousedown(function(e) {
                if (e.target.tagName == "OPTION")
                {
                    return; //don't close dropdown if i select option
                }
                var heights = 60;
                $(".multiple_select option").each(function(indx, element) {
                    heights += $(element).height();
                });
                $(".multiple_select").height(heights);
                $(this).toggleClass('multiple_select_active'); //close dropdown if click inside <select> box
                $(".multiple_select_active").on('click', function (){
                    if(!$('.multiple_select').hasClass('multiple_select_active')) {
                        $(".multiple_select").height(18);
                    }
                });
            });


            function appendOptions(el, data, cur_value) {
                $(el).find('option').remove();
                $( "<option value=''>(Все)</option>" ).appendTo(el);
                $.each( data, function( key, val ) {
                    var is_selected = cur_value === key;
                    // var opt = $( "<option value='" + key + "'>" + key + "</option>" ).appendTo(el);
                    var opt = $( "<option value='" + key + "'>" + key + "</option>" ).appendTo(el);
                    if (is_selected) {
                        $(opt).prop('selected', true)
                    }
                });
            }

            function appendCheckboxOptions(el, data, cur_value) {
                $(el).find('option').remove();
                // $( "<option value=''>(Все)</option>" ).appendTo(el);
                $.each( data, function( key, val ) {
                    var is_selected = (cur_value.indexOf(key) >= 0);
                    console.log(cur_value, key, (cur_value.indexOf(key) >= 0))
                    // var opt = $( "<option value='" + key + "'>" + key + "</option>" ).appendTo(el);
                    var opt = $( "<option value='" + key + "'>" + key + "</option>").appendTo(el);
                    if (is_selected) {
                        $(opt).prop('selected', true)
                        // $(opt).click()
                    }
                });

                $('.multiple_select option').mousedown(function(e) { //no ctrl to select multiple
                    // console.log('click')
                    e.preventDefault();
                    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
                });
            }


            var locality_select = $('#HOME_LOCATION__LOCALITYS');
            var micro_locality_select = $('#HOME_LOCATION__MICRO_LOCALITYS');

            var cur_locality = '<?=$cur_reg?>';
            //var cur_micro_locality_select = '<?//=$arResult["ITEMS"]["PROPERTY_82"]["INPUT_VALUE"]?>//';
            var cur_micro_locality_select = <?= json_encode($cur_micro)?>;

            // console.log(locality_select);

            $.getJSON('/feed-test/cache.json', function( data ) {
                console.log('cache');
                console.log(locality_select);
                $(locality_select).change(function () {
                    var select_locality = $(locality_select).find('option:selected').val();
                    appendCheckboxOptions(micro_locality_select, data[select_locality], cur_micro_locality_select)
                });
                appendOptions(locality_select, data, cur_locality);
                if (cur_locality) {
                    $(locality_select).change();
                }
            });

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

            getFilterSlider("floor-count", 1, 25);

            getFilterSlider("price-amount", 500000, 10000000);

            getFilterSlider("area", 0, 100);

            $(document).ready(function () {

                $('.form-group.selection select').addClass('custom-select-box');
                //Custom Seclect Box
                if($('.custom-select-box').length){
                    $('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
                }

            });
        </script>

    </div>
</div>
