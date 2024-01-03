<?
define("PAGE", "FENCES");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О продукте");

?>
<section class="catalog py-5">
	<div class="container">
		<div class="row justify-content-end mb-3 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>Продукты</h3>
			</div>
		</div>
		<div class="row ">

			<div class="col-12 col-md-6 mt-4">
				<a href="/o-produkte/kirpichi/" class="catalog__link d-block position-relative rounded-2 h-100" style="
			  background: url('<?= SITE_TEMPLATE_PATH ?>/img/kirpichi.webp');background-position: center; background-size: cover; background-repeat: no-repeat;">


					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/kirpichi.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/kirpichi.png" alt="Гибкий кирпич на сетке" title="Гибкий кирпич на сетке" class="w-100 h-100 opacity-0" width="546" height="546">
					</picture>
					<span class="position-absolute fs-20 fw-600 ff-roboto text-white col-8 start-0 bottom-0 pb-4 ps-4">Гибкий кирпич на сетке</span>
					<span class="catalog__arrow position-absolute end-0 bottom-0 mb-4 me-4 rounded-circle bg-white d-flex justify-content-center align-items-center">
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/arrow-catalog.svg" alt="стрелка" width="9" height="16">
					</span>

				</a>
			</div>
			<div class="col-12 col-md-6 mt-4">
				<a href="/o-produkte/zelenye-zabory/" class="catalog__link d-block position-relative rounded-2 h-100" style="
			  background: url('<?= SITE_TEMPLATE_PATH ?>/img/polotno.webp');background-position: center; background-size: cover; background-repeat: no-repeat;">


					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/polotno.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/polotno.png" alt="Калифорнийское полотно" title="Калифорнийское полотно" class="w-100 h-100 opacity-0" width="546" height="546">
					</picture>
					<span class="position-absolute fs-20 fw-600 ff-roboto text-white col-8 start-0 bottom-0 pb-4 ps-4">Калифорнийское полотно</span>
					<span class="catalog__arrow position-absolute end-0 bottom-0 mb-4 me-4 rounded-circle bg-white d-flex justify-content-center align-items-center">
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/arrow-catalog.svg" alt="стрелка" width="9" height="16">
					</span>

				</a>
			</div>


		</div>
	</div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>