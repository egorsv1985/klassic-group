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
<section class="promo position-relative pb-5" id="promo">
	<div class="swiper promoSwiper">
		<div class="swiper-control position-absolute d-flex w-100 top-50">
			<div class="container position-relative">
				<div class="swiper-button-prev rounded-circle border-white border"></div>

				<div class="swiper-button-next rounded-circle border-white border"></div>
			</div>
		</div>

		<div class="swiper-wrapper">

			<? foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				//print_r($arItem);
			?>
				<div class="swiper-slide" style="background: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>') center / cover no-repeat">
					<div class="container">
						<div class="d-flex flex-column">
							<div class="col-12 col-lg-7 h1 fs-64 fw-700 text-white mb-3 ff-roboto">
								<? echo $arItem["NAME"] ?>
							</div>
							<div class="col-12 col-lg-4 fs-20 text-white mb-4">
								<h2><? echo $arItem["PREVIEW_TEXT"]; ?></h2>
							</div>
							<!-- Button trigger modal -->
							<button type="button" class="col-12 col-md-6 col-lg-3 btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient" data-bs-toggle="modal" data-bs-target="#callback">
								Оставить заявку
							</button>
						</div>
					</div>
				</div>
				
		<? endforeach; ?>

		</div>
		<div class="container">
			<div class="swiper-pagination position-relative d-flex align-items-center gap-4"></div>
		</div>
	</div>
</section>

