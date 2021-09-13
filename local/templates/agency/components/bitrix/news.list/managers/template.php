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
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <?php $name = $arItem['PROPERTIES']['SALES_AGENT__NAME']['VALUE'];?>
                <?php $phone = $arItem['PROPERTIES']['SALES_AGENT__PHONE']['VALUE'];?>
                <?php $email = $arItem['PROPERTIES']['SALES_AGENT__EMAIL']['VALUE'];?>
                <!-- Agent Block -->
                <div class="agent-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                    </div>
                    <div class="info-box">
                        <h4 class="name">
<!--                            <pre>-->
<!--                            --><?//print_r($arItem['ID'])?>
<!--                            </pre>-->
                            <a href="/catalog/?arrFilter_pf%5BSALES_AGENT__ID%5D=<?=$arItem['ID']?>&set_filter=Все+объекты+менеджера+%283%29&set_filter=Y">
                                <?=$arItem['PROPERTIES']['SALES_AGENT__NAME']['VALUE']?></a>
                            <p><?=$arItem['PROPERTIES']['SALES_AGENT__CATEGORY']['VALUE']?></p>
                        </h4>
                        <span class="designation">

                            <p><a href="tel:<?=$arItem['PROPERTIES']['SALES_AGENT__PHONE']['VALUE']?>"><?=$arItem['PROPERTIES']['SALES_AGENT__PHONE']['VALUE']?></a></p>
                               <a href="/catalog/?arrFilter_pf%5BSALES_AGENT__ID%5D=<?=$arItem['ID']?>&set_filter=Все+объекты+менеджера+%283%29&set_filter=Y">Мои объекты</a></span>
                    </div>
                </div>
            </div>
            <?endforeach;?>
<!-- End Agents Section -->

