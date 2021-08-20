<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>


<!--Post Share Options-->
<!--<div class="styled-pagination text-center">-->
<!--    <ul class="clearfix">-->
<!--        <li class="prev-post">-->
<!--            <a href="property-list-view.html#">-->
<!--                <span class="fa fa-angle-left"></span> Prev-->
<!--            </a>-->
<!--        </li>-->
<!--        <li><a href="property-list-view.html#">1</a></li>-->
<!--        <li><a href="property-list-view.html#">2</a></li>-->
<!--        <li class="active"><a href="property-list-view.html#">3</a></li>-->
<!--        <li><a href="property-list-view.html#">4</a></li>-->
<!--        <li><a href="property-list-view.html#">5</a></li>-->
<!--        <li class="next-post">-->
<!--            <a href="property-list-view.html#"> Next <span class="fa fa-angle-right"></span> </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->


<div class="styled-pagination text-center <?=$colorScheme?>">
		<ul class="clearfix">
<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<li class="prev-post">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                    <span class="fa fa-angle-left"></span><?echo GetMessage("round_nav_back")?></a>
            </li>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                    <span class="fa fa-angle-left"></span>1</a></li>
		<?else:?>
			<?if (($arResult["NavPageNomer"]+1) == $arResult["NavPageCount"]):?>
				<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                        <span><?echo GetMessage("round_nav_back")?></span></a></li>
			<?else:?>
				<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></li>
			<?endif?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                    <span class="fa fa-angle-left"></span>1</a></li>
		<?endif?>
	<?else:?>
			<li class="prev-post"><span class="fa fa-angle-left"></span><a><?echo GetMessage("round_nav_back")?></a></li>
			<li class="bx-active"><a>1</a></li>
	<?endif?>

	<?
	$arResult["nStartPage"]--;
	while($arResult["nStartPage"] >= $arResult["nEndPage"]+1):
	?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="bx-active"><span><?=$NavRecordGroupPrint?></span></li>
		<?else:?>
			<li class=""><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><span><?=$NavRecordGroupPrint?></span></a></li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class=""><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><span><?=$arResult["NavPageCount"]?></span></a></li>
		<?endif?>
			<li class="next-post">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_forward")?></span>
                </a>
            </li>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="active"><span><?=$arResult["NavPageCount"]?></span></li>
		<?endif?>
			<li class="next-post"><span class="fa fa-angle-right"></span>></li>
	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
			<li class="prev-post"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></li>
			<li ><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><span>1</span></a></li>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
				<li class="prev-post"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></li>
			<?else:?>
				<li class="prev-post"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span><?echo GetMessage("round_nav_back")?></span></a></li>
			<?endif?>
			<li class=""><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span>1</span></a></li>
		<?endif?>
	<?else:?>
			<li class="prev-post"><span><a><?echo GetMessage("round_nav_back")?></a></span></li>
			<li class="active"><span>1</span></li>
	<?endif?>

	<?
	$arResult["nStartPage"]++;
	while($arResult["nStartPage"] <= $arResult["nEndPage"]-1):
	?>
		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="active"><span><?=$arResult["nStartPage"]?></span></li>
		<?else:?>
			<li class=""><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><span><?=$arResult["nStartPage"]?></span></a></li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class=""><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><span><?=$arResult["NavPageCount"]?></span></a></li>
		<?endif?>
			<li class="next-post"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span><?echo GetMessage("round_nav_forward")?></span></a></li>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
			<li class="active"><span><?=$arResult["NavPageCount"]?></span></li>
		<?endif?>
        <li class="next-post"><span ></span><a>></a></li>
	<?endif?>
<?endif?>
		</ul>
		<div style="clear:both"></div>
</div>
