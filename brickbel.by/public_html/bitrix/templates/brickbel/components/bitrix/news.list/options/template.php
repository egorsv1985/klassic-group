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

<section class="options py-5">
	<div class="container">
		<div class="row justify-content-end mb-5 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ВАРИАНТЫ ПРИМЕНЕНИЯ</h3>
			</div>
		</div>
		<div class="row gy-3">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 17);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 18);
				}
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="col-12 col-md-6 col-lg-4">
					<a href="#">
						<div class="d-block mb-4">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100" width="360">
							</picture>
						</div>
						<div class="fs-20 fw-600 lh-11 ff-roboto">
							<h3><? echo $arItem["NAME"] ?></h3>
						</div>
					</a>
				</div>

			<? endforeach; ?>
		</div>
	</div>
</section>