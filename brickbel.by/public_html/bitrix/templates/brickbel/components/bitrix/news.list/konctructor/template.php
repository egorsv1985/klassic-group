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
// print_r($arResult);
?>
<section class="promo-constructor position-relative pb-5" id="promo-constructor">
	<div class="container position-relative">
		<div class="swiper mySwiper2 mb-5">
			<div class="swiper-wrapper">

				<? foreach ($arResult["ITEMS"] as $arItem) :
					if (CModule::IncludeModule("millcom.phpthumb")) {
						$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 7);
						$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 8);
					} ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// print_r($arItem);
					?>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img class="rounded-2 w-100" src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>">
						</picture>
					</div>

				<? endforeach; ?>
			</div>
		</div>
		<div thumbsSlider="" class="swiper mySwiper">
			<div class="swiper-wrapper mb-3">
				<? foreach ($arResult["ITEMS"] as $arItem) :
					$arItem["DETAIL_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["DETAIL_PICTURE"]["SRC"], 9);
					$arItem["DETAIL_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["DETAIL_PICTURE"]["SRC"], 10); ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// print_r($arItem);
					?>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?= $arItem["DETAIL_PICTURE"]["WEBP"] ?>" type="image/webp"><img class="rounded-2 w-100" src="<?= $arItem["DETAIL_PICTURE"]["PNG"] ?>">
						</picture>
					</div>

				<? endforeach; ?>
			</div>
		</div>
		<div class="swiper-control w-100">
			<div class="container position-relative d-flex justify-content-end gap-3">
				<div class="swiper-button-prev rounded-circle border border-primary"></div>
				<div class="swiper-button-next rounded-circle border border-primary"></div>
			</div>
		</div>
	</div>
</section>