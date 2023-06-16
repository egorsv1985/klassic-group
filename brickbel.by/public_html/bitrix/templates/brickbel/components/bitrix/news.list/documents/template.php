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
<section class="steps py-5">
				<div class="container">
					<div class="row justify-content-end mb-5 overflow-hidden">
						<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
							<h3><? echo $arResult["NAME"] ?></h3>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-3">
							<div class="fs-40 ff-roboto fw-700">
								<h2><? echo $arResult["DESCRIPTION"] ?></h2>
							</div>
						</div>
						<div class="col-6 offset-3">
							<div class="fs-16 lh-12">
								<p>
									Осуществляем доставку по г.Минску и Минской области. Также
									курьерская доставка по РБ, РФ и СНГ.
								</p>
							</div>
							<div class="fs-16 lh-12">
								<p>
								<? echo $arResult["DESCRIPTION"] ?>
								</p>
							</div>
						</div>
					</div>
					<div class="row g-3 overflow-hidden">
			<?
			$counter= 1;
			 foreach ($arResult["ITEMS"] as $arItem) : ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

<div class="col-12 col-md-6 col-lg-3 steps__item position-relative">
							<div class="bg-dark p-4 h-100 d-flex flex-column justify-content-between rounded">
								<div class="steps__num bg-white rounded-circle p-3 d-flex justify-content-center align-items-center mb-5">
									<span class="fs-16 fw-600"><?= str_pad($counter, 2, '0', STR_PAD_LEFT) ?></span>
								</div>
								<div class="fs-20 ff-roboto fw-600 text-white">
									<p><? echo $arItem["NAME"] ?></p>
								</div>
							</div>
						</div>

				
			<? endforeach; ?>
		</div>
	</div>
	</div>
</section>