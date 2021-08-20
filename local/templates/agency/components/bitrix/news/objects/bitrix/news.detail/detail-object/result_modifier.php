<?
$otherEl = [];
$IBLOCK_ID = $arResult['IBLOCK_ID'];
$IBLOCK_SECTION_ID = $arResult['IBLOCK_SECTION_ID'];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_PRICE", "PROPERTY_CITY", "PROPERTY_SQUARE");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "IBLOCK_SECTION_ID"=>$IBLOCK_SECTION_ID,"ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
    $element = $ob->GetFields();
    $element["PREVIEW_PICTURE"] = CFile::GetPath($element["PREVIEW_PICTURE"]);
    //array_push($otherEl, $arFields);
//    echo '<pre>';
//    print_r($arFields);
//    echo '</pre>';
    //$arProps = $ob->GetProperties();
    //array_push($arFields, $arProps);
    $arResult['OTHER_EL'][] = $element;
}


$arTmp = explode(',', $arResult['PROPERTIES']['MAP']['VALUE']);
$arResult['PROPERTIES']['MAP']['PLACEMARKET'] = array(
    'LON' => $arTmp[1],
    'LAT' => $arTmp[0]
);
