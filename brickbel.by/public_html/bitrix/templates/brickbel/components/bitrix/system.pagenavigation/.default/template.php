<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-md-end justify-content-center align-items-center">
        <? if ($arResult["NavPageNomer"] > 1): ?>
            <!-- Предыдущая страница -->
            <li class="page-item">
                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" aria-label="Previous">
                    <span aria-hidden="true">
                        <span class="page-prev d-flex justify-content-center align-items-center rounded-circle border border-primary me-3"></span>
                    </span>
                </a>
            </li>
        <? else: ?>
            <!-- Деактивированная кнопка предыдущей страницы -->
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                        <span class="page-prev d-flex justify-content-center align-items-center rounded-circle border border-primary me-3"></span>
                    </span>
                </a>
            </li>
        <? endif ?>

        <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <!-- Текущая активная страница -->
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#"><?=$arResult["nStartPage"]?></a>
                </li>
            <? else: ?>
                <!-- Обычная страница -->
                <li class="page-item">
                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
                </li>
            <? endif ?>
            <? $arResult["nStartPage"]++ ?>
        <? endwhile ?>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <!-- Следующая страница -->
            <li class="page-item">
                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" aria-label="Next">
                    <span aria-hidden="true">
                        <span class="page-next d-flex justify-content-center align-items-center rounded-circle border border-primary ms-3"></span>
                    </span>
                </a>
            </li>
        <? else: ?>
            <!-- Деактивированная кнопка следующей страницы -->
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">
                        <span class="page-next d-flex justify-content-center align-items-center rounded-circle border border-primary ms-3"></span>
                    </span>
                </a>
            </li>
        <? endif ?>

        <? if ($arResult["NavPageCount"] > ($arResult["NavPageNomer"] + 1)): ?>
            <!-- Элемент списка с многоточием, если есть еще страницы -->
            <li class="page-item disabled">
                <a class="page-link" href="#">...</a>
            </li>
        <? endif ?>
    </ul>
</nav>
