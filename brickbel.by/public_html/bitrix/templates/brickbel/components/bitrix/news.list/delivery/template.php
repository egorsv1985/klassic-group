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
<section class="delivery pb-5">
	<div class="container">

		<div class="accordion" id="accordionDelivery">

			<?
			$counter = 1;
			foreach ($arResult["ITEMS"] as $arItem) :
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				// print_r($arItem);
			?>
				<div class="accordion-item mb-4 border-bottom">
					<h2 class="accordion-header" id="heading<?= $counter ?>">
						<button class="accordion-button flex ps-0 pt-1 pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $counter ?>" aria-expanded="false" aria-controls="collapse<?= $counter ?>">
							<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600"><?= str_pad($counter, 2, '0', STR_PAD_LEFT) ?></span>
							<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3"><?= $arItem["NAME"] ?></span>
						</button>
					</h2>
					<div id="collapse<?= ucfirst($counter) ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $counter ?>" data-bs-parent="#accordionDelivery">
						<div class="accordion-body d-flex pt-0">
							<div class="col-10 col-lg-9 offset-1 offset-sm-2 pe-5">
								<? echo $arItem["PREVIEW_TEXT"]; ?>
							</div>
						</div>
					</div>
				</div>

				<? $counter++; ?>
			<? endforeach; ?>

		</div>
	</div>
</section>