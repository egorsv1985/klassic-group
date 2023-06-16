<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";


$strReturn .= '<nav class="breadcrumb mb-5 mt-3 bx-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" > ';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? '<i class="fa fa-angle-right"></i>' : '');

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
			
				<a class="fs-14 breadcrumb-item bx-breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="item">
					' . $title . '
				</a>
				
			';
	} else {
		$strReturn .= '
			
				
				<span class="fs-14 breadcrumb-item active" aria-current="page">' . $title . '</span>
			';
	}
}

$strReturn .= '</nav>';

return $strReturn;
