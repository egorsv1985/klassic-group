<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="row gy-5 card-blocks">

<?foreach($arResult["ITEMS"] as $key => $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	$last = false;
	if (($key+1) == count($arResult["ITEMS"])) {
		$last = true;
	}
	?>
	<div class="col-12<?=($last ? ' col-md-12' : ' col-md-4')?>  card-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row h-100 <?=($last ? ' ' : ' flex-column')?>">
			<div class="col-12<?=($last ? ' col-md-4' : ' col-md-12')?> image">
				<img src="<?=CFile::GetPath($arItem['PROPERTIES']['COVER']['VALUE'])?>" alt="Клубная карта <?=$arItem['NAME']?>" class="w-100">
			</div>
			<div class="col-12<?=($last ? ' col-md' : ' col-md')?> d-flex flex-column justify-content-between">
				<div class="name py-2"><?=$arItem['NAME']?></div>
				<div class="ul row">
					<div class="col">
					<?foreach($arItem['PROPERTIES']['INFO']['VALUE'] as $key => $value):?>
						<?if ($key == 2 && $last):?>
					</div>
					<div class="col-12 col-md">
						<?endif;?>
						<div><?=$value;?>: <?=$arItem['PROPERTIES']['INFO']['DESCRIPTION'][$key]?></div>
					<?endforeach;?>
					</div>
				</div>
				<div class="mt-2">
					<a href="#" class="order d-inline-block" data-bs-toggle="modal" data-bs-target="#orderModal">Заказать карту</a>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>
</div>
