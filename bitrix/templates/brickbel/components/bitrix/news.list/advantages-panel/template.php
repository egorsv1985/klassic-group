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


		<div class="row mb-4">
			<div class=" col-12 col-md-8 col-lg-7 ">
				<h2 class="fs-40 fw-700 ff-roboto"><? echo $arResult["NAME"]; ?></h2>
				<div class="fs-18 fw-400">
					<p>
						<? echo $arResult["DESCRIPTION"]; ?>
					</p>
				</div>
			</div>
			<div class="d-none d-md-block col-md-3 col-lg-4 offset-1">
				<picture>
					<source srcset="<? echo CFile::GetPath($arResult['PICTURE']) ?>" type="image/webp"><img src="<? echo CFile::GetPath($arResult['PICTURE']) ?>" alt="кирпичи" class="w-100" />
				</picture>
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