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

if (!CModule::IncludeModule("millcom.phpthumb")) {
	return false;
}

if ($arResult['PROPERTIES']['GALLERY']['VALUE'] && count($arResult['PROPERTIES']['GALLERY']['VALUE'])) :
	$GALLERY = array(
		array($arResult['PROPERTIES']['GALLERY']['VALUE'][0])
	);
	unset($arResult['PROPERTIES']['GALLERY']['VALUE'][0]);
	if (count($arResult['PROPERTIES']['GALLERY']['VALUE'])) {
		$GALLERY_PAGE = array_chunk($arResult['PROPERTIES']['GALLERY']['VALUE'], 3);
		$GALLERY = array_merge($GALLERY, $GALLERY_PAGE);
	}





?>
	<div class="gallery">
		<? foreach ($GALLERY as $SLIDE) : ?>
			<div class="slide">
				<div class="row gy-4">
					<? if (count($SLIDE) == 1) :
						$IMG0 = CFile::GetPath($SLIDE[0]);
					?>
						<div class="col-12">
							<a href="<?= CFile::GetPath($SLIDE[0]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG0; ?>);">
								<img src="<?= CMillcomPhpThumb::generateImg($SLIDE[0], 4); ?>" class="w-100">
							</a>
						</div>
					<? elseif (count($SLIDE) == 2) :
						$IMG0 = CFile::GetPath($SLIDE[0]);
						$IMG1 = CFile::GetPath($SLIDE[1]);
					?>
						<div class="col-12">
							<a href="<?= CFile::GetPath($SLIDE[0]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG0; ?>);">
								<img src="<?= CMillcomPhpThumb::generateImg($SLIDE[0], 4); ?>" class="w-100">
							</a>
						</div>
						<div class="col-12">
							<a href="<?= CFile::GetPath($SLIDE[1]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG1; ?>);">
								<img src="<?= CMillcomPhpThumb::generateImg($SLIDE[1], 4); ?>" class="w-100">
							</a>
						</div>
					<? elseif (count($SLIDE) == 3) :
						$IMG0 = CFile::GetPath($SLIDE[0]);
						$IMG1 = CFile::GetPath($SLIDE[1]);
						$IMG2 = CFile::GetPath($SLIDE[2]);
					?>
						<div class="col-12">
							<a href="<?= CFile::GetPath($SLIDE[0]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG0; ?>);">
								<span class="row">
									<span class="col-6"><img src="<?= CMillcomPhpThumb::generateImg($IMG0, 4); ?>" class="w-100"></span>
								</span>
							</a>
						</div>
						<div class="col-6">
							<a href="<?= CFile::GetPath($SLIDE[1]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG1; ?>);">
								<img src="<?= CMillcomPhpThumb::generateImg($SLIDE[1], 4); ?>" class="w-100">
							</a>
						</div>
						<div class="col-6">
							<a href="<?= CFile::GetPath($SLIDE[2]); ?>" target="_blank" class="fancybox d-block" style="background-image: url(<?= $IMG2; ?>);">
								<img src="<?= CMillcomPhpThumb::generateImg($SLIDE[2], 4); ?>" class="w-100">
							</a>
						</div>
					<? endif; ?>
				</div>
			</div>
		<? endforeach; ?>
	</div>
	<div class="ctrl-gallery ctrl-red">
		<div class="row pt-3 mb-5 align-items-center">
			<div class="col-md-6 dots"></div>
			<div class="col-md-6 arrow text-end"></div>
		</div>
	</div>


	<script>
		$(document).ready(function() {
			$('.gallery').slick({
				dots: true,
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
				appendDots: '.ctrl-gallery .dots',
				appendArrows: '.ctrl-gallery .arrow',
			});
		});
	</script>
<? endif; ?>

<? if (isset($arResult['PROPERTIES']['MENU_PHOTO']['VALUE']) && !empty($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'])) : ?>
	<div class="service-menu">
		<div class="row gy-4">
			<?
			$IMG0 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][0]);
			$IMG1 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][1]);
			$IMG2 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][2]);
			$IMG3 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][3]);
			$IMG4 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][4]);
			$IMG5 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][5]);
			$IMG6 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][6]);
			$IMG7 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][7]);
			$IMG8 = CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][8]);
			?>
			<div class="col-6 d-none d-md-block">
				<a href="<?= CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][0]); ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG0; ?>);" fancybox="menu">
					<img src="<?= CMillcomPhpThumb::generateImg($IMG0, 4); ?>" class="w-100 opacity-0">
				</a>
			</div>
			<div class="col-6 d-none d-md-block">
				<div class="row gy-4">
					<div class="col-12">
						<a href="<?= CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][1]); ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG1; ?>);" fancybox="menu">
							<span class="row">
								<span class="col-6">
									<img src="<?= CMillcomPhpThumb::generateImg($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][1], 4); ?>" class="w-100 opacity-0">
								</span>
							</span>
						</a>
					</div>
					<div class="col-6">
						<a href="<?= CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][2]); ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG2; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][2], 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
					<div class="col-6">
						<a href="<?= CFile::GetPath($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][3]); ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG3; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'][3], 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row gy-4">
					<div class="col-12">
						<a href="<?= $IMG4; ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG4; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($IMG4, 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
					<div class="col-12">
						<a href="<?= $IMG5; ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG5; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($IMG5, 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="d-flex flex-column h-100">
					<div class="banner fs-18">
						<div class="h-100 d-flex flex-column justify-content-between">
							<div class="number pt-3 px-4">20</div>
							<div class="pb-3 px-4">Смотреть меню</div>
						</div>
					</div>
					<div class="flex-grow-1 pt-4">
						<a href="<?= $IMG6; ?>" target="_blank" class="fancybox menu-img d-block h-100" style="background-image: url(<?= $IMG6; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($IMG6, 4); ?>" class="w-100 opacity-0">
						</a>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row gy-4">
					<div class="col-12">
						<a href="<?= $IMG7; ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG7; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($IMG7, 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
					<div class="col-12">
						<a href="<?= $IMG8; ?>" target="_blank" class="fancybox menu-img d-block" style="background-image: url(<?= $IMG8; ?>);" fancybox="menu">
							<img src="<?= CMillcomPhpThumb::generateImg($IMG8, 4); ?>" class="w-100 opacity-0">
						</a>
					</div>
				</div>



			</div>
		</div>
	</div>
<? endif; ?>

<div class="text mb-5">
	<?= $arResult["DETAIL_TEXT"] ?>
</div>
</div>





<? if (!empty($arResult['PROPERTIES']['PROGRAM']["VALUE"])) :
	$initialSlide = floor(count($arResult['PROPERTIES']['PROGRAM']["VALUE"]) / 2);
?>

	<div class="programms-gray">
		<div class="wave-top"></div>
		<div class="container">
			<h3 class="sub-title text-center">Направления</h3>
			<div class="row">
				<div class="col-md-3 program-left">
					<?= $arResult['PROPERTIES']['PROGRAM_LEFT']["~VALUE"] ?>
				</div>
				<div class="col-md-6 text-center">
					<div class="tab-content program-description">
						<? foreach ($arResult['PROPERTIES']['PROGRAM']["VALUE"] as $key => $arProgram) : ?>
							<div class="tab-pane<?= ($initialSlide == $key ? ' active' : '') ?>" id="program-<?= $key; ?>" role="tabpanel" aria-labelledby="profile-<?= $key; ?>">
								<?= $arProgram["SUB_VALUES"]['PROGRAM_TEXT']['VALUE']['TEXT']; ?>
							</div>
						<? endforeach; ?>
					</div>
				</div>
				<div class="col-md-3 program-right">
					<?= $arResult['PROPERTIES']['PROGRAM_RIGHT']["~VALUE"] ?>
				</div>
			</div>
		</div>
		<div class="programms">
			<? foreach ($arResult['PROPERTIES']['PROGRAM']["VALUE"] as $key => $arProgram) :

				if (CModule::IncludeModule("millcom.phpthumb"))
					$arProgram["SUB_VALUES"]["PROGRAM_IMAGE"]["WEBP"] = CMillcomPhpThumb::generateImg($arProgram["SUB_VALUES"]["PROGRAM_IMAGE"]["VALUE"], 5);

			?>
				<div class="program-item">
					<a href="#program-modal-<?= $key ?>" class="border-0" data-bs-toggle="modal" data-bs-target="#program-modal-<?= $key ?>">
						<div class="image"><img src="<?= $arProgram["SUB_VALUES"]["PROGRAM_IMAGE"]["WEBP"]; ?>"></div>
						<div class="name"><?= $arProgram["SUB_VALUES"]["PROGRAM_TITLE"]["VALUE"] ?></div>
					</a>
				</div>
			<? endforeach; ?>
		</div>
		<? foreach ($arResult['PROPERTIES']['PROGRAM']["VALUE"] as $key => $arProgram) :
		?>
			<!-- Modal -->
			<div class="modal fade modal-program p-4" id="program-modal-<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
				<div class="container">
					<div class="modal-dialog modal-dialog-centered modal__wrapper my-0 p-4" role="document">
						<div class="modal-content">

							<button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
							<div class="modal-body p-0">
								<div class="text">

									<div class="table-responsive table-price">
										<?= $arProgram['SUB_VALUES']['PROGRAM_TABLE']['~VALUE']['TEXT'] ?>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		<? endforeach; ?>
		<div class="container">
			<div class="ctrl-programms ctrl-red">
				<div class="row pt-3 mb-5 align-items-center">
					<div class="col-md-6 dots"></div>
					<div class="col-md-6 arrow text-end"></div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('.programms').slick({
				variableWidth: true,
				infinite: true,
				initialSlide: <?= $initialSlide ?>,
				centerMode: true,
				centerPadding: '0',
				appendDots: '.ctrl-programms .dots',
				appendArrows: '.ctrl-programms .arrow',
				responsive: [{
						breakpoint: 768,
						settings: {
							arrows: true,
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: true,
						}
					}
				]
			});

			$('.programms').on('afterChange', function(slick, currentSlide) {
				$('.program-description .tab-pane').removeClass('active').eq(currentSlide.currentSlide).addClass('active');
			});
		});
	</script>
<? endif; ?>

<div class="container">
	<? if ($arResult['PROPERTIES']['PRICE_CONTENT']['VALUE']) : ?>
		<div class="text my-5">
			<h3 class="h1 sub-title"><?= $arResult['PROPERTIES']['PRICE_TITLE']['VALUE'] ?></h3>
			<div class="table-responsive table-price">
				<?= $arResult['PROPERTIES']['PRICE_CONTENT']['~VALUE']['TEXT'] ?>
			</div>
		</div>
	<? endif; ?>

	<? if (!isset($arResult['PROPERTIES']['MENU_PHOTO']['VALUE']) || empty($arResult['PROPERTIES']['MENU_PHOTO']['VALUE'])) : ?>

		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"commands",
			array(
				"TITLE" => "Команда",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "7200",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PICTURE", ""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "10",
				"IBLOCK_TYPE" => "SYSTEM",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "200",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("POST", ""),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N"
			)
		); ?>
	<? endif; ?>