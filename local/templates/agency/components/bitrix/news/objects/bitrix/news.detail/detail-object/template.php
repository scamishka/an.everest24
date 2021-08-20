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
$this->addExternalJS("/js/theme.js");
$this->addExternalJS("/.js");
$this->addExternalCss("/css/custom.css");
$this->addExternalCss("/css/responsive.css");
$this->addExternalCss("/css/theme.css");
$this->addExternalCss("/css/theme-animate.css");
$this->addExternalCss("/css/theme-blog.css");
$this->addExternalCss("/css/theme-elements.css");
$this->addExternalCss("/css/theme-shop.css");
?>
<div class="container_object-menu">
    <ul class="container object-menu">
        <li class="active"><a href="#head-images">Фотографии</a></li>
        <li><a href="#head-info">О квартире</a></li>
        <li><a href="#prop-info">Характеристики</a></li>
        <li><a href="#map">Расположение</a></li>
        <li><a href="#calc-block">Ипотека</a></li>
        <li><a href="#most-objects">Аналитика</a></li>
    </ul>
</div>

<div style="position:static" class="col-md-9 ol-sm-12">
    <div class="content-center">
        <h2>Об объекте</h2>

        <div class="realty_detail-list">
            <div id="head-images" class="head-images block-section">
                <div class="top-slide owl-carousel">
                    <div class="item"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img1" /></div>
                    <div class="item"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img2" /></div>
                    <div class="item"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img3" /></div>
                    <div class="item"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img4" /></div>
                </div>
                <div class="after-slide"></div>
            </div>
            <div id="head-info" class="head-info block-section">
                <div class="row">
                    <div class="col-md-8">
                        <h1><?= $arResult["NAME"] ?></h1>
                        <div class="area">
                            <i class="fa fa-map-marker"></i>
                            <?= (!empty($arResult["DISPLAY_PROPERTIES"]['LOCATION__ADDRESS'])) ? $arResult["DISPLAY_PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"] : 'ВОЙСКОВАЯ УЛИЦА, 4, КРАСНОДАР' ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-cols">
                            <div>
                                <h3><?= $arResult["DISPLAY_PROPERTIES"]['PRICE']['VALUE'] ?>
                                    <span class="rub-symbol"><span class="display-none">руб.</span></span></h3>
                            <p>63000 за м²</p>
                            </div>
                            <div>В ипотеку от <span>10003 </span><span class="rub-symbol"><span class="display-none">руб.</span> /мес.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="text-info" class="text-info block-section">
                <h2>Описание</h2>

                        <p>
                            <?=(empty($arResult["PREVIEW_TEXT"])) ? $arResult["PREVIEW_TEXT"] : '
                                Продам теплую и светлую однокомнатную квартиру, в новом стремительно развивающемся районе. 
                                В квартире сделан ремонт, установлен бойлер ( на время отключения горячей воды). У дома 
                                собственная котельная и подключен газ, что является редкостью для новостроек . Дом очень 
                                уютный, одноподъездный, соседи тихие. В шаговой доступности остановки общественного 
                                транспорта, необходимые магазины и гипермаркеты. 
                                Так же в поселке имеются учебные заведения. Торг возможен на квартире по факту, 
                                но минимальный
                            ';?>
                        </p>

            </div>
            <div id="prop-info" class="prop-info block-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-text">
                            <h2>Характеристики</h2>
                            <div class="about-content">
                                <div class="about-column">
                                    <h3>О квартире</h3>
                                    <div class="about-column-list">
                                        <div class="about-column-list-item">
                                            <div class="title">Комнатность</div>
                                            <div class="title-value">1</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Площадь</div>
                                            <div class="title-value">35.2 м²</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Ремонт</div>
                                            <div class="title-value">Косметический ремонт</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-column">
                                    <h3>О доме</h3>
                                    <div class="about-column-list">
                                        <div class="about-column-list-item">
                                            <div class="title">Комнатность</div>
                                            <div class="title-value">1</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Площадь</div>
                                            <div class="title-value">35.2 м²</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Ремонт</div>
                                            <div class="title-value">Косметический ремонт</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-column">
                                    <h3>Двор</h3>
                                    <div class="about-column-list">
                                        <div class="about-column-list-item">
                                            <div class="title">Комнатность</div>
                                            <div class="title-value">1</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Площадь</div>
                                            <div class="title-value">35.2 м²</div>
                                        </div>
                                        <div class="about-column-list-item">
                                            <div class="title">Ремонт</div>
                                            <div class="title-value">Косметический ремонт</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map" class="map block-section">
                <h2>Расположение</h2>
                <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.view",
                        "map-object", Array(
                    "API_KEY" => "",	// Ключ API
                    "CONTROLS" => array(	// Элементы управления
                        0 => "ZOOM",
                        1 => "MINIMAP",
                        2 => "TYPECONTROL",
                        3 => "SCALELINE",
                    ),
                    "INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
                    "MAP_DATA" => $str,
                    "MAP_HEIGHT" => "350",	// Высота карты
                    "MAP_ID" => "",	// Идентификатор карты
                    "MAP_WIDTH" => "100%",	// Ширина карты
                    "OPTIONS" => array(	// Настройки
                        0 => "ENABLE_SCROLL_ZOOM",
                        1 => "ENABLE_DBLCLICK_ZOOM",
                        2 => "ENABLE_DRAGGING",
                    )
                ),
                    false
                );?>

            </div>
            <div id="calc-block" class="calc-block block-section">
                <? $APPLICATION->IncludeComponent(
                    "dev:credit_calculator",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "CHECKBOX" => "N",
                        "TERM_START" => "5",
                        "TERM_END" => "25",
                        "TERM_STEP" => "5",
                        "PERCENT_RATE_START" => "5",
                        "PERCENT_RATE_END" => "15",
                        "PERCENT_RATE_STEP" => "0,1",
                        "TOTAL_COST" => $arResult["DISPLAY_PROPERTIES"]['PRICE']['VALUE']
                    ),
                    false
                ); ?>
            </div>
            <div id="most-objects" class="most-objects block-section">

                <h2>Вам может быть интересно</h2>

                <div class="owl-carousel" id="detail-pict">

                    <? foreach ($arResult['OTHER_EL'] as $elem):?>
                        <div class="most-objects_elem">
                            <div class="elem-image">
                                <img src="<?=$elem["PREVIEW_PICTURE"]?>"
                                     alt="<?=$elem["NAME"]?>"
                                     title="<?=$elem["NAME"]?>">
                            </div>
                            <div class="elem-info">
                                <div class="elem-info_price">
                                    <h3>
                                        <?=$elem['PROPERTY_PRICE_VALUE']?>
                                        <span class="rub-symbol"><span class="display-none">руб.</span></span>
                                    </h3>
                                </div>
                                <div class="elem-info_text">
                                    <span><?=$elem['NAME']?></span>

                                    <div class="area">
                                        <i class="fa fa-map-marker"></i> <?=$elem['PROPERTY_CITY_VALUE']?>
                                    </div>
                                    <p>Площадь: <?=$elem['PROPERTY_SQUARE_VALUE']?></p>
                                </div>
                                <div class="user-call">
                                    <span><i class="fa fa-phone"></i> Жду звонка</span>
                                </div>
                            </div>

                        </div>
                    <?endforeach;?>

                </div>
            </div>
        </div>
    </div>
</div>
<!--<pre>-->
<!--                            --><?//print_r($arResult['OTHER_EL'])?>
<!--                            </pre>-->
<div style="position:static" class="right-sidebar col-md-3 hidden-sm-down">
    <div class="content-left">
        <div class="asside-panel">
            <div class="asside-panel-title">
                Ваш менеджер
            </div>
            <div class="asside-panel-content">
                <div class="user-avatar">
                    <img src="<?=$this->__folder?>/avatar-man.png" alt="">
                    <h3>Иванова Мария Петровна</h3>
                    <h3><a href="tel:88008008080">88008008080</a></h3>
                </div>
                <div class="user-call">
                    <a href="#" class="btn btn-primary">Жду звонка</a>
                </div>
            </div>
        </div>
        <div class="asside-panel">
            <div class="asside-panel-title">
                Объект
            </div>
            <div class="asside-panel-content">
                <div class="object-info">
                    <h5><?= $arResult["NAME"] ?></h5>
                    <p><?= (!empty($arResult["DISPLAY_PROPERTIES"]['LOCATION__ADDRESS'])) ? $arResult["DISPLAY_PROPERTIES"]["LOCATION__ADDRESS"]["VALUE"] : 'ВОЙСКОВАЯ УЛИЦА, 4, КРАСНОДАР' ?>
                    </p>
                    <p><i class="fa fa-map-marker"></i> <?=$arResult["DISPLAY_PROPERTIES"]['CITY']['VALUE']?></p>
                    <p><?=$arResult["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']?></p>
                    <p><?=$arResult["DISPLAY_PROPERTIES"]['PRICE']['VALUE']?> <span class="rub-symbol"><span class="display-none">руб.</span></p>
                </div>
                <div class="buy-info">
                    <div class="title">В ипотеку </div>
                </div>
            </div>
        </div>
    </div>
</div>
