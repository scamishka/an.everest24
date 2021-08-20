<?
$hShopz = CIBlockElement::GetList(array(), array('ID'=>1,'IBLOCK_ID'=>1, 'ACTIVE'=>'Y'), false, false, array('ID', 'NAME', 'PROPERTY_MAP'));
while($row = $hShopz->Fetch())
{
    $arTmp = explode(',', $row['PROPERTY_MAP_VALUE']);
    $arResult['POSITION']['PLACEMARKS'][] = array(
        'LON' => $arTmp[1],
        'LAT' => $arTmp[0],
        'TEXT' => $row['NAME'],
    );
}
//echo '<pre>';
//print_r($arResult);
//echo '</pre>';
