<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) exit("Access Denied"); ?>

<?php if (!empty($arResult)) : ?>

	<nav class="menu py-3 col-12 position-relative">
		<ul class="menu__list d-flex flex-column flex-lg-row h-100 justify-content-center align-items-center justify-content-lg-between text-nowrap ps-0 mb-0 gap-3">
			<?php $previousLevel = 0;
			foreach ($arResult as $arItem) : ?>
				<?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
					<?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
				<?php endif ?>
				<?php if ($arItem["IS_PARENT"]) : ?>
					<li class="py-1 py-lg-0<?php if ($arItem["CHILD_SELECTED"] !== true) : ?> parent<?php endif ?>">
						<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
						<ul class="">

						<?php else : ?>

							<?php if ($arItem["PERMISSION"] > "D") : ?>
								<li class="">
									<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
								</li>
							<?php endif ?>

						<?php endif ?>

						<?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

					<?php endforeach ?>

					<?php if ($previousLevel > 1) : //close last item tags
					?>
						<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
					<?php endif ?>

						</ul>
	</nav>
<?php endif ?>