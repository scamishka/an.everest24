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
    <div class="container">
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="col-sm-6 col-lg-3">
                <div class="feature wow fadeInLeft" id="feature1">
                    <div class="feature-icon center-block"><i class="fa fa-building"></i></div>
                    <div class="feature-text">
                        <h5 class="subtitle-margin"><?=$arItem["PROPERTIES"]['SUBTITLE']['VALUE']?></h5>
                        <h3><?=$arItem["PROPERTIES"]['TITLE']['VALUE']?><span class="special-color">.</span></h3>
                        <div class="title-separator center-block feature-separator"></div>
                        <p><?= $arItem["PREVIEW_TEXT"];?></p>
                    </div>
                </div>
            </div>

            <?endforeach;?>
        </div>
    </div>
<!--<pre>-->
<?//print_r($arResult);?>
<!--</pre>-->
