<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$arResult["IMAGE"] = array();
foreach($arResult["ITEMS"] as $key=>$arItem):
    if(isset($arItem["PROPERTIES"]["IMAGE"]["VALUE"]) && is_array($arItem["PROPERTIES"]["IMAGE"]["VALUE"]))
    {
        foreach($arItem["PROPERTIES"]["IMAGE"]["VALUE"] as $id => $FILE)
        {
            $FILE = CFile::GetFileArray($FILE);
            if(is_array($FILE))
                $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]=$FILE;
            $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]["THUMP"] = CFile::ResizeImageGet(
                $FILE,
                ['width' => 535, 'height' => 510],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        }
    }
endforeach;
