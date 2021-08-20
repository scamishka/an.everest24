<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$arResult["MORE_PHOTO"] = array();
foreach($arResult["ITEMS"] as $key=>$arItem):
    if(isset($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) && is_array($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]))
    {
        foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $id => $FILE)
        {
            $FILE = CFile::GetFileArray($FILE);
            if(is_array($FILE))
                $arResult['ITEMS'][$key]["PROPERTIES"]["MORE_PHOTO"]["VALUE"][$id]=$FILE;
//                echo '<pre>';
//                print_r($FILE["SRC"]);
//                echo '</pre>';
            $arResult['ITEMS'][$key]["PROPERTIES"]["MORE_PHOTO"]["VALUE"][$id]["THUMP"] = CFile::ResizeImageGet(
                $FILE,
                ['width' => 720, 'height' => 538],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        }
    }
endforeach;
