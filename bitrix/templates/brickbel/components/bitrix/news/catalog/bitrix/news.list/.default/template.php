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
?>


<section class="products pb-5">
	<div class="container">
		<div class="row gx-4 gy-3 mb-4 justify-content-center">

			<? $counter = 1;
			foreach ($arResult["ITEMS"] as $arItem) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 1);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 2);
					$arItem["PREVIEW_PICTURE"]["BOX"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 25);
				}

			?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-12 col-sm-6 col-md-3 pb-4">

					<div class="row">
						<div class="col-12">
							<div class="mb-4">
								<a href="<?= $arItem["PREVIEW_PICTURE"]["BOX"] ?>" class="fancy" data-fancybox="gallery-<?= $counter ?>">
									<picture>
										<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100 h-100 rounded">
									</picture>
								</a>
							</div>
							<? if ($arItem["PROPERTIES"]["PRICE_2"]["VALUE"]) : ?>
								<span class="fs-20 fw-700 ff-roboto lh-11 d-block mb-3"><?= $arItem["PROPERTIES"]["PRICE_2"]["VALUE"] ?>/м<sup>2</sup></span>
							<? else : ?>
								<span class="fs-20 fw-700 ff-roboto lh-11 d-block mb-3">По запросу</span>
							<? endif; ?>
							<span class="fs-18 ff-roboto lh-11 d-block mb-4"><?= $arItem["NAME"] ?></span>
							<a class="btn fs-20 fw-500 px-3 py-3 btn-primary <?= (strpos($APPLICATION->GetCurPage(), 'zelenye-zabory')  !== false) ? ' btn--green' : '' ?> <?= (strpos($APPLICATION->GetCurPage(), 'interernye-akusticheskie-paneli')  !== false) ? ' btn--gray' : '' ?> bg-gradient w-100" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" role="button" title="Подробнее">Подробнее</a>
						</div>
					</div>

				</div>
				<? $counter++; ?>
			<? endforeach; ?>
		</div>
		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
			<?= $arResult["NAV_STRING"] ?>
		<? endif; ?>
	</div>
</section>