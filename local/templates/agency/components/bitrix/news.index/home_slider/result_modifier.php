<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arItems = $arResult['IBLOCKS'][0]["ITEMS"];
foreach($arItems as $key=>$arItem):
    $valueImage = $arItem["PROPERTIES"]["IMAGE_SLIDE"]["VALUE"];
    if(isset($valueImage) )
    {
        $FILE = CFile::GetFileArray($valueImage);
        if(is_array($FILE)) {
            $thump = CFile::ResizeImageGet(
                $FILE,
                ['width' => 1920, 'height' => 850],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
            $arItems[$key]["IMAGE_SLIDE"]=$thump;
        }
    }
endforeach;
$arResult["ITEMS"] = $arItems;


