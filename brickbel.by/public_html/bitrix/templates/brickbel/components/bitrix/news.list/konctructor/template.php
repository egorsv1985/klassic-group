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

				<? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// print_r($arItem);
					?>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img class="rounded-2 w-100" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
						</picture>
					</div>

				<? endforeach; ?>
			</div>
		</div>
		<div thumbsSlider="" class="swiper mySwiper">
			<div class="swiper-wrapper mb-3">
				<? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// print_r($arItem);
					?>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?= $arItem["DETAIL_PICTUREE"]["SRC"] ?>" type="image/webp"><img class="rounded-2 w-100" src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>">
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
