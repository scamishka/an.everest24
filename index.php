<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<!-- Property Search Section -->
<section class="property-search-section style-two">
    <div class="auto-container">
        <div class="property-search-form-two wow fadeInUp">
            <div class="title"><h5>Поиск объектов</h5></div>
<!--            --><?//global $USER;
//            if ($USER->IsAdmin()) {?>
                <?$FILTER_PROPERTY_CODE =
                    array(
                    0 => "COUNTRY",
                    1 => "REGION",
                    2 => "DISTRICT",
                    3 => "ADDRESS",
                    4 => "TYPE",
                    5 => "PROPERTY_TYPE",
                    6 => "CATEGORY",
                    7 => "PRICE",
                    8 => "ROOMS",
                    9 => "FLOOR",
                    10 => "LOCALITY_NAME",
                    11 => "AREA",
                    ) ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog.filter",
                    "home",
                    Array(
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "2",
                        "FILTER_NAME" => "arrFilter",
                        "FIELD_CODE" => Array(),
                        "PROPERTY_CODE" => $FILTER_PROPERTY_CODE,
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                    )
                );
                ?>
<!--            --><?//} ?>
        </div>
    </div>
</section>
<!-- End Property Search Section -->

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row">
            <!-- Info Column -->
            <div class="info-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="devider"><span></span></div>
                        <h2>
                            <?$title = $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/home/why_us/title.php"
                                )
                            );?>
                        </h2>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/home/why_us/subtitle.php"
                                )
                            );?></div>
                    </div>
                    <div class="text-box">
                        <p>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/home/why_us/text.php"
                                )
                            );?></p>
                    </div>

                    <div class="row features">
                        <!-- Feature Block -->
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "block_icons_anim",
                                Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "FIELD_CODE" => array(	// Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arrFilter",	// Фильтр
                            "IBLOCKS" => array(
                                0 => "7",
                            ),
                            "IBLOCK_SORT_BY" => "SORT",
                            "IBLOCK_SORT_ORDER" => "ASC",
                            "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                            "IBLOCK_URL" => "",
                            "NEWS_COUNT" => "4",	// Количество новостей на странице
                            "PROPERTY_CODE" => array(	// Свойства
                                0 => "TITLE",
                                1 => "SUBTITLE",
                                2 => "TEXT_LIST_SLIDE",
                                3 => "URL_BUTTON",
                                4 => "TEXT_SLIDE",
                                5 => "TEXT_BUTTON",
                                6 => "",
                            ),
                            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "COMPONENT_TEMPLATE" => ".default",
                            "IBLOCK_ID" => "8",	// Код информационного блока
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "PARENT_SECTION" => "1",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                            "STRICT_SECTION_CHECK" => "Y",	// Строгая проверка раздела для показа списка
                            "DISPLAY_DATE" => "N",	// Выводить дату элемента
                            "DISPLAY_NAME" => "Y",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                            "PAGER_TITLE" => "Новости",	// Название категорий
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>

            <!-- image Column -->
            <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="image-box wow fadeInRight">
                    <figure class="image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png"
                                               data-src="<?= SITE_TEMPLATE_PATH ?>/images/resource/image-4.jpg" alt=""></figure>
                    <div class="contact-info">
                        <span class="icon fa fa-phone-volume"></span>
                        <a href="tel:<?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/includes/home/why_us/phone.php"
                            )
                        );?>" class="number"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/includes/home/why_us/phone.php"
                                )
                            );?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us -->

<!-- горячие предложения -->
<section class="property-section"
         style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/background/1.jpg);">
    <div class="auto-container">
        <div class="sec-title light text-center">
            <div class="devider"><span></span></div>
            <h2><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/hot_objects/title.php"
                    )
                );?></h2>
            <div class="text"><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/hot_objects/subtitle.php"
                    )
                );?></div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "hot-objects",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "5",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0=>"LOCATION",1=>"CATEGORY",2=>"PRICE",3=>"AREA",4=>"LIVING_SPACE",5=>"KITCHEN_SPACE",6=>"ROOMS",7=>"FLOOR",8=>"FLOOR_TOTAL",9=>"BUILDING_TYPE",10=>"ROOM_FURNITURE",11=>"MAP",12=>"",),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
    </div>
</section>
<!--End горячие предложения -->

<!-- подбор ипотеки -->
<section class="services-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="devider"><span></span></div>
            <h2><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/ipoteka/title.php"
                    )
                );?></h2>
            <div class="text"><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/ipoteka/subtitle.php"
                    )
                );?></div>
        </div>

        <div class="row">
            <!-- Image Column -->
            <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image">
                        <a href="<?= SITE_TEMPLATE_PATH ?>/images/resource/image-2.jpg"
                           class="lightbox-image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png"
                                 data-src="<?= SITE_TEMPLATE_PATH ?>/images/resource/image-2.jpg" alt="">
                        </a>
                    </figure>
                </div>
            </div>

            <!-- Service Column -->

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "block_icons_hover",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "DETAIL_URL" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "arrFilter",
                            "IBLOCKS" => array(
                                0 => "7",
                            ),
                            "IBLOCK_SORT_BY" => "SORT",
                            "IBLOCK_SORT_ORDER" => "ASC",
                            "IBLOCK_TYPE" => "content",
                            "IBLOCK_URL" => "",
                            "NEWS_COUNT" => "6",
                            "PROPERTY_CODE" => array(
                                0 => "TITLE",
                                1 => "SUBTITLE",
                                2 => "TEXT_LIST_SLIDE",
                                3 => "URL_BUTTON",
                                4 => "TEXT_SLIDE",
                                5 => "TEXT_BUTTON",
                                6 => "",
                            ),
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "COMPONENT_TEMPLATE" => "block_icons_hover",
                            "IBLOCK_ID" => "8",
                            "CHECK_DATES" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_FILTER" => "N",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "SET_TITLE" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "2",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "STRICT_SECTION_CHECK" => "Y",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    );?>
        </div>
    </div>
</section>
<!--End подбор ипотеки -->

<!-- Рекомендуемые объекты -->
<section class="modern-properties">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="devider"><span></span></div>
            <h2><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/recomend/title.php"
                    )
                );?></h2>
            <div class="text"><?$title = $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/home/recomend/subtitle.php"
                    )
                );?></div>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme">
            <!-- Modern Property -->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "recommend-objects",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "2",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "5",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "LOCATION",
                                1 => "CATEGORY",
                                2 => "PRICE",
                                3 => "AREA",
                                4 => "LIVING_SPACE",
                                5 => "KITCHEN_SPACE",
                                6 => "ROOMS",
                                7 => "FLOOR",
                                8 => "FLOOR_TOTAL",
                                9 => "BUILDING_TYPE",
                                10 => "ROOM_FURNITURE",
                                11 => "MAP",
                                12 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "recommend-objects"
                        ),
                        false
                    );?>


        </div>
    </div>
</section>
<!-- End популярные объекты -->

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "partners",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "10",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "ADDRESS",
                    2 => "PROPERTY_TYPE",
                    3 => "PRICE",
                    4 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "partners"
            ),
            false
        );?>
    </div>
</section>
<!--End Clients Section-->

<!-- News Section -->
<section class="news-section-two bg-grey">
    <div class="auto-container">
        <div class="sec-title">
            <div class="devider"><span></span></div>
            <h2>Новости</h2>
<!--            <div class="text">Последние новости о недвижимости</div>-->
        </div>
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "3",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "news"
                ),
                false
            );?>
        </div>
    </div>
</section>
<!--End News Section -->

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>

<script>
    var data = <?= json_encode($arParams)?>;
</script>
