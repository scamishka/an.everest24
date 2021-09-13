<?php
$iblock_elem_id = $arParams['IBLOCK_ID'];
//$elem_code = $arParams['SALES_AGENT__ID'];
//$idManager = CIBlockFindTools::GetElementID(false, $elem_code, false, false, array("IBLOCK_ID" => $iblock_id));
$idManager = $arParams['SALES_AGENT__ID'];
$arResult['ITEMS']['PROPERTY_68']['INPUT_VALUE'] = $idManager;
//echo '<pre>';
//print_r($_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"]);
//echo '</pre>';


//$arResult['ITEMS']['PROPERTY_82']['INPUT_VALUE'] = $_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"];


//$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_TEXT", "PROPERTY_LOCATION__MICRO_LOCALITY_NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
//$arFilter = Array(
//    "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
//    "ACTIVE"=>"Y",
//    "PROPERTY_LOCATION__MICRO_LOCALITY_NAME"=>$_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"]
//);
//$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
//while($ob = $res->GetNextElement()){
//    $arFields = $ob->GetFields();
//    print_r($arFields);
//    $arProps = $ob->GetProperties();
//    print_r($arProps);
//}




