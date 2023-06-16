<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()


$strReturn .= '<div class="breadcrumb fs-14 fw-300 mb-0" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
			<span class="breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="item">
					<span itemprop="name">' . $title . '</span>
				</a>
				<meta itemprop="position" content="' . ($index + 1) . '" />
			</span>';
	} else {
		$strReturn .= '
			<span class="breadcrumb-item">
				<span class="name">' . $title . '</span>
			</span>';
	}
}

$strReturn .= '</div>';

return $strReturn;
