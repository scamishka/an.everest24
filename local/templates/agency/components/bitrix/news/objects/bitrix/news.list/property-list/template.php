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
<div style="position:static" class="col-md-3 hidden-sm-down">
    <div class="content-left">
        <button class="btn-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="asside-panel">
            <div class="asside-panel-title">
                <a class="fc-prm" href="/catalog/">Недвижимость</a>
            </div>
            <div class="asside-panel-content">
                <ul class="menu_realty_asside">
                    <?foreach ($arResult['SECT'] as $sect):?>
                        <li>
                        <span>
                            <a href="<?=$sect['SECTION_PAGE_URL']?>"><?=$sect['INFO']['NAME']?></a>
                        </span>
                        <?if (!empty($sect['SECTIONS'])):?>
                            <ul>
                                <?foreach($sect['SECTIONS'] as $section):?>
                                    <li>
                                        <a href="<?=$section['SECTION_PAGE_URL']?>"
                                           id='jsSALE_FLAT'
                                           class="jsCategories category_not_checked">
                                            <?=$section['NAME']?>
                                            <span class="count">(<?=count($section['ITEMS'])?>)</span>
                                        </a>
                                    </li>
                                <?endforeach;?>
                            </ul>
                            </li>
                        <?else:?>
                            </li>
                        <?endif;?>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
        <div class="realty-filter">
            <div class="asside-panel">
                <div class="asside-panel-title">Характеристики</div>
                <div class="asside-panel-content">
                    <form id="filtr_form" method="get">
                        <div class="filter-range price-filtr">
                            <div class="filter-title">
                                <div class="filter-title1"></div>
                                <div class="filter-title2">Цена</div>
                                <div class="filter-title3"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xs-6">
                                    <input class="pricefrom"
                                           type="text"
                                           name="SEARCH[PRICE_FROM]"
                                           value=""
                                           placeholder="от">
                                </div>
                                <div class="col-6 col-xs-6">
                                    <input class="priceto"
                                           type="text"
                                           name="SEARCH[PRICE_TO]"
                                           value=""
                                           placeholder="до">
                                </div>
                            </div>
                            <div class="slider-price"></div>
                        </div>
                        <hr>
                        <div class="filter-range area-filtr">
                            <div class="filter-title">
                                <div class="filter-title1"></div>
                                <div class="filter-title2">Общая площадь</div>
                                <div class="filter-title3"></div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xs-6">
                                    <input class="areafrom"
                                           type="text"
                                           name="SEARCH[AREA_TOTAL_FROM]"
                                           value=""
                                           placeholder="от">
                                </div>
                                <div class="col-6 col-xs-6">
                                    <input class="areato"
                                           type="text"
                                           name="SEARCH[AREA_TOTAL_TO]"
                                           value=""
                                           placeholder="до">
                                </div>
                            </div>
                            <div class="slider-area"></div>
                        </div>
                        <div class="filter-check">
                            <div class="filter-title">
                                <div class="filter-title1"></div>
                                <div class="filter-title2">Комнат</div>
                                <div class="filter-title3"></div>
                            </div>
                            <span>
                               <input type="radio" id="fchid2" name="SEARCH[ROOMS]" value="1">
                                <label for="fchid2">1</label>
                            </span>
                            <span>
                                <input type="radio" id="fchid3" name="SEARCH[ROOMS]" value="2">
                                <label for="fchid3">2</label>
                            </span>
                            <span>
                                <input type="radio" id="fchid4" name="SEARCH[ROOMS]" value="3">
                                <label for="fchid4">3</label>
                            </span>
                            <span>
                                <input type="radio" id="fchid5" name="SEARCH[ROOMS]" value="4">
                                <label for="fchid5">4</label>
                            </span>
                        </div>
                        <div class="realty-filter-buttons text-xs-center">
                            <hr>
                            <div class="reset-filter">
                                <a href="/catalog/" class="btn btn-primary">
                                    <i class="fa fa-undo"></i>
                                    &nbsp;Сбросить
                                </a>
                            </div>
                            <div class="submit-filter">
                                <a onclick="$('#filtr_form').submit();" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                    &nbsp;Найти
                                </a>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="position:static" class="col-md-9 col-sm-12">
    <div class="content-center">
        <h1>Каталог</h1>
        <div class="realty_list is_opacity">
            <div class="realty_list_top_nav">
                <div class="wrap">
                    <div class="row">
                        <div class="col-md-4 hidden-sm-down">
                            <div class="btn-group">
                                <a class="btn table-view-btn"><i class="fa fa-list-ul"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-default block-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="text-right">
                                <button class="btn-hamburger js-slideout-toggle">
                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                </button>
                                <div class="pagenav">
                                    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                                        <?=$arResult["NAV_STRING"]?><br />
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="realty_list_item" data-mh="list">
                    <div class="pict-container">
                        <div class="owl-carousel img-thumbnail">
                            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                    <a target="_blank" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <img class="owl-lazy"
                                             data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                             width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                             height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                             title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                    </a>
                                <?else:?>
                                    <img class="owl-lazy"
                                         data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                         width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                         height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                                <?endif;?>
                            <?endif?>
                        </div>
                    </div>
                    <div class="about-container">
                        <div class="about-text">
                            <div class="title">
                                <a class="cetacs-catalog-list_item-title"
                                   data-id="<?=$arItem['ID']?>"
                                   href="<?=$arItem["DETAIL_PAGE_URL"]?>"
                                   target="_blank"
                                   >
                                    <?echo $arItem["NAME"]?></a>
                            </div>
                            <?if ($arItem["DISPLAY_PROPERTIES"]["CITY"]):?>
                                <div class="area">
                                    <i class="fa fa-map-marker"></i>
                                    <?=$arItem["DISPLAY_PROPERTIES"]["CITY"]["DISPLAY_VALUE"]?>
                                </div>
                            <?endif;?>
                            <?if ($arItem["DISPLAY_PROPERTIES"]["FLOOR"]):?>
                                <div class="asd">
                                    <b><?=$arItem["DISPLAY_PROPERTIES"]["FLOOR"]["NAME"]?>: </b>
                                    <?if(is_array($arItem["DISPLAY_PROPERTIES"]["FLOOR"]["DISPLAY_VALUE"])):?>
                                        <span class="overflow"><?=implode("&nbsp;/&nbsp;", $arItem["DISPLAY_PROPERTIES"]["FLOOR"]["DISPLAY_VALUE"]);?></span>
                                    <?else:?>
                                        <span class="overflow"><?=$arItem["DISPLAY_PROPERTIES"]["FLOOR"]["DISPLAY_VALUE"];?></span>
                                    <?endif?>
                                </div>
                            <?endif;?>
                            <?if ($arItem["DISPLAY_PROPERTIES"]["SQUARE"]):?>
                                <div class="asd">
                                    <b><?=$arItem["DISPLAY_PROPERTIES"]["SQUARE"]["NAME"]?>: </b>
                                    <?if(is_array($arItem["DISPLAY_PROPERTIES"]["SQUARE"]["DISPLAY_VALUE"])):?>
                                        <span class="overflow"><?=implode("&nbsp;/&nbsp;", $arItem["DISPLAY_PROPERTIES"]["SQUARE"]["DISPLAY_VALUE"]);?></span>
                                    <?else:?>
                                        <span class="overflow"><?=$arItem["DISPLAY_PROPERTIES"]["SQUARE"]["DISPLAY_VALUE"];?></span>
                                    <?endif?>
                                </div>
                            <?endif;?>
                            <?if ($arItem["DISPLAY_PROPERTIES"]["ROOM"]):?>
                                <div class="asd">
                                    <b><?=$arItem["DISPLAY_PROPERTIES"]["ROOM"]["NAME"]?>: </b>
                                    <?if(is_array($arItem["DISPLAY_PROPERTIES"]["ROOM"]["DISPLAY_VALUE"])):?>
                                        <span class="overflow"><?=implode("&nbsp;/&nbsp;", $arItem["DISPLAY_PROPERTIES"]["ROOM"]["DISPLAY_VALUE"]);?></span>
                                    <?else:?>
                                        <span class="overflow"><?=$arItem["DISPLAY_PROPERTIES"]["ROOM"]["DISPLAY_VALUE"];?></span>
                                    <?endif?>
                                </div>
                            <?endif;?>
                        </div>
                        <?if ($arItem["DISPLAY_PROPERTIES"]["PRICE"]):?>
                            <div class="about-price">
                                <div class="price">
                                    <?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?> <i class="fa fa-rub"></i>
                                </div>
                                <a class="btn btn-primary cetacs-catalog-list_item_button-read-more"
                                   href="<?=$arItem["DETAIL_PAGE_URL"]?>"
                                   target="_blank" >
                                    Подробнее
                                </a>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;?>
            <div style="clear: both;"></div>
            <div class="text-center">
                <div class="pagenav">
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                        <br /><?=$arResult["NAV_STRING"]?>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
</div>



