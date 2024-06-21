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
?>
<section class="about pb-5">
	<div class="container">
		<div class="row g-5 mb-5">
			<div class="col-6">
				<picture>
					<source srcset="<? echo CFile::GetPath($arResult['PICTURE']) ?>" type="image/webp"><img src="<? echo CFile::GetPath($arResult['PICTURE']) ?>" alt="О компании" class="w-100 rounded-2">
				</picture>
			</div>
			<div class="col-6 d-flex justify-content-center flex-column">
				<div class="fs-40 ff-roboto fw-700 mb-3">
					<h3><? echo $arResult["NAME"] ?></h3>
				</div>
				<div class="fs-16 lh-12">
					<p>
						<? echo $arResult["DESCRIPTION"] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row pt-4">
			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="col-12 col-md-6 col-lg-3">
					<div class="fs-40 ff-roboto fw-700">
						<h3><? echo $arItem["NAME"] ?></h3>
					</div>
					<div class="fs-16 lh-12">
						<p><? echo $arItem["PREVIEW_TEXT"] ?></p>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>
	</div>
</section>