<?php
$iblock_elem_id = $arParams['IBLOCK_ID'];
//$elem_code = $arParams['SALES_AGENT__ID'];
//$idManager = CIBlockFindTools::GetElementID(false, $elem_code, false, false, array("IBLOCK_ID" => $iblock_id));
$idManager = $arParams['SALES_AGENT__ID'];
    $countResult = CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => $iblock_elem_id,
            'ACTIVE' => 'Y',
            "PROPERTY_SALES_AGENT__ID" => $idManager
        ),
        array(),
        false,
        array('ID', 'NAME')
    );
    $arResult['COUNT_OBJECT_MANAGER'] = $countResult;

$select = array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
$filter = array(
    "IBLOCK_ID" => $arResult["PROPERTIES"]["SALES_AGENT__ID"]["LINK_IBLOCK_ID"],
    "ID" => $idManager,
);
$result = CIBlockElement::GetList(array(), $filter, false, array(), $select);
while ($ob = $result->GetNextElement()) {

//    $fields = $ob->GetFields();
//    print_r($fields);
    $props = $ob->GetProperties();

    $arResult['MANAGER'] = $props;
}
