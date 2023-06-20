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
<section class="articles pb-5">
	<div class="container">
		<div class="row gy-3 mb-4">
			<? foreach ($arResult["ITEMS"] as $arItem) :
				//print_r($arItem);
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 19);
					$arItem["PREVIEW_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 20);
				}
			?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-12 col-md-6 col-lg-4">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
						<div class="d-block rounded-2 mb-4">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100 d-block rounded-2">
							</picture>
						</div>
						<div class="fs-16 fw-500 text-dark mb-2">
							<span><?= date('d/m/Y', strtotime($arItem['DATE_ACTIVE_FROM'])); ?></span>
						</div>
						<div class="fs-20 fw-600 lh-11 ff-roboto">
							<?= $arItem["NAME"] ?>
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