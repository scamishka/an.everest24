<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$arResult["IMAGE"] = array();
global $USER;
//global $USER;
//if ($USER->IsAdmin()) {
    $iblock = $arParams['IBLOCK_ID'];
    if($_GET["arrFilter_pf"]) {
        $arFilter = Array(
            "IBLOCK_ID"=>$iblock,
            "ACTIVE"=>"Y",
        );
//        echo '<pre>';
//        print_r($_GET["arrFilter_pf"]);
//        echo '</pre>';
        if($_GET["arrFilter_pf"]["SALES_AGENT__ID"]) {
            $filter_agent = array(
                "SALES_AGENT__ID" => $_GET["arrFilter_pf"]["SALES_AGENT__ID"]
            );
            $arFilter["PROPERTY_SALES_AGENT__ID"] = $_GET["arrFilter_pf"]["SALES_AGENT__ID"];
        }
        if($_GET["arrFilter_pf"]["CATEGORY"]) {
            $filter_category = array(
                "PROPERTY_CATEGORY" => $_GET["arrFilter_pf"]["CATEGORY"]
            );
            $arFilter["PROPERTY_CATEGORY"] = $_GET["arrFilter_pf"]["CATEGORY"];
        }
        if($_GET["arrFilter_pf"]["ROOMS"]) {
            $filter_rooms = array(
                "PROPERTY_ROOMS" =>$_GET["arrFilter_pf"]["ROOMS"]
            );
            $arFilter["PROPERTY_ROOMS"] = $_GET["arrFilter_pf"]["ROOMS"];
        }
        if($_GET["arrFilter_pf"]["PRICE"]["LEFT"]) {
            $filter_price = array(
                "><PROPERTY_PRICE" => array($_GET["arrFilter_pf"]["PRICE"]["LEFT"], $_GET["arrFilter_pf"]["PRICE"]["RIGHT"])
            );
            $arFilter += $filter_price;
        }
        if($_GET["arrFilter_pf"]["AREA"]["LEFT"]) {
            $filter_area = array(
                "><PROPERTY_AREA" =>array($_GET["arrFilter_pf"]["AREA"]["LEFT"], $_GET["arrFilter_pf"]["AREA"]["RIGHT"])
            );
            $arFilter["><PROPERTY_AREA"] = array($_GET["arrFilter_pf"]["AREA"]["LEFT"], $_GET["arrFilter_pf"]["AREA"]["RIGHT"]);
        }
        if($_GET["arrFilter_pf"]["FLOOR"]["LEFT"]) {
            $filter_floor = array(
                "><PROPERTY_FLOOR" =>array($_GET["arrFilter_pf"]["FLOOR"]["LEFT"], $_GET["arrFilter_pf"]["FLOOR"]["RIGHT"])
            );
            $arFilter["><PROPERTY_FLOOR"] = array($_GET["arrFilter_pf"]["FLOOR"]["LEFT"], $_GET["arrFilter_pf"]["FLOOR"]["RIGHT"]);
        }
        if($_GET["arrFilter_pf"]["LOCATION__LOCALITY_NAME"]) {
            $filter_locality = array(
                "PROPERTY_LOCATION__LOCALITY_NAME" => $_GET["arrFilter_pf"]["LOCATION__LOCALITY_NAME"]
            );
            $arFilter["PROPERTY_LOCATION__LOCALITY_NAME"] = $_GET["arrFilter_pf"]["LOCATION__LOCALITY_NAME"];
        }
        if($_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"]) {
            $filter_micro_locality = array(
                "PROPERTY_LOCATION__MICRO_LOCALITY_NAME" => $_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"]
            );
            $arFilter["PROPERTY_LOCATION__MICRO_LOCALITY_NAME"] = $_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"];
        }
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_TEXT", "DETAIL_PAGE_URL",
            "PROPERTY_LOCATION__MICRO_LOCALITY_NAME",
            "PROPERTY_LOCATION__LOCALITY_NAME",
            "PROPERTY_AREA",
            "PROPERTY_FLOOR",
            "PROPERTY_ROOMS",
            "PROPERTY_CATEGORY"
        );
//     echo '<pre>';
//     print_r($arFilter);
//     echo '</pre>';
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
        $res->NavStart(10);
        $NAV_STRING = $res->GetPageNavStringEx($navComponentObject, "", "quatro", true, null, array());
        $arResult["NAV_STRING"] = $NAV_STRING;
        while($ob = $res->GetNextElement()){
            $arFields = $ob->GetFields();
            $arItems[$arFields['ID']] = $arFields;
            $arProps = $ob->GetProperties();
            $arItems[$arFields['ID']]['PROPERTIES'] = $arProps;
        }
//     echo '<pre>';
//     print_r(count($arItems));
//     echo '</pre>';
        $arResult['ITEMS'] = $arItems;
    }
//}

foreach($arResult["ITEMS"] as $key=>$arItem):
    $item_micro_locality = $arItem["PROPERTIES"]["LOCATION__MICRO_LOCALITY_NAME"]["VALUE"][0];
    $filter_micro_locality = $_GET["arrFilter_pf"]["LOCATION__MICRO_LOCALITY_NAME"];

    if(isset($arItem["PROPERTIES"]["IMAGE"]["VALUE"]) && is_array($arItem["PROPERTIES"]["IMAGE"]["VALUE"]))
    {
        foreach($arItem["PROPERTIES"]["IMAGE"]["VALUE"] as $id => $FILE)
        {
            $FILE = CFile::GetFileArray($FILE);
            if(is_array($FILE))
                $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]=$FILE;
            $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]["THUMP"] = CFile::ResizeImageGet(
                $FILE,
                ['width' => 370, 'height' => 270],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        }
    }

endforeach;


