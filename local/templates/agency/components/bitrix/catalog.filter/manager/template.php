<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<form method="get"
      action="<? echo $arResult["FORM_ACTION"] ?>"
      name="<? echo $arResult["FILTER_NAME"] . "_form" ?>">

    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_68"])): ?>

        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">
            <input type="text" name="arrFilter_pf[SALES_AGENT__ID]" size="20" value="<?=$arResult["ITEMS"]["PROPERTY_68"]['INPUT']?>">
        </div><!--менеджер-->
    <? endif; ?>
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_55"])): ?>
<!--        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--            <input type="text" name="arrFilter_pf[SALES_AGENT__NAME]" size="20" value="">-->
<!--        </div>-->
<!--    --><?// endif; ?>
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_56"])): ?>
<!--        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--            <input type="text" name="arrFilter_pf[SALES_AGENT__PHONE]" size="20"-->
<!--                   value="--><?//=$arParams['SALES_AGENT__PHONE']?><!--">-->
<!--        </div>-->
<!--    --><?// endif; ?>
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_57"])): ?>
<!--        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--            <input type="text" name="arrFilter_pf[SALES_AGENT__EMAIL]" size="20"-->
<!--                   value="--><?//=$arParams['SALES_AGENT__EMAIL']?><!--">-->
<!--        </div>-->
<!--    --><?// endif; ?>
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_58"])): ?>
<!--        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--            <input type="text" name="arrFilter_pf[SALES_AGENT__CATEGORY]" size="20"-->
<!--                   value="--><?//=$arParams['SALES_AGENT__CATEGORY']?><!--">-->
<!--        </div>-->
<!--    --><?// endif; ?>
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_19"])): ?>
<!--        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--            <div class="range-slider-one clearfix">-->
<!--                <label>Тип недвижимости</label>-->
<!--                --><?//= $arResult["ITEMS"]["PROPERTY_19"]["INPUT"] ?>
<!--            </div>-->
<!--        </div>-->
<!--    --><?// endif; ?>

<!--    <div class="form-group col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--        <div class="range-slider-one clearfix">-->
<!--            <label>Цена</label>-->
<!--            <div class="price-amount_range-slider"></div>-->
<!--            <div class="input">-->
<!--                <input type="text"-->
<!--                       class="price-amount"-->
<!--                       name="--><?//= $arResult["ITEMS"]["PROPERTY_13"]["NAME"] ?><!--"-->
<!--                       data-prop="PROPERTY_13"-->
<!--                       readonly>-->
<!--                <input type="hidden"-->
<!--                       class="price-amount_left"-->
<!--                       name="arrFilter_pf[PRICE][LEFT]"-->
<!--                       data-min="--><?//= $arResult["ITEMS"]["PROPERTY_13"]["INPUT_VALUES"][0]; ?><!--"-->
<!--                >-->
<!--                <input type="hidden"-->
<!--                       class="price-amount_right"-->
<!--                       name="arrFilter_pf[PRICE][RIGHT]"-->
<!--                       data-max="--><?//= $arResult["ITEMS"]["PROPERTY_13"]["INPUT_VALUES"][1]; ?><!--"-->
<!--                >-->
<!--            </div>-->
<!--            <div class="title"><i class="fa fa-ruble-sign"></i></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--        <div class="range-slider-one clearfix">-->
<!--            <label>Общая площадь</label>-->
<!--            <div class="area_range-slider"></div>-->
<!--            <div class="input">-->
<!--                <input type="text"-->
<!--                       class="area"-->
<!--                       name="--><?//= $arResult["ITEMS"]["PROPERTY_4"]["NAME"] ?><!--"-->
<!--                       data-prop="PROPERTY_4"-->
<!--                       readonly>-->
<!--                <input type="hidden"-->
<!--                       class="area_left"-->
<!--                       name="arrFilter_pf[AREA][LEFT]"-->
<!--                       data-min="--><?//= $arResult["ITEMS"]["PROPERTY_4"]["INPUT_VALUE"][0] ?><!--">-->
<!--                <input type="hidden"-->
<!--                       class="area_right"-->
<!--                       name="arrFilter_pf[AREA][RIGHT]"-->
<!--                       data-max="--><?//= $arResult["ITEMS"]["PROPERTY_4"]["INPUT_VALUE"][1] ?><!--">-->
<!---->
<!--            </div>-->
<!--            <div class="title">м<sup>2</sup></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="form-group col-lg-3 col-md-6 col-sm-12" style="display: none;">-->
<!--        <div class="range-slider-one clearfix">-->
<!--            <label>Этаж</label>-->
<!--            <div class="floor-count_range-slider"></div>-->
<!--            <div class="input">-->
<!--                <input type="text"-->
<!--                       class="floor-count"-->
<!--                       name="--><?//= $arResult["ITEMS"]["PROPERTY_9"]["NAME"] ?><!--"-->
<!--                       data-prop="PROPERTY_9">-->
<!--                <input type="hidden"-->
<!--                       class="floor-count_left"-->
<!--                       name="--><?//= $arResult["ITEMS"]["PROPERTY_9"]["INPUT_NAMES"][0] ?><!--"-->
<!--                       data-min="--><?//= $arResult["ITEMS"]["PROPERTY_9"]["INPUT_VALUES"][0]; ?><!--">-->
<!--                <input type="hidden"-->
<!--                       class="floor-count_right"-->
<!--                       name="--><?//= $arResult["ITEMS"]["PROPERTY_9"]["INPUT_NAMES"][1] ?><!--"-->
<!--                       data-max="--><?//= $arResult["ITEMS"]["PROPERTY_9"]["INPUT_VALUES"][1]; ?><!--">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    --><?// if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_34"])): ?>
<!--        --><?// if (isset($arResult["ITEMS"]["PROPERTY_34"]["VALUE"])): ?>
<!--            <div class="form-group selection">-->
<!--                --><?//= $arResult["ITEMS"]["PROPERTY_34"]["INPUT"] ?>
<!--            </div>-->
<!--        --><?// endif; ?>
<!--    --><?// endif; ?>

    <div class="form-group d-flex justify-conten t-center btn-box">
        <input type="submit" name="set_filter" class="button theme-btn btn-style-one btn-title btn-style-man"
               value="Все объекты менеджера <?=($arResult['COUNT_OBJECT_MANAGER'])?'('.$arResult['COUNT_OBJECT_MANAGER'].')':''?>">
        <input type="hidden" name="set_filter" value="Y"/>&nbsp;
        <!--                    <input type="hidden" name="del_filter" class="button theme-btn btn-style-one btn-title"-->
        <!--                           value="Сбросить">-->
    </div>
</form>
<script>

    function getFilterSlider($selectorIn, $min, $max) {
        let $baseClass = '_range-slider';
        let $classSlider = $('.' + $selectorIn + $baseClass);

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
        if ($classSlider.length) {
            $classSlider.slider({
                range: true,
                min: $min,
                max: $max,
                values: [valueMin, valueMax],
                slide: function (event, ui) {
                    $inputClassSlider.val(ui.values[0] + " - " + ui.values[1]);
                    $inputLeftValue.val(ui.values[0]);
                    $inputRightValue.val(ui.values[1]);
                }
            });
            $inputClassSlider.val($classSlider.slider("values", 0) + " - " + $classSlider.slider("values", 1));
        }
    }

    // getFilterSlider("floor-count", 1, 25);

    // getFilterSlider("price-amount", 500000, 10000000);

    // getFilterSlider("area", 0, 100);

    $(document).ready(function () {
        // let inputManager = $('input[name="arrFilter_pf[SALES_AGENT__ID]"]');
        //let idManager = '<?//=$arParams["SALES_AGENT__ID"]?>//';
        // inputManager.val(idManager);

        // let inputPhone = $('input[name="arrFilter_pf[SALES_AGENT__PHONE]"]');
        // let phoneManager = $('.contact-info .phone a').text();
        // inputPhone.val(phoneManager);
        // let inputEmail = $('input[name="arrFilter_pf[SALES_AGENT__EMAIL]"]');
        // let emailManager = $('.contact-info .email a').text();
        // inputEmail.val(emailManager);
        $('.form-group.selection select').addClass('custom-select-box');
        //Custom Seclect Box
        if ($('.custom-select-box').length) {
            $('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
        }
    });
</script>
