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
//?>
<!--<pre>-->
<?//print_r($arResult);?>
<!--</pre>-->

<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<!-- News BLock Two -->
<div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image">
                <a href="#">
<!--                    <img src="images/icons/empty.png" data-src="images/resource/news-3.jpg" alt="">-->
                </a>
            </figure>
            <div class="overlay-box">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><span class="fa fa-plus"></span>
                </a>
            </div>
        </div>
        <div class="lower-content">
            <h3 data-mh="title-news">
                <a href="#"><?=$arItem["NAME"]?></a>
            </h3>
            <ul class="post-info">
                <li><?= ConvertDateTime($arItem["TIMESTAMP_X"], "DD") ?> <?= ConvertDateTime($arItem["TIMESTAMP_X"], "MMMM-YYYY") ?></li>
                <li></li>
            </ul>
            <p data-mh="text-news">
                <?=$arItem["DETAIL_TEXT"]?>
            </p>
        </div>
    </div>
</div>

<?endforeach;?>
