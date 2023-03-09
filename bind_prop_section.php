<?php
require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\Loader::includeModule('iblock'); ///Подключаем модуль информационного блока
for ($i=3603;$i<=3655;$i++) ///Указываем диапазон свойств
{
    CIBlockSectionPropertyLink::Add(141, $i, $arLink = array(‘SMART_FILTER’ => ‘Y’)); ///Привязываем свойство к определённому разделу
        ///где 141 — ID раздела, $i — ID свойства, $arLink — массив параметров, например включить свойство в смарт-фильтр.
}
?>
