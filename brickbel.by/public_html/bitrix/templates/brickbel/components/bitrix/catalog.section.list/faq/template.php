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

<section class="faq py-5">
	<div class="container">
		<div class="row justify-content-end mb-4 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ВОПРОС-ОТВЕТ</h3>
			</div>
		</div>
		<div class="fs-40 fw-700 ff-roboto mb-5">
			<h2>Часто задаваемые вопросы</h2>
		</div>
		<div class="accordion" id="accordionFaq">
			<?
			$counter= 1;
			foreach ($arResult['SECTIONS'] as $key => $arSection) :
				$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);


			?>
				<div class="accordion-item mb-4 border-bottom">
					<h2 class="accordion-header" id="heading<?= $counter ?>">
						<button class="accordion-button flex ps-0 pt-1 pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $counter ?>" aria-expanded="false" aria-controls="collapse<?= $counter ?>">
							<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600"><?= str_pad($counter, 2, '0', STR_PAD_LEFT) ?></span>
							<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3"><?= $arSection["NAME"] ?></span>
						</button>
					</h2>
					<div id="collapse<?= ucfirst($counter) ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $counter ?>" data-bs-parent="#accordionFaq">
						<div class="accordion-body d-flex pt-0">
							<div class="col-1 col-sm-2"></div>
							<div class="col-9 col-sm-8 fs-16">
								<?= $arSection["DESCRIPTION"] ?>
							</div>
						</div>
					</div>
				</div>
				<? $counter++; ?>
			<? endforeach; ?>
		</div>
	</div>
</section>