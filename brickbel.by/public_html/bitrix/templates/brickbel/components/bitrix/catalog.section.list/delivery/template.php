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
print_r($arResult);

?>
<section class="delivery pb-5">
	<div class="container">
		<div class="accordion" id="accordionDelivery">
			<?
			$counter = 1;
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
							<div class="col-10 col-lg-9 offset-1 offset-sm-2 pe-5">
								<? // Получаем элементы раздела
								$sectionId = $arSection['ID'];

								$arFilter = array(
									'IBLOCK_ID' => $arParams['IBLOCK_ID'],
									'SECTION_ID' => $sectionId,
									'ACTIVE' => 'Y'
								);

								$arSelect = array(
									'ID',
									'NAME',
									'PREVIEW_TEXT'
								);

								$resElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

								// Выводим каждый элемент раздела
								while ($element = $resElements->Fetch()) {
									// Выводим название элемента
									echo '<div class="fs-18 fw-600 mb-2">';
									echo '<h4 class="m-0">' . $element['NAME'] . '</h4>';
									echo '</div>';

									// Выводим описание элемента
									echo '<div class="fs-16 lh-11 mb-3">';
									echo '<p>' . $element['PREVIEW_TEXT'] . '</p>';
									echo '</div>';
								} ?>

							</div>
						</div>
					</div>
					<? $counter++; ?>
				<? endforeach; ?>
				</div>
		</div>
</section>