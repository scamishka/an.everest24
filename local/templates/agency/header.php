<?//
//if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
//    die();
//?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/images/favicon.png" type="image/x-icon">

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/responsive.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/color-switcher-design.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/color-themes/default-theme.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/sass/custom.css"); ?>

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/respond.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/popper.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-ui.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/wow.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.matchheight.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/isotope.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/appear.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/script.js"); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/color-settings.js"); ?>
<!--    --><?// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/calc_script.js"); ?>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<div class="page-wrapper">
    <!-- Preloader -->
<!--    <div class="preloader"></div>-->

    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-phone-volume"></i> <a href="tel:">8 800 200-20-20</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:sale@everest24.com">sale@everest24.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <li><a href="index.html#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-skype"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>

<!--                        <ul class="login-signup">-->
<!--                            <li><a href="index.html#">Login</a></li>-->
<!--                            <li><a href="index.html#">SignUp</a></li>-->
<!--                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo">
                            <a href="/">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png"
                                data-src="<?= SITE_TEMPLATE_PATH ?>/images/logo_b1_meddium.png" alt="everest24" title="everest24">
                            </a>
                        </div>
                    </div>
                        <?global $USER;
                        if ($USER->IsAdmin()) {?>
                            <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "top_menu",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                                0 => "",
                                            ),
                                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        ),
                                        false
                                    );?>
                        <?}?>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title="">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png"
                             data-src="<?= SITE_TEMPLATE_PATH ?>/images/logo_b1_meddium.png" alt="everest24" title="everest24"></a>
                </div>
                <!--Right Col-->
                <div class="nav-outer pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="/">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png"
                             data-src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="" title="">
                    </a>
                </div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->
    <? if (CSite::InDir('/index.php')): ?>
    <!-- Banner Section -->
    <section class="banner-section-two">
        <?$APPLICATION->IncludeComponent(
                "bitrix:news.index",
                "home_slider",
                Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
            "IBLOCKS" => array(	// Код информационного блока
                0 => "7",
            ),
            "IBLOCK_SORT_BY" => "SORT",	// Поле для сортировки информационных блоков
            "IBLOCK_SORT_ORDER" => "ASC",	// Направление для сортировки информационных блоков
            "IBLOCK_TYPE" => "content",	// Тип информационных блоков
            "IBLOCK_URL" => "",	// URL, ведущий на страницу с содержимым раздела
            "NEWS_COUNT" => "3",	// Количество новостей в каждом блоке
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
        ),
            false
        );?>
    </section>
    <!--End Banner Section -->

    <?else:?>
        <!--Page Title-->
        <section class="page-title"
                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/background/4.jpg)">
            <div class="auto-container">
                <h1><?$APPLICATION->ShowTitle(false)?></h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><?$APPLICATION->ShowTitle()?></li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

    <section>
        <div class="auto-container">
    <?endif;?>

