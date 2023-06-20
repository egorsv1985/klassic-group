<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul class="d-flex h-100 flex-column flex-lg-row justify-content-center justify-content-lg-between text-nowrap">
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
			<li class="py-1 py-lg-0<?if($arItem["CHILD_SELECTED"] !== true):?> parent<?endif?>">
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul class="d-none d-md-flex">

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
				<li class="py-1 py-lg-0">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</li>
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>