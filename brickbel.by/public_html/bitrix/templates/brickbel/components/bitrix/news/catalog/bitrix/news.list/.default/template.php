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
		<div class="row gx-4 gy-5 mb-3">
			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<div class="col-12 col-sm-6 col-md-3 pb-4">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="products__link d-block position-relative rounded-2">
						<div class="row">
							<div class="col-12">
								<div class="mb-4">
									<picture>
										<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="w-100 h-100 rounded">
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
	</div>
</section>