<?
foreach ($arResult["ITEMS"] as $key => $item):
    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "PROPERTY_*");
    $arFilter = Array(
        "IBLOCK_ID"=> 9,
        "ID" => $item["PROPERTIES"]["ICON"]["VALUE"],
    );
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {

//    $fields = $ob->GetFields();

//    print_r($fields);
        $props = $ob->GetProperties();
        $arResult['ITEMS'][$key]["PROPERTIES"]["ICON"] = $props;
    }

endforeach;

