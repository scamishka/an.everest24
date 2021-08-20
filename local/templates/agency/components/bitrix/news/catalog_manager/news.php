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
<!--Page Title-->
<section class="page-title"
         style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/background/4.jpg)">
    <div class="auto-container">
        <h1>Список объектов недвижимости</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Каталог</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">
                    <!-- About Agent -->

                    <?if(isset($_GET['arrFilter_pf']['SALES_AGENT__NAME'])):?>
                    <div class="sidebar-widget about-agent-widget">
                        <div class="sidebar-title">
                            <h2>Менеджер</h2>
                        </div>
                        <div class="widget-content">
                            <div class="info-box">
                                <h3 class="name"><?=$_GET['arrFilter_pf']['SALES_AGENT__NAME']?></h3>
                                <?if($_GET['arrFilter_pf']['SALES_AGENT__CATEGORY']) {?>
                                    <span class="designation"><?=$_GET['arrFilter_pf']['SALES_AGENT__CATEGORY']?></span>
                                <?} else {?>
                                    <span class="designation">Специалист по недвижимости</span>
                                <?}?>
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
                                        12 => "SALES_AGENT__NAME",
                                        13 => "SALES_AGENT__PHONE",
                                        14 => "SALES_AGENT__EMAIL"
                                    ) ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.filter",
                                    "manager-card",
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
                                <ul class="contact-info">
                                    <li><strong>Тел:</strong><a href="tel:<?=$_GET['arrFilter_pf']['SALES_AGENT__PHONE']?>"><?=$_GET['arrFilter_pf']['SALES_AGENT__PHONE']?></a></li>
                                    <li><strong>Email:</strong><a href="mailto:<?=$_GET['arrFilter_pf']['SALES_AGENT__EMAIL']?>"><?=$_GET['arrFilter_pf']['SALES_AGENT__EMAIL']?></a></li>
                                    <!--                                    <li><a href="#"><strong>Все объекты менеджера</strong></a></li>-->
                                </ul>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Звонок </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>

                    <?global $USER;
                    if ($USER->IsAdmin()) {?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:catalog.filter",
                            "",
                            Array(
                                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "FILTER_NAME" => $arParams["FILTER_NAME"],
                                "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                                "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                "CACHE_TIME" => $arParams["CACHE_TIME"],
                                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            ),
                            $component
                        );
                        ?>
                    <?} else {?>
                        <? if ($arParams["USE_FILTER"] == "Y"): ?>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:catalog.filter",
                                "",
                                Array(
                                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                                    "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                                    "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                ),
                                $component
                            );
                            ?>
                        <? endif ?>
                    <?}?>
                </aside>
            </div>

            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="property-list-view">

                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "objects-list",
                            Array(
                                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "NEWS_COUNT" => $arParams["NEWS_COUNT"],
                                "SORT_BY1" => $arParams["SORT_BY1"],
                                "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                                "SORT_BY2" => $arParams["SORT_BY2"],
                                "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                                "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                                "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                                "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                                "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                                "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                                "SET_TITLE" => $arParams["SET_TITLE"],
                                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                                "MESSAGE_404" => $arParams["MESSAGE_404"],
                                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                                "SHOW_404" => $arParams["SHOW_404"],
                                "FILE_404" => $arParams["FILE_404"],
                                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                "CACHE_TIME" => $arParams["CACHE_TIME"],
                                "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                                "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                                "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                                "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                                "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                                "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                                "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                                "FILTER_NAME" => $arParams["FILTER_NAME"],
                                "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                                "CHECK_DATES" => $arParams["CHECK_DATES"],
                            ),
                            $component
                        ); ?>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Sidebar Container -->
