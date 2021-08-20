<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$dbResSect = CIBlockSection::GetList(
    Array("SORT" => "ASC"),
    Array("IBLOCK_ID" => $arParams['IBLOCK_ID'])
);
//Получаем разделы и собираем в массив
while ($sectRes = $dbResSect->GetNext()) {
    $arSections[$sectRes['ID']] = $sectRes;
}

foreach ($arResult["ITEMS"] as $key => $arItem) {
    $arSections[$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
}

$arResult["SECTIONS"] = $arSections;
$arRes = [];
foreach ($arResult["SECTIONS"] as $key => $arSect) {
    if ($arSect ['DEPTH_LEVEL'] == 2) {
        $arRes[$arSect['ID']]['INFO'] = $arSect;
    } else if ($arSect ['DEPTH_LEVEL'] > 2) {
        $arRes[$arSect['IBLOCK_SECTION_ID']]['SECTIONS'][$arSect['ID']] = $arSect;
    } else ' ';

}
$arResult["SECT"] = $arRes;
//echo '<pre>';
//print_r($arResult["SECTIONS"]);
//echo '</pre>';
