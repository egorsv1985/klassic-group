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
<section class="review py-5 bg-success">
	<div class="container">
		<div class="row justify-content-end mb-5 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ОТЗЫВЫ</h3>
			</div>
		</div>
		<div class="fs-40 ff-roboto fw-700 mb-3">
			<h2>Наши клиенты говорят</h2>
		</div>
		<div class="review__scroll simplebar-scrollable-y" data-simplebar data-simplebar-auto-hide="false" data-simplebar-click-on-track="false">
			<div class="row  py-4 overflow-hidden gy-4">
				<?

				foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// print_r($arItem);
					?>
					<div class="review__box position-relative col-3 offset-1 pb-5">
						<div class="d-flex align-items-center gap-4 mb-3">
							<div class="rounded-circle">
								<picture>
									<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100 rounded-circle" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
								</picture>
							</div>
							<div class="fs-20 fw-600 ff-roboto">
								<span class="d-block"><? echo $arItem["NAME"] ?></span>
							</div>
						</div>
						<div class="">
							<div class="text-info fs-14 mb-3">
								<p class="">Отзыв с <span class="text-dark"><? echo $arItem["PROPERTIES"]["LINK"]["VALUE"] ?></span></p>
							</div>

							<div class="review__rating">
								<picture>
									<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/reiting.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/reiting.png" alt="рейтинг" class="w-100">
								</picture>
							</div>
						</div>
					</div>

					<div class="review__box position-relative col-8 pb-5">
						<div class="fs-16">
							<p>
								<? echo $arItem["PREVIEW_TEXT"] ?>
							</p>
						</div>
					</div>

				<? endforeach; ?>
			</div>
		</div>
	</div>
</section>