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


<section class="products pb-5">
	<div class="container">
		<div class="row gx-4 gy-3 mb-4">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 1);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 2);
				}

			?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-12 col-sm-6 col-md-3 pb-4">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="d-block" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
						<div class="row">
							<div class="col-12">
								<div class="mb-4">
									<picture>
										<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100 h-100 rounded">
									</picture>
								</div>
								<span class="fs-20 fw-700 ff-roboto lh-11 d-block mb-3"><? echo $arItem["PROPERTIES"]["PRICE_2"]["VALUE"] ?>/м2</span>
								<span class="fs-18 ff-roboto lh-11 d-block mb-4"><?= $arItem["NAME"] ?></span>
								<a class="btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient w-100" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" role="button" title="Подробнее">Подробнее</a>
							</div>
						</div>
					</a>
				</div>
			<? endforeach; ?>
		</div>
		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
			<?= $arResult["NAV_STRING"] ?>
		<? endif; ?>
	</div>
</section>