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

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">

        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="property-info-box">
                    <div class="row">
                        <div class="about-property col-lg-7 col-md-12 col-sm-12">
                            <h2><?=$arResult["NAME"]?></h2>
                            <ul class="property-info clearfix">
                                <li><i class="fa fa-expand"></i>  <?=$arResult["PROPERTIES"]["AREA"]["VALUE"]?> м<sup>2</sup></li>
                                <li><i class="fa fa-building"></i> <span class="ico-text">Этаж</span> <?=$arResult["PROPERTIES"]["FLOOR"]["VALUE"]?></li>
                                <li><i class="fa fa-bed"></i> <span class="ico-text">Комнат</span> <?=$arResult["PROPERTIES"]["ROOMS"]["VALUE"][0]?></li>
                            </ul>
                        </div>
                        <div class="price-column col-lg-5 col-md-12 col-sm-12">
                            <div class="price"><i class="fa fa-ruble-sign"></i>
                                <?=number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ')?>
                            </div>

                            <div class="location">
                                <i class="icon fa fa-map-marker-alt"></i>
                                <?=$arResult["PROPERTIES"]['LOCATION__ADDRESS']['VALUE'] . ' ' . $arResult["PROPERTIES"]['LOCATION__LOCALITY_NAME']['VALUE']?>
<!--                                --><?//=mb_substr($arResult["PROPERTIES"]["LOCATION"]["VALUE"], 10,24)?>
                            </div>
                        </div>
                    </div>

                    <div class="property-detail carousel-outer">
                        <ul class="image-carousel owl-carousel owl-theme">
                            <?foreach($arResult['PROPERTIES']['IMAGE']['VALUE'] as $photo):?>
                            <li class="image-box">
                                <figure class="image">
                                    <img src="<?=$photo['BIG']['src']?>"
                                         data-src="<?=$photo['BIG']['src']?>"
                                         alt=""></figure>
                                <span class="status"><?=$arResult['PROPERTIES']['CATEGORY']['VALUE']?></span>
                            </li>
                            <?endforeach;?>
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <?foreach($arResult['PROPERTIES']['IMAGE']['VALUE'] as $photo):?>
                            <li><img src="<?=$photo['THUMP']['src']?>" alt=""></li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="property-detail">
                    <h3>Описание объекта</h3>
                    <p><?=(!empty($arResult["DETAIL_TEXT"])) ? $arResult["DETAIL_TEXT"] : '
                                Продажа объекта недвижимости, в новом стремительно развивающемся районе. 
                                Транспортная доступность. 
                                Торг возможен на квартире по факту, но минимальный
                            ';?></p>
                    <h4><?=$arResult["PROPERTIES"]["LOCATION"]["NAME"]?></h4>
                    <div class="table-outer">
                        <table class="info-table">
                            <tr>
                                <td><strong>Адрес:</strong> <?=$arResult["PROPERTIES"]['LOCATION__ADDRESS']['VALUE']?></td>
                                <td><strong>Город:</strong> <?=$arResult["PROPERTIES"]['LOCATION__LOCALITY_NAME']['VALUE']?></td>
                            </tr>
                            <tr>
                                <td><strong>Район:</strong> <?=$arResult["PROPERTIES"]['LOCATION__MICRO_LOCALITY_NAME']['VALUE'][0]?></td>
                                <td><strong>Область/край:</strong> <?=$arResult["PROPERTIES"]['LOCATION__REGION']['VALUE']?></td>
                            </tr>
                            <tr>
                                <td><strong>Страна</strong> <?=$arResult["PROPERTIES"]['LOCATION__COUNTRY']['VALUE']?></td>
                                <td><strong>Цена:</strong> <?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> <i class="fa fa-ruble-sign"></td>
                            </tr>
                        </table>

                    </div>

                    <h4>Характеристики</h4>
                    <div class="table-outer">
                        <table class="info-table">
                            <?$i=0?>
                            <?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                                <?if($i % 2 === 0){?>
                                    <tr>
                                <?}?>
                                    <td><strong><?=$arProperty["NAME"]?>:</strong>
                                        <? if ($arProperty["VALUE"] === "1") {
                                            echo "да";
                                            } else if ($arProperty["VALUE"] === "0") {
                                            echo "нет";
                                        } elseif (is_array($arProperty["VALUE"])){
                                            echo implode('', $arProperty["VALUE"]);
                                        } elseif ($arProperty['CODE'] === "SALES_AGENT__ID") {
                                            echo  $arProperty["DISPLAY_VALUE"];
                                        } else echo $arProperty["VALUE"];
                                        ?>

                                    </td>

                                <?if($i % 2 !== 0){?>
                                    </tr>
                                <?}?>
                            <?$i++?>
                            <?endforeach;?>
                        </table>
                    </div>

                    <h4>Инфраструктура</h4>
                    <ul class="features-list clearfix">
                        <?if (isset($arResult['PROPERTIES']['ELECTRICITY_SUPPLY']['VALUE']) && $arResult['PROPERTIES']['ELECTRICITY_SUPPLY']['VALUE']>0) {echo '<li>Электричество</li>';}?>
                        <?if (isset($arResult['PROPERTIES']['BALCONY']['VALUE']) && $arResult['PROPERTIES']['BALCONY']['VALUE']>0) {echo '<li>Балкон</li>';}?>
                        <?if (isset($arResult['PROPERTIES']['WATER_SUPPLY']['VALUE']) && $arResult['PROPERTIES']['WATER_SUPPLY']['VALUE']>0) {echo '<li>Водоснабжение</li>';}?>
                        <?if (isset($arResult['PROPERTIES']['GAS_SUPPLY']['VALUE']) && $arResult['PROPERTIES']['GAS_SUPPLY']['VALUE']>0) {echo '<li>Газ</li>';}?>
                        <?if (isset($arResult['PROPERTIES']['SEWERAGE_SUPPLY']['VALUE']) && $arResult['PROPERTIES']['SEWERAGE_SUPPLY']['VALUE']>0) {echo '<li>Канализация</li>';}?>
                        <?if (isset($arResult['PROPERTIES']['HEATING_SUPPLY']['VALUE']) && $arResult['PROPERTIES']['HEATING_SUPPLY']['VALUE']>0) {echo '<li>Теплоснабжение</li>';}?>

                    </ul>
                    <div class="floor-plans">
                            <? $APPLICATION->IncludeComponent(
                                "dev:credit_calculator",
                                "vue_detail",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "CHECKBOX" => "N",
                                    "TERM_START" => "5",
                                    "TERM_END" => "25",
                                    "TERM_STEP" => "5",
                                    "PERCENT_RATE_START" => "5",
                                    "PERCENT_RATE_END" => "15",
                                    "PERCENT_RATE_STEP" => "0,1",
                                    "TOTAL_COST" => $arResult["PROPERTIES"]['PRICE']['VALUE']
                                ),
                                false
                            ); ?>
                    </div>

                    <h4>Вам может быть интересно</h4>
                    <div id="most-objects" class="floor-plans">

                        <div class="owl-carousel" id="detail-pict">

                            <? foreach ($arResult['OTHER_EL'] as $elem):?>
                                <!-- Property Block -->
                                <div class="property-block-two wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="owl-carousel">
                                                <?foreach ($elem["PROPERTIES"]["IMAGE"]["THUMP"] as $thump):?>
                                                    <figure class="image">
                                                        <a href="<?=$elem['DETAIL_PAGE_URL']?>">
                                                            <img src="<?=$thump['src']?>"
                                                                 data-src="<?=$thump['src']?>" alt="">
                                                        </a>
                                                    </figure>
                                                <?endforeach;?>
                                            </div>
                                            <span class="for"><?=$elem['PROPERTIES']['CATEGORY']['VALUE']?></span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span> <?=$elem['PROPERTIES']['AREA']['VALUE']?></li>
                                                <li><span class="icon fa fa-bed"></span> <?=$elem["PROPERTIES"]["ROOMS"]["VALUE"][0]?></li>
                                                <li><span class="icon fa fa-building"></span> <?=$elem['PROPERTIES']['FLOOR']['VALUE']?></li>
                                            </ul>
                                            <h3 data-mh="group_title-item"><a href="<?=$elem['DETAIL_PAGE_URL']?>"><?=$elem['NAME']?></a></h3>
                                        </div>
                                        <div class="property-price clearfix" >
                                            <?if($arResult["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]):?>
                                                <div class="location" >
                                                    <span class="icon fa fa-map-marker-alt">
                                                    </span> <?=$arResult["PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"]?> <?=$arResult["PROPERTIES"]["LOCATION__LOCALITY_NAME"]["VALUE"]?>
                                                </div>
                                            <?else:?>
                                                <div class="location" >
                                                    <span class="icon fa fa-map-marker-alt">
                                                    </span> <?=$arResult["PROPERTIES"]["LOCATION__MICRO_LOCALITY_NAME"]["VALUE"][0]?> <?=$arResult["PROPERTIES"]["LOCATION__LOCALITY_NAME"]["VALUE"]?>
                                                </div>
                                            <?endif;?>
                                            <div class="price">
                                                <i class="fa fa-ruble-sign"></i> <?=number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ')?></div>
                                        </div>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">
                    <!-- About Agent -->
                    <div class="sidebar-widget about-agent-widget">
                        <div class="sidebar-title">
                            <h2>Ваш менеджер</h2>
                        </div>

                        <div class="widget-content">
                            <div class="info-box">
                                <h3 class="name"><?=$arResult['MANAGER']['SALES_AGENT__NAME']['VALUE']?></h3>
                                <?if($arResult['MANAGER']['SALES_AGENT__CATEGORY']['VALUE']) {?>
                                    <span class="designation"><?=$arResult['MANAGER']['SALES_AGENT__CATEGORY']['VALUE']?></span>
                                <?} else {?>
                                    <span class="designation">Специалист по недвижимости</span>
                                <?}?>
                                <?$FILTER_PROPERTY_CODE =
                                    array(
//                                        0 => "COUNTRY",
//                                        1 => "REGION",
//                                        2 => "DISTRICT",
//                                        3 => "ADDRESS",
//                                        4 => "TYPE",
//                                        5 => "PROPERTY_TYPE",
//                                        6 => "CATEGORY",
//                                        7 => "PRICE",
//                                        8 => "ROOMS",
//                                        9 => "FLOOR",
//                                        10 => "LOCALITY_NAME",
//                                        11 => "AREA",
                                        12 => "SALES_AGENT__NAME",
                                        13 => "SALES_AGENT__ID"
                                    ) ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.filter",
                                    "manager",
                                    Array(
                                        "IBLOCK_TYPE" => "content",
                                        "IBLOCK_ID" => "2",
                                        "FILTER_NAME" => "arrFilter",
                                        "FIELD_CODE" => Array(),
                                        "PROPERTY_CODE" => $FILTER_PROPERTY_CODE,
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_GROUPS" => "Y",
                                        "SALES_AGENT__ID" => $arResult['MANAGER']['SALES_AGENT__ID']['VALUE'],
                                    )
                                );
                                ?>
                                <ul class="contact-info">
                                    <li><strong>Тел:</strong><a href="tel:<?=$arResult['MANAGER']['SALES_AGENT__PHONE']['VALUE']?>"><?=$arResult['MANAGER']['SALES_AGENT__PHONE']['VALUE']?></a></li>
                                    <li><strong>Email:</strong><a href="mailto:<?=$arResult['MANAGER']['SALES_AGENT__EMAIL']['VALUE']?>"><?=$arResult['MANAGER']['SALES_AGENT__EMAIL']['VALUE']?></a></li>
<!--                                    <li><a href="#"><strong>Все объекты менеджера</strong></a></li>-->
                                </ul>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Звонок менеджеру</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

<!--                     Recent Properties -->
                    <div class="sidebar-widget recent-properties">
                        <div class="sidebar-title">
                            <h2>Объект на карте</h2>
                        </div>
                        <div class="widget-content">
<!--                            <div id="scamMap" class="map-outer">-->

                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:map.yandex.view",
                                    "",
                                    Array(
                                        "INIT_MAP_TYPE" => "MAP",
                                        "MAP_DATA" => serialize(array(
                                            'yandex_lat' => $arResult["PROPERTIES"]['LOCATION__LATITUDE']['VALUE'],
                                            'yandex_lon' => $arResult["PROPERTIES"]['LOCATION__LONGITUDE']['VALUE'],
                                            'yandex_scale' => 13,
                                            'PLACEMARKS' => array (
                                                array(
                                                    'TEXT' => $arProperty["MAP"]["VALUE"].", ".$arProperty["MAP"]["VALUE"],
                                                    'LON' => $arResult["PROPERTIES"]['LOCATION__LONGITUDE'],
                                                    'LAT' => $arResult["PROPERTIES"]['LOCATION__LATITUDE'],
                                                ),
                                            ),
                                        )),
                                        "MAP_WIDTH" => "100%",
                                        "MAP_HEIGHT" => "300",
                                        "CONTROLS" => array("ZOOM", "MINIMAP", "TYPECONTROL", "SCALELINE"),
                                        "OPTIONS" => array("DESABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING"),
                                        "MAP_ID" => ""
                                    ),
                                    false
                                );?>
<!--                            </div>-->

                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
