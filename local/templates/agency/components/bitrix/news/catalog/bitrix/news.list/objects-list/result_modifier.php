<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$arResult["IMAGE"] = array();
global $USER;
foreach($arResult["ITEMS"] as $key=>$arItem):
    if(isset($arItem["PROPERTIES"]["IMAGE"]["VALUE"]) && is_array($arItem["PROPERTIES"]["IMAGE"]["VALUE"]))
    {
        foreach($arItem["PROPERTIES"]["IMAGE"]["VALUE"] as $id => $FILE)
        {
            $FILE = CFile::GetFileArray($FILE);
            if(is_array($FILE))
                $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]=$FILE;
//                echo '<pre>';
//                print_r($FILE["SRC"]);
//                echo '</pre>';
            $arResult['ITEMS'][$key]["PROPERTIES"]["IMAGE"]["VALUE"][$id]["THUMP"] = CFile::ResizeImageGet(
                $FILE,
                ['width' => 370, 'height' => 270],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        }
    }
endforeach;
