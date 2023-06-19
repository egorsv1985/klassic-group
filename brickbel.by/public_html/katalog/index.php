<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog",
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7200",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "CONTENT",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0 => "NAME", 1 => "PICTURE", 2 => "",),
		"SECTION_ID" => "0",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0 => "", 1 => "",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);
?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>