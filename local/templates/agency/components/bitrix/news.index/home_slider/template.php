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
<div class="banner-carousel-two owl-carousel owl-theme">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="slide-item"
         data-mh="slider-group"
         style="background-image: url(<?=$arItem["IMAGE_SLIDE"]["src"]?>);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="left-content">
                    <?if(!empty($arItem["PROPERTIES"]["SUBTITLE"]["VALUE"])):?>
                        <div class="status"><span><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></span></div>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["TITLE"]["VALUE"])):?>
                        <h2><?=$arItem["PROPERTIES"]["TITLE"]["VALUE"]?></h2>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["TEXT_SLIDE"]["VALUE"])):?>
                    <div class="text">
                        <?=$arItem["PROPERTIES"]["TEXT_SLIDE"]["VALUE"]?>
                    </div>
                    <?endif;?>
                    <?if(!empty($arItem["PROPERTIES"]["TEXT_LIST_SLIDE"]["VALUE"])):?>
                        <div class="text">
                            <ul>
                                <?if(is_array($arItem["PROPERTIES"]["TEXT_LIST_SLIDE"]["VALUE"])):?>
                                    <?foreach ($arItem["PROPERTIES"]["TEXT_LIST_SLIDE"]["VALUE"] as $value):?>
                                        <li><?=$value?></li>
                                    <?endforeach;?>
                                <?else:?>
                                    <li><?=$value?></li>
                                <?endif;?>
                            </ul>
                        </div>
                    <?endif;?>
                    <div class="btn-box">
                        <a href='<?=$arItem["PROPERTIES"]["URL_BUTTON"]["VALUE"]?$arItem["PROPERTIES"]["URL_BUTTON"]["VALUE"]:"#"?>' class="theme-btn btn-style-two">
                            <span class="btn-title"><?=$arItem["PROPERTIES"]["TEXT_BUTTON"]["VALUE"]?></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>

