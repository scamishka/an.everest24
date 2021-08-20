<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--Nav Box-->
<div class="nav-outer clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

    <!-- Main Menu -->
    <nav class="main-menu navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

            <?if (!empty($arResult)):?>
            <ul class="navigation clearfix">

            <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
            ?>
                <?if($arItem["SELECTED"]):?>
                    <li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
                <?else:?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?endif?>

            <?endforeach?>

            </ul>
            <?endif?>
            <div class="outer-box">
                <!-- Btn Box -->
                <div class="btn-box">
                    <a href="#"
                       class="theme-btn btn-style-one">
                        <span class="btn-title">Заказ звонка</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>



