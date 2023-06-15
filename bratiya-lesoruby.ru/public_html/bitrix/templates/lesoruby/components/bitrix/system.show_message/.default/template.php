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
$this->setFrameMode(true);?>
<?if($arParams["STYLE"] == 'errortext'):?>
<div class="alert alert-danger fs-14">
	<?=$arParams["MESSAGE"]?>
</div>
<?else:?>
<div class="alert alert-success fs-14">
	<?=$arParams["MESSAGE"]?>
</div>
<?endif;?>