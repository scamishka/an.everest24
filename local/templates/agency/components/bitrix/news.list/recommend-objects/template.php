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
<!--<pre>-->
<? //print_r($arResult);?>
<!--</pre>-->
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="modern-property">
        <div class="row">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image">
                            <a href="<?= SITE_TEMPLATE_PATH ?>/images/resource/modern-property-1.jpg"
                               class="lightbox-image">
                                <img src="<?= $arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"] ?>"
                                     data-src="<?= $arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"] ?>"
                                     alt="">
                            </a>
                        </figure>
                        <ul class="property-options">
                            <li data-tooltip="Подбробнее"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><span
                                            class="fa fa-book"></span></a></li>
                            <li data-tooltip="Фото"><a href="#"><span class="fa fa-image"></span></a></li>
                            <li data-tooltip="Видео"><a href="#"><span class="fa fa-film"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="status"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?> <i class="fa fa-ruble-sign"></i></div>
                    <h3><?= $arItem["PROPERTIES"]["CATEGORY"]["VALUE_ENUM"] ?> <?= $arItem["NAME"] ?></h3>
                    <?if($arItem["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]):?>
                        <div class="location">
                            <span class="icon fa fa-map-marker-alt"></span>
                            <?=$arItem["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]?>
                        </div>
                    <?endif;?>
                    <div class="text"><?= mb_substr($arItem["DETAIL_TEXT"], 0, 370)?></div>
                    <ul class="property-info">
                        <? if ($arItem["PROPERTIES"]["AREA"]["VALUE"]) {?>
                            <li><span class="icon flaticon-grid"></span> Площадь <br> <?=$arItem["PROPERTIES"]["AREA"]["VALUE"]?></li>
                        <?}?>
                        <? if ($arItem["PROPERTIES"]["ROOMS"]["VALUE"]) {?>
                            <li><span class="icon flaticon-bedroom-1"></span> Комнат <br> <?=$arItem["PROPERTIES"]["ROOMS"]["VALUE"]?></li>
                        <?}?>
                        <? if ($arItem["PROPERTIES"]["BATHROOM_UNIT"]["VALUE"]) {?>
                            <li><span class="icon flaticon-bathtub"></span> С/у <br> <?=$arItem["PROPERTIES"]["BATHROOM_UNIT"]["VALUE"]?></li>
                        <?}?>
                        <? if ($arItem["PROPERTIES"]["BALCONY"]["VALUE"]) {?>
                            <li><span class="icon flaticon-garage-1"></span> Балкон <br> <?=$arItem["PROPERTIES"]["BALCONY"]["VALUE"]?></li>
                        <?}?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
<? endforeach; ?>
