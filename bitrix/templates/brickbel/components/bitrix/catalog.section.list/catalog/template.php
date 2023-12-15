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
<section class="catalog py-5">
	<div class="container">
		<div class="row justify-content-end mb-3 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>КАТАЛОГ</h3>
			</div>
		</div>

		<!-- <div class="row d-block">
			<?
			foreach ($arResult['SECTIONS'] as $key => $arSection) :
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				// Проверяем доступность модуля "millcom.phpthumb"
				if (CModule::IncludeModule("millcom.phpthumb")) {
					// Генерируем обрезанные изображения в форматах WEBP и JPG
					$arSection["PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 3);
					$arSection["PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 4);
				}
				// Задаем классы по умолчанию
				$CLASS = array(
					'col-md-6',
					'col-md-12'
				);
				if ($key == 1 || $key == 2) $CLASS[0] = 'col-md-3'; // Для 2го и 3го элементра меняем первый класс на 6
				if ($key == 3) $CLASS[1] = 'col-md-6'; // для четвёртого меняем второй класс на 6
			?>
				<div class="col-6 <?= $CLASS[0] ?> mt-4 float-start" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
					<a href="<?= $arSection["SECTION_PAGE_URL"] ?>" class="catalog__link d-block position-relative rounded-2" style="
			  background: url('<?= $arSection["PICTURE"]["WEBP"] ?>');background-position: center; background-size: cover; background-repeat: no-repeat;">
					<style>
						@supports (background-image: -webkit-image-set(url())) {
							.swiper-slide {
								background-image: -webkit-image-set(url('<?= $arSection["PREVIEW_PICTURE"]["WEBP"] ?>') 1x, url('<?= $arSection["PREVIEW_PICTURE"]["WEBP_2X"] ?>') 2x);
								background-image: image-set(url('<?= $arSection["PREVIEW_PICTURE"]["WEBP"] ?>') 1x, url('<?= $arSection["PREVIEW_PICTURE"]["WEBP_2X"] ?>') 2x);
							}
						}
					</style>
						<div class="row">
							<div class="col-12 <?= $CLASS[1]; ?>">
								<picture>
									<source srcset="<?= $arSection["PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arSection["PICTURE"]["PNG"] ?>" alt="<?= $arSection["PICTURE"]["ALT"] ?>" title="<?= $arSection["PICTURE"]["TITLE"] ?>" class="w-100 h-100 opacity-0" width="546" height="546">
								</picture>
								<span class="position-absolute fs-20 fw-600 ff-roboto text-white col-8 start-0 bottom-0 pb-4 ps-4"><?= $arSection["NAME"] ?></span>
								<span class="catalog__arrow position-absolute end-0 bottom-0 mb-4 me-4 rounded-circle bg-white d-flex justify-content-center align-items-center">
									<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/arrow-catalog.svg" alt="стрелка" width="9" height="16">
								</span>
							</div>
						</div>
					</a>
				</div>

			<? endforeach; ?>

			<div class="clearfix"></div>
		</div> -->
		<div class="row ">
			<?
			foreach ($arResult['SECTIONS'] as $key => $arSection) :
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				// Проверяем доступность модуля "millcom.phpthumb"
				if (CModule::IncludeModule("millcom.phpthumb")) {
					// Генерируем обрезанные изображения в форматах WEBP и JPG
					$arSection["PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 3);
					$arSection["PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arSection["PICTURE"]["SRC"], 4);
				}
				
			
			?>
				<div class="col-12 col-md-6 mt-4" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
					<a href="<?= $arSection["SECTION_PAGE_URL"] ?>" class="catalog__link d-block position-relative rounded-2 h-100" style="
			  background: url('<?= $arSection["PICTURE"]["WEBP"] ?>');background-position: center; background-size: cover; background-repeat: no-repeat;">
					<style>
						@supports (background-image: -webkit-image-set(url())) {
							.swiper-slide {
								background-image: -webkit-image-set(url('<?= $arSection["PREVIEW_PICTURE"]["WEBP"] ?>') 1x, url('<?= $arSection["PREVIEW_PICTURE"]["WEBP_2X"] ?>') 2x);
								background-image: image-set(url('<?= $arSection["PREVIEW_PICTURE"]["WEBP"] ?>') 1x, url('<?= $arSection["PREVIEW_PICTURE"]["WEBP_2X"] ?>') 2x);
							}
						}
					</style>
						
								<picture>
									<source srcset="<?= $arSection["PICTURE"]["WEBP"] ?>" type="image/webp"><img src="<?= $arSection["PICTURE"]["PNG"] ?>" alt="<?= $arSection["PICTURE"]["ALT"] ?>" title="<?= $arSection["PICTURE"]["TITLE"] ?>" class="w-100 h-100 opacity-0" width="546" height="546">
								</picture>
								<span class="position-absolute fs-20 fw-600 ff-roboto text-white col-8 start-0 bottom-0 pb-4 ps-4"><?= $arSection["NAME"] ?></span>
								<span class="catalog__arrow position-absolute end-0 bottom-0 mb-4 me-4 rounded-circle bg-white d-flex justify-content-center align-items-center">
									<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/arrow-catalog.svg" alt="стрелка" width="9" height="16">
								</span>
						
					</a>
				</div>

			<? endforeach; ?>

			
		</div>
	</div>
</section>