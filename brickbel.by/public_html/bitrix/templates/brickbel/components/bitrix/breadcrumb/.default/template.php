<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn .= '
<nav aria-label="breadcrumb">
	<ol class="breadcrumb mb-5 mt-3 bx-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"> ';

$itemSize = count($arResult);

// Check if there is a previous page
if (isset($_SERVER['HTTP_REFERER'])) {
	$previousPage = $_SERVER['HTTP_REFERER'];

	$strReturn .= '
	<li class="fs-14 breadcrumb-item bx-breadcrumb-item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a  href="' . $previousPage . '" title="Назад" itemprop="item">
            Назад
        </a>
		<meta itemprop="position" content="' . ($index + 1) . '">
		</li>
    ';
}

for ($index = 1; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
		<li class="fs-14 breadcrumb-item bx-breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a  href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="item">
                ' . $title . '
            </a>
			<meta itemprop="position" content="' . ($index + 1) . '">
			</li>
        ';
	} else {
		$strReturn .= '
		<li class="fs-14 breadcrumb-item active" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" aria-current="page" itemscope itemtype="http://schema.org/ListItem">
            <span >' . $title . '</span>
			<meta itemprop="position" content="' . ($index + 1) . '">
        ';
	}
}

$strReturn .= '</nav>';

return $strReturn;
