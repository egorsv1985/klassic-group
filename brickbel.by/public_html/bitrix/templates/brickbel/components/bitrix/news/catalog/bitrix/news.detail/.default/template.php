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

<? if (CModule::IncludeModule("millcom.phpthumb")) {
	$arItem["DETAIL_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["DETAIL_PICTURE"]["SRC"], 23);
	$arItem["DETAIL_PICTURE"]["PNG"] = CMillcomPhpThumb::generateImg($arItem["DETAIL_PICTURE"]["SRC"], 24);
}
?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<section class="products-items pb-5">
	<div class="container">

		<div class="row">
			<div class="col-12 col-md-4">
				<div class="rounded">
					<picture>
						<source srcset="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arItem["DETAIL_PICTURE"]["ALT"] ?>" title="<?= $arItem["DETAIL_PICTURE"]["TITLE"] ?>" class="w-100" />
					</picture>
				</div>
			</div>
			<div class="col-12 col-md-7 offset-md-1 pt-4">
				<div class="fs-48 fw-700 ff-roboto mb-5">
					<h2><?= $arResult["NAME"] ?></h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-12 col-sm-6 col-lg-5 col-xl-4">
						<div class="fs-15 text-info mb-2">
							<p class="m-0">Единица измерения</p>
						</div>
						<!-- Nav tabs -->
						<ul class="col-12 gap-4 mb-4 nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item col-4" role="presentation">
								<button class="nav-link py-3 lh-13 w-100 active" id="perpiece-tab" data-bs-toggle="tab" data-bs-target="#perpiece" type="button" role="tab" aria-controls="perpiece" aria-selected="true">
									1 шт
								</button>
							</li>
							<li class="nav-item col-4" role="presentation">
								<button class="nav-link py-3 lh-13 w-100" id="persquaremeter-tab" data-bs-toggle="tab" data-bs-target="#persquaremeter" type="button" role="tab" aria-controls="persquaremeter" aria-selected="false">
									м2
								</button>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content mb-2">
							<div class="tab-pane active" id="perpiece" role="tabpanel" aria-labelledby="perpiece-tab">
								<span class="fs-40 fw-700 ff-roboto"><? echo $arResult["PROPERTIES"]["PRICE_2"]["VALUE"] ?></span>
							</div>
							<div class="tab-pane" id="persquaremeter" role="tabpanel" aria-labelledby="persquaremeter-tab">
								<span class="fs-40 fw-700 ff-roboto"><? echo $arResult["PROPERTIES"]["PRICE_1"]["VALUE"] ?></span>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-5 d-flex align-items-end pe-0">
						<!-- Button trigger modal -->
						<button type="button" class="btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient w-100" data-bs-toggle="modal" data-bs-target="#callback">
							Оставить заявку
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="information py-5">
	<div class="container">
		<div class="accordion" id="accordionInformation">
			<div class="accordion-item mb-4 border-bottom">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button flex ps-0 pt-1 pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600">01</span>
						<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3">Описание</span>
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionInformation">
					<div class="accordion-body d-flex pt-0">
						<div class="col-10 offset-1 offset-sm-2 pe-5">
							<div class="fs-16">
								<p>
									Гибкий кирпич имеет высокую атмосферостойкость,
									влагостойкость. Материал можно мыть под давлением до 2х бар.
									Устойчив к средствам бытовой химии.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item mb-4 border-bottom">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button flex ps-0 pt-1 pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600">02</span>
						<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3">Характеристики</span>
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionInformation">
					<div class="accordion-body d-flex pt-0">
						<div class="col-10 offset-1 offset-sm-2 pe-5">
							<div class="row g-3">
								<? if (!empty($arResult["PROPERTIES"]["RAZMER_MODULYA"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Размер модуля</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["RAZMER_MODULYA"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["RAZMER_KIRPICHA"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Размер кирпича</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["RAZMER_KIRPICHA"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["MOROZOSTOYKOST"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Морозостойкость</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["MOROZOSTOYKOST"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["KOLICHESTVO_PLITOK_NA_SETKE"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Кол-во плиток на сетке</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["KOLICHESTVO_PLITOK_NA_SETKE"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["POLEZNAYA_PLOSHCHAD_MODULYA"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Полезная площадь модуля</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["POLEZNAYA_PLOSHCHAD_MODULYA"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["VES_UPAKOVKI"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Вес упаковки</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["VES_UPAKOVKI"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["RAZMER_RASSHVORKI"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Размер расшивки</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["RAZMER_RASSHVORKI"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["TOLSHCHINA"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Толщина</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["TOLSHCHINA"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["OBEM_UPAKOVKI"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Объем упаковки</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["OBEM_UPAKOVKI"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["SOSTAV"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Состав</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0">
												<? echo $arResult["PROPERTIES"]["SOSTAV"]["VALUE"] ?>
											</p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["TEMPERATURA_EKSPLOATATSII"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Температура эксплуатации</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["TEMPERATURA_EKSPLOATATSII"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
								<? if (!empty($arResult["PROPERTIES"]["KOLICHESTVO_V_UPAKOVKE"]["VALUE"])) : ?>
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="fs-15 text-dark mb-1">
											<p class="m-0">Кол-во в упаковке</p>
										</div>
										<div class="fs-16 lh-11">
											<p class="m-0"><? echo $arResult["PROPERTIES"]["KOLICHESTVO_V_UPAKOVKE"]["VALUE"] ?></p>
										</div>
									</div>
								<? endif; ?>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="accordion-item mb-4 border-bottom">
				<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button flex ps-0 pt-1 pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600">03</span>
						<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3">Доставка и оплата</span>
					</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionInformation">
					<div class="accordion-body d-flex pt-0">
						<div class="col-10 offset-1 offset-sm-2 pe-5">
							<div class="fs-16">
								<p>
									Гибкий кирпич имеет высокую атмосферостойкость,
									влагостойкость. Материал можно мыть под давлением до 2х бар.
									Устойчив к средствам бытовой химии.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item mb-4 border-bottom">
				<h2 class="accordion-header" id="headingFour">
					<button class="accordion-button flex ps-0 pt-1 pe-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						<span class="col-1 col-sm-2 fs-16 lh-11 text-primary fw-600">04</span>
						<span class="col-11 col-sm-10 fs-20 lh-11 ff-roboto fw-600 ps-3">Где купить</span>
					</button>
				</h2>
				<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionInformation">
					<div class="accordion-body d-flex pt-0">
						<div class="col-10 offset-1 offset-sm-2 pe-5">
							<div class="fs-16">
								<p>
									Гибкий кирпич имеет высокую атмосферостойкость,
									влагостойкость. Материал можно мыть под давлением до 2х бар.
									Устойчив к средствам бытовой химии.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>