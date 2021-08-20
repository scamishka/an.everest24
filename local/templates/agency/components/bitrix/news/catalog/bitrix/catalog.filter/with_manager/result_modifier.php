<?php
$iblock_elem_id = $arParams['IBLOCK_ID'];
//$elem_code = $arParams['SALES_AGENT__ID'];
//$idManager = CIBlockFindTools::GetElementID(false, $elem_code, false, false, array("IBLOCK_ID" => $iblock_id));
$idManager = $arParams['SALES_AGENT__ID'];
$arResult['ITEMS']['PROPERTY_68']['INPUT_VALUE'] = $idManager;



