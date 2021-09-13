<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<? if (CSite::InDir('/index.php')): ?>
<?=''?>
<?else:?>


        </section>
    </div>
<?endif;?>

<!-- Main Footer -->
<footer class="main-footer" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/background/3.jpg);">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-lg-7 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- Upper column -->
                        <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                            <div class="footer-logo">
                                <figure class="image">
                                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/empty.png" data-src="<?= SITE_TEMPLATE_PATH ?>/images/logo_b1_footer_w.png" alt="everest24"></a></figure>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget popular-posts">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "news-footer",
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
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "2",
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
                                            0 => "ADDRESS",
                                            1 => "PROPERTY_TYPE",
                                            2 => "PRICE",
                                            3 => "",
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
                                        "COMPONENT_TEMPLATE" => "news-footer"
                                    ),
                                    false
                                );?>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-lg-5 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-12 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Меню</h2>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="/">Главная</a></li>
                                        <li><a href="/catalog/">Каталог</a></li>
                                        <li><a href="#">Информация</a></li>
                                        <li><a href="/contacts/">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-12 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Контакты</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="fa fa-map-marker-alt"></span> г.Краснодар, ул.Ваша улица 11</li>
                                        <li><span class="fa fa-phone-volume"></span><a href="tel:">88002002020</a></li>
                                        <li><span class="fa fa-envelope"></span><a href="mailto:info@everest24.com">info@agency.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="copyright-text">
                                <p>© 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Main Footer -->

</div>

<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-double-up"></span>
</div>
<script>
    $( document ).ready(function() {
        $('.main-menu [href]').each(function() {
            if (this.href == window.location.href) {
                $(this).parent().addClass('current');
            }
        });
    });
</script>

</body>
</html>
