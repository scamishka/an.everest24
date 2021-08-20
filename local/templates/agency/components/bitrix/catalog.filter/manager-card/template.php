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
<h3 class="name"><?=$arResult['MANAGER']['SALES_AGENT__NAME']['VALUE']?></h3>
<?if($arResult['MANAGER']['SALES_AGENT__CATEGORY']['VALUE']) {?>
    <span class="designation"><?=$arResult['MANAGER']['SALES_AGENT__CATEGORY']['VALUE']?></span>
<?} else {?>
    <span class="designation">Специалист по недвижимости</span>
<?}?>
<form method="get"
      action="<? echo $arResult["FORM_ACTION"] ?>"
      name="<? echo $arResult["FILTER_NAME"] . "_form" ?>">
    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_68"])): ?>

        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">
            <input type="text" name="arrFilter_pf[SALES_AGENT__ID]" size="20" value="">
        </div><!--менеджер-->
    <? endif; ?>
    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_55"])): ?>

        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">
            <!--                        <div class="range-slider-one clearfix">-->
            <input type="text" name="arrFilter_pf[SALES_AGENT__NAME]" size="20"
                   value="">
            <!--                        </div>-->
        </div><!--менеджер имя-->
    <? endif; ?>
    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_56"])): ?>

        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">
            <!--                        <div class="range-slider-one clearfix">-->
            <input type="text" name="arrFilter_pf[SALES_AGENT__PHONE]" size="20"
                   value="">
            <!--                        </div>-->
        </div><!--менеджер телефон-->
    <? endif; ?>
    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_57"])): ?>

        <div class="form-group selection col-lg-3 col-md-6 col-sm-12" style="display: none;">
            <!--                        <div class="range-slider-one clearfix">-->
            <input type="text" name="arrFilter_pf[SALES_AGENT__EMAIL]" size="20"
                   value="">
            <!--                        </div>-->
        </div><!--менеджер email-->
    <? endif; ?>

    <? if (!array_key_exists("HIDDEN", $arResult["ITEMS"]["PROPERTY_34"])): ?>
        <? if (isset($arResult["ITEMS"]["PROPERTY_34"]["VALUE"])): ?>
            <div class="form-group selection">
                <?= $arResult["ITEMS"]["PROPERTY_34"]["INPUT"] ?>
            </div> <!-- Площадь участка -->
        <? endif; ?>
    <? endif; ?>

    <div class="form-group d-flex justify-conten t-center btn-box">
        <input type="submit" name="set_filter" class="button theme-btn btn-style-one btn-title btn-style-man"
               value="Мои объекты <?=($arResult['COUNT_OBJECT_MANAGER'])?'('.$arResult['COUNT_OBJECT_MANAGER'].')':''?>">
        <input type="hidden" name="set_filter" value="Y"/>&nbsp;
        <!--                    <input type="hidden" name="del_filter" class="button theme-btn btn-style-one btn-title"-->
        <!--                           value="Сбросить">-->

    </div>
</form>
<ul class="contact-info">
    <li><strong>Тел:</strong><a href="tel:<?=$arResult['MANAGER']['SALES_AGENT__PHONE']['VALUE']?>"><?=$arResult['MANAGER']['SALES_AGENT__PHONE']['VALUE']?></a></li>
    <li><strong>Email:</strong><a href="mailto:<?=$arResult['MANAGER']['SALES_AGENT__EMAIL']['VALUE']?>"><?=$arResult['MANAGER']['SALES_AGENT__EMAIL']['VALUE']?></a></li>
    <!--                                    <li><a href="#"><strong>Все объекты менеджера</strong></a></li>-->
</ul>
<script>
    $(document).ready(function () {
        let inputManager = $('input[name="arrFilter_pf[SALES_AGENT__ID]"]');
        let idManager = '<?=$_GET['arrFilter_pf']["SALES_AGENT__ID"]?>';
        inputManager.val(idManager);
        console.log(idManager);
    });
</script>
