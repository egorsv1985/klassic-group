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

<section class="characteristics py-5 bg-success">
	<div class="container">
		<div class="row justify-content-end mb-3 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ХАРАКТЕРИСТИКИ</h3>
			</div>
		</div>
		<div class="fs-40 fw-700 ff-roboto mb-4">
			<h2>Основные свойства</h2>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6">
				<ul class="p-0">
					<?
					$count = count($arResult["ITEMS"]);  // Количество элементов
					$halfCount = ceil($count / 2);  // Половина количества элементов, округленная вверх
					foreach ($arResult["ITEMS"] as $key => $arItem) :
						if ($key < $halfCount) : // Выводим первую половину элементов

							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
							<li class="d-flex justify-content-between gap-2 border-bottom py-3 fs-20 fw-600 lh-11 ff-roboto characteristics__item">
								<h3><? echo $arItem["NAME"] ?></h3>
								<p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
							</li>
						<? endif; ?>
					<? endforeach; ?>
				</ul>
			</div>
			<div class="col-12 col-lg-6">
				<ul class="p-0">
					<?
					$count = count($arResult["ITEMS"]);  // Количество элементов
					$halfCount = ceil($count / 2);  // Половина количества элементов, округленная вверх
					foreach ($arResult["ITEMS"] as $key => $arItem) :
						if ($key >= $halfCount) : // Выводим вторую половину элементов

							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
							<li class="d-flex justify-content-between gap-2 border-bottom py-3 fs-20 fw-600 lh-11 ff-roboto characteristics__item">
								<h3><? echo $arItem["NAME"] ?></h3>
								<p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
							</li>
						<? endif; ?>
					<? endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>