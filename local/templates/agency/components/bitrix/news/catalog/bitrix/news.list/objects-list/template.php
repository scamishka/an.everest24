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
<!--<pre>-->
<?//print_r($arResult)?>
<!--</pre>-->
<?}?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<!-- Property Block -->
<!--    <pre>-->
<?//print_r($arItem["PROPERTIES"])?>
<!--</pre>-->
<div class="property-block-two wow fadeInUp">
    <div class="inner-box">
        <div data-mh="card-group" class="image-box">
            <figure class="image">
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <?if ($arItem["PROPERTIES"]["IMAGE"]):?>
                        <img src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                             data-src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">

                    <?elseif (!empty($arItem["DETAIL_PICTURE"])):?>
                        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                             data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    <?else:?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                             data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                     <?endif;?>
                </a>
                <?else:?>
                    <?if ($arItem["PROPERTIES"]["IMAGE"]):?>
                        <img src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                             data-src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">

                    <?elseif (!empty($arItem["DETAIL_PICTURE"])):?>
                        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                             data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    <?else:?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                             data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    <?endif;?>
                 <?endif;?>
            </figure>
            <span class="for"><?=$arItem["PROPERTIES"]["CATEGORY"]["VALUE"]?></span>
        </div>
        <div data-mh="card-group" class="lower-content">
            <ul class="property-info clearfix">
                <li><span class="icon fa fa-expand"></span> <span class="ico-text">Площадь</span> <?=$arItem["PROPERTIES"]["AREA"]["VALUE"]?></li>
                <li><span class="icon fa fa-building"></span> <span class="ico-text">Этаж</span> <?=$arItem["PROPERTIES"]["FLOOR"]["VALUE"]?></li>
                <li><span class="icon fa fa-bed"></span> <span class="ico-text">Комнат</span> <?=$arItem["PROPERTIES"]["ROOMS"]["VALUE"][0]?></li>
            </ul>
            <h3>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <?echo $arItem["NAME"]?>
                    </a>
                <?else:?>
                    <?echo $arItem["NAME"]?> - <?=$arItem["PROPERTIES"]["CATEGORY"]["VALUE"]?>
                <?endif?>
            </h3>
            <div class="text"><?=$arItem["DETAIL_TEXT"]?></div>
        </div>
        <div class="property-price clearfix">
            <div class="location">
                район <?=($arItem["PROPERTIES"]['LOCATION__MICRO_LOCALITY_NAME']['VALUE'][0])?>
                <span class="icon fa fa-map-marker-alt"></span><?=$arItem["PROPERTIES"]['LOCATION__LOCALITY_NAME']['VALUE']?>,  <?=$arItem["PROPERTIES"]['LOCATION__ADDRESS']['VALUE']?> </div>
            <div class="price"><i class="fa fa-ruble-sign"></i> <?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ')?></div>
        </div>
    </div>
</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
