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

<div class="property-carousel owl-carousel owl-theme">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <!-- Property Block -->
    <div class="property-block">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?= $arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                             data-src="<?= $arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>" alt="">
                    </a>
                </figure>
                <span class="for">Продажа</span>
            </div>
            <div class="lower-content">
                <ul class="property-info clearfix">
                    <li><span class="icon fa fa-expand"></span> Площадь <?=$arItem["PROPERTIES"]["AREA"]["VALUE"]?></li>
                    <li><span class="icon fa fa-building"></span> Этаж <?=$arItem["PROPERTIES"]["FLOOR"]["VALUE"]?></li>
                    <li><span class="icon fa fa-bed"></span> Комнат <?=$arItem["PROPERTIES"]["ROOMS"]["VALUE"]?></li>

<!--                    <li><span class="icon fa fa-expand"></span> Жилая --><?//=$arItem["PROPERTIES"]["LIVING_SPACE"]["VALUE"]?><!--</li>-->
                </ul>
<!--                <ul class="property-info clearfix">-->
<!--                    <li><span class="icon fa fa-expand"></span> Кухня --><?//=$arItem["PROPERTIES"]["KITCHEN_SPACE"]["VALUE"]?><!--</li>-->
<!--                    <li><span class="icon fa fa-building"></span> Этажность --><?//=$arItem["PROPERTIES"]["FLOOR_TOTAL"]["VALUE"]?><!--</li>-->
<!--                </ul>-->
                <h3 data-mh="group-home_title-item" data-mh="title-item"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
                <div class="text"><?= mb_substr($arItem["DETAIL_TEXT"],0, 70)?></div>
                <div class="property-price clearfix d-flex flex-column" data-mh="home-group_location-item">
                    <div class="price">
                        <i class="fa fa-ruble-sign"></i> <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>
                    </div>
                    <?if($arItem["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]):?>
                        <div class="location" >
                            <span class="icon fa fa-map-marker-alt">

                            </span> <?=$arItem["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]?>
                        </div>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>


