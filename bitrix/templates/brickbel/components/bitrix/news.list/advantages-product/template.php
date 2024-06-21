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

<section class="advantages-products py-5">
	<div class="container">
		<div class="row justify-content-end mb-3 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>ПРЕИМУЩЕСТВА</h3>
			</div>
		</div>
		<div class="row gy-3">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="h-50 mb-3">
					<div class="fs-40 fw-700 ff-roboto mb-4">
						<h2><? echo $arResult["NAME"] ?></h2>
					</div>
					<div class="fs-18 lh-12 advantages-products__text">
						<p>
							<? echo $arResult["DESCRIPTION"]; ?>
						</p>
					</div>
				</div>
				<div class="h-50">
					<ul class="p-0">
						<?
						$count = count($arResult["ITEMS"]);  // Количество элементов
						$halfCount = ceil($count / 2);  // Половина количества элементов, округленная вверх
						foreach ($arResult["ITEMS"] as $key => $arItem) :
							if ($key < $halfCount) : // Выводим первую половину элементов

								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
								<li class="advantages-products__item fs-20 lh-11 fw-600 ff-roboto py-3 border-bottom">
									<p><? echo $arItem["NAME"] ?></p>
								</li>
							<? endif; ?>
						<? endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="d-none d-lg-block col-lg-4">
				<div class="d-block">
					<picture>
						<source srcset="<? echo CFile::GetPath($arResult['PICTURE']) ?>" type="image/webp"><img src="<? echo CFile::GetPath($arResult['PICTURE']) ?>" alt="ПРЕИМУЩЕСТВА" width="361" class="w-100 h-100">
					</picture>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="h-50 mb-3">
					<div class=" rounded-2 btn-primary bg-gradient d-flex flex-column justify-content-between px-4 py-4 pb-lg-5">
						<div class="advantages-products__circle rounded-circle bg-white d-flex justify-content-center align-items-center mb-5">
							<div class="fs-16 ff-roboto fw-600 lh-11 text-dark">
								<span>%</span>
							</div>
						</div>
						<div class="fs-30 fw-700 ff-roboto lh-11 text-white">
							<h2>Рассрочка 0% от производителя</h2>
						</div>
					</div>

				</div>
				<div class="h-50">
					<ul class="p-0">
						<?
						$count = count($arResult["ITEMS"]);  // Количество элементов
						$halfCount = ceil($count / 2);  // Половина количества элементов, округленная вверх
						foreach ($arResult["ITEMS"] as $key => $arItem) :
							if ($key >= $halfCount) : // Выводим вторую половину элементов

								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
								<li class="advantages-products__item fs-20 lh-11 fw-600 ff-roboto py-3 border-bottom">
									<p><? echo $arItem["NAME"] ?></p>
								</li>
							<? endif; ?>
						<? endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>