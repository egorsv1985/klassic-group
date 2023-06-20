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
CFile::GetPath($arResult['PICTURE']);
// print_r($arResult);
?>
<section class="advantages py-5">
	<div class="container">
		<div class="row justify-content-end mb-5 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ПРЕИМУЩЕСТВА</h3>
			</div>
		</div>

		<div class="row mb-4">
			<div class="fs-40 fw-700 col-12 col-md-8 col-lg-6 ff-roboto">
				<h2><? echo $arResult["NAME"]; ?></h2>
			</div>

			<div class="d-none d-md-block col-md-1 col-lg-2"></div>
			<div class="d-none d-md-block col-md-3 col-lg-4">
			<picture>
					<source srcset="<? echo CFile::GetPath($arResult['PICTURE']) ?>" type="image/webp"><img src="<? echo CFile::GetPath($arResult['PICTURE']) ?>" alt="О компании" class="w-100 rounded-2">
				</picture>
				<picture>
					<source srcset="<? echo CFile::GetPath($arResult['PICTURE']) ?>" type="image/webp"><img src="<? echo CFile::GetPath($arResult['PICTURE']) ?>" alt="кирпичи" class="w-100" />
				</picture>
			</div>
			<div class="fs-18 col-12 col-lg-8">
				<p>
					<? echo $arResult["DESCRIPTION"]; ?>
				</p>
			</div>
		</div>
		<div class="row overflow-hidden">

			<? foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				//print_r($arItem);
			?>
				<div class="advantages__item col-12 col-sm-6 col-lg-4 d-flex flex-column position-relative pt-5 pb-3">
					<div class="col-8 fs-20 fw-600 ff-roboto">
						<h3><? echo $arItem["NAME"] ?></h3>
					</div>
					<div class="d-flex flex-column gap-2 fs-16 pe-4 lh-11">
						<? echo $arItem["PREVIEW_TEXT"]; ?>
					</div>
				</div>


			<? endforeach; ?>

		</div>
	</div>
</section>
