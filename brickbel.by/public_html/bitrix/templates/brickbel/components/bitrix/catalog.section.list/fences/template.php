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

<section class="works py-5 position-relative" id="works">
	<div class="container position-relative">
		<div class="row justify-content-end mb-4 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3 class="mb-0">НАШИ ЗАБОРЫ</h3>
			</div>
		</div>
		<div class="swiper worksSwiper mb-3">
			<div class="swiper-wrapper">
				<?
				foreach ($arResult['SECTIONS'] as $key => &$arSection) :
					$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
					$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
					// Проверяем доступность модуля "millcom.phpthumb"
					if (CModule::IncludeModule("millcom.phpthumb")) {
						// Генерируем обрезанные изображения в форматах WEBP и JPG
						$arSection["PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 15);
						$arSection["PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 16);
					}

				?>
					<div class="swiper-slide" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
						<a class="rounded-2 overflow-hidden" href="<?= $arSection["PICTURE"]["WEBP"] ?>" data-toggle="lightbox">
							<picture>
								<source srcset="<?= $arSection["PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arSection["PICTURE"]["PNG"] ?>" alt="<?= $arSection["PICTURE"]["ALT"] ?>" title="<?= $arSection["PICTURE"]["TITLE"] ?>" class="w-100 h-100 rounded-2 overflow-hidden" width="360" height="360">
							</picture>
						</a>
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