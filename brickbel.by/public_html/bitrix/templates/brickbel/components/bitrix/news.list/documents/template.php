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
<section class="documents py-5" id="documents">
	<div class="container">
		<div class="row justify-content-end mb-5 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ДОКУМЕНТЫ</h3=>
			</div>
		</div>
		<div class="fs-40 ff-roboto fw-700 mb-4">
			<h2>Лицензии и сертификаты</h2>
		</div>
		<div class="position-relative">
			<div class="swiper documentsSwiper mb-3">
				<div class="swiper-wrapper">
					<?

					foreach ($arResult["ITEMS"] as $arItem) : 
						if (CModule::IncludeModule("millcom.phpthumb")) {
							$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);
							$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 6);
						}
					?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						// print_r($arItem);
						?><div class="swiper-slide">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100 rounded-2" width="263">
							</picture>
						</div>

					<? endforeach; ?>

				</div>
			</div>
			<div class="swiper-control w-100">
				<div class="container position-relative d-flex justify-content-end gap-3">
					<div class="swiper-button-prev rounded-circle border border-primary">
					</div>

					<div class="swiper-button-next rounded-circle border border-primary"></div>
				</div>
			</div>
		</div>
	</div>
</section>