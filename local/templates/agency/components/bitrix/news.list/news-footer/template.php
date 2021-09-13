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

<h2 class="widget-title">Объекты</h2>
<!--Footer Column-->
<div class="widget-content">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <div class="post">
            <div class="thumb">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <img src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                         data-src="<?=$arItem["PROPERTIES"]["IMAGE"]["VALUE"]["0"]["THUMP"]["src"]?>"
                         alt="<?= $arItem["NAME"]?>">
                </a>
            </div>
            <h4 data-mh="foot-title-group">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                    <?=$arItem["NAME"]?>
                </a>
            </h4>
            <span class="date"><?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ')?> <i class="fa fa-ruble-sign"></i></span>
        </div>
    <?endforeach;?>
</div>

