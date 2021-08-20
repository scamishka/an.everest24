<?php
$iblock_elem_id = $arParams['IBLOCK_ID'];
$elem_code = $arParams['SALES_AGENT__ID'];
$idManager = CIBlockFindTools::GetElementID(false, $elem_code, false, false, array("IBLOCK_ID" => $iblock_id));
$arResult['ITEMS']['PROPERTY_68']['INPUT'] = $idManager;
$countResult = CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => $iblock_id,
            'ACTIVE' => 'Y',
            "PROPERTY_SALES_AGENT__ID" => $idManager
        ),
        array(),
        false,
        array('ID', 'NAME')
    );
    $arResult['COUNT_OBJECT_MANAGER'] = $countResult;



