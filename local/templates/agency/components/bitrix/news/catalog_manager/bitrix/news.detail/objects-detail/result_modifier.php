<?
$otherEl = [];
$IBLOCK_ID = $arParams['IBLOCK_ID'];
$IBLOCK_SECTION_ID = $arResult['IBLOCK_SECTION_ID'];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PROPERTY_PRICE", "PROPERTY_LOCATION", "PROPERTY_CATEGORY", "PROPERTY_AREA", "PROPERTY_MORE_PHOTO", "PROPERTY_FLOOR", "PROPERTY_ROOMS");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y");

$res = CIBlockElement::GetList(array("SHOW_COUNTER"=>"DESC"), $arFilter, false, array("nTopCount"=>8), false);
while($ob = $res->GetNextElement()){
    $element = $ob->GetFields();
    $element["PREVIEW_PICTURE"] = CFile::GetPath($element["PREVIEW_PICTURE"]);

    $props = $ob->GetProperties();
    $element['PROPERTIES'] = $props;
    $arResult['OTHER_EL'][] = $element;
}

foreach ($arResult['OTHER_EL'] as $key => $element) {
    if(isset($element["PROPERTIES"]["IMAGE"]["VALUE"]) && is_array($element["PROPERTIES"]["IMAGE"]["VALUE"]))
    {
        foreach($element["PROPERTIES"]["IMAGE"]["VALUE"] as $id => $FILE)
        {
            $idFile = $FILE;
            $FILE = CFile::GetFileArray($FILE);
            if(is_array($FILE))
                $element["PROPERTIES"]["IMAGE"]["VALUE"][$id]=$FILE;
//        $arResult['OTHER_EL']["PROPERTIES"]["MORE_PHOTO"]["VALUE"][$id]["BIG"] = CFile::ResizeImageGet(
//            $FILE,
//            ['width' => 1170, 'height' => 620],
//            BX_RESIZE_IMAGE_EXACT,
//            true
//        );
            $res = CFile::ResizeImageGet(
                $FILE,
                ['width' => 340, 'height' => 220],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
            $arResult['OTHER_EL'][$key]["PROPERTIES"]["IMAGE"]["THUMP"][$idFile] = $res;
        }
    }
}

$arTmp = explode(',', $arResult['PROPERTIES']['MAP']['VALUE']);
$arResult['PROPERTIES']['MAP']['PLACEMARKET'] = array(
    'LON' => $arTmp[1],
    'LAT' => $arTmp[0]
);

if(isset($arResult["PROPERTIES"]["IMAGE"]["VALUE"]) && is_array($arResult["PROPERTIES"]["IMAGE"]["VALUE"]))
{
    foreach($arResult["PROPERTIES"]["IMAGE"]["VALUE"] as $id => $FILE)
    {
        $FILE = CFile::GetFileArray($FILE);
        if(is_array($FILE))
            $arResult["PROPERTIES"]["IMAGE"]["VALUE"][$id]=$FILE;
//                echo '<pre>';
//                print_r($FILE["SRC"]);
//                echo '</pre>';
        $arResult["PROPERTIES"]["IMAGE"]["VALUE"][$id]["BIG"] = CFile::ResizeImageGet(
            $FILE,
            ['width' => 1170, 'height' => 620],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
        $arResult["PROPERTIES"]["IMAGE"]["VALUE"][$id]["THUMP"] = CFile::ResizeImageGet(
            $FILE,
            ['width' => 340, 'height' => 220],
            BX_RESIZE_IMAGE_EXACT,
            true
        );
    }
}
