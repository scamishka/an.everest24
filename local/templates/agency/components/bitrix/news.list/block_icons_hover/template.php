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
<div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
    <div class="inner-column">
        <? $npp = 0; ?>
        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <? $npp++; ?>
            <div class="service-block wow fadeInUp">
                <div class="inner-box">
                    <? if ($arItem["PROPERTIES"]["ICON"]): ?>
                        <span class="icon <?= $arItem['PROPERTIES']['ICON']['CODE']["VALUE"] ?>"></span>
                    <? else: ?>
                        <span class="icon flaticon-buyer"></span>
                    <? endif; ?>
                    <h4><a><?= $arItem['PROPERTIES']['TITLE']["VALUE"] ?></a></h4>
                    <div class="text"><?= $arItem['PROPERTIES']['SUBTITLE']["VALUE"] ?></div>
                </div>
            </div>
            <?
            if ($npp % 3 == 0) :
                echo '</div></div><div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3">
    <div class="inner-column">';
            endif;
            ?>


        <? endforeach; ?>
    </div>
</div>
