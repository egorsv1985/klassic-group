<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?if (TYPE_PAGE == 'TEXT'):?>
			</div>
		</section>
		<?$APPLICATION->IncludeFile($APPLICATION->GetCurDir()."bottom.php");?>
<?endif;?>
		<footer class="block-section white-section m-2 m-md-3">
			<div class="container py-4 py-md-5">
				<div class="row">
					<div class="col-md-4">
						<div class="title text-center text-md-start">Оставить заявку</div>
						<p class="lh-1">Оставьте заявку и мы с вами свяжемся в рабочее время</p>
						<div class="contacts-block row gy-4 fs-16 mb-4">
							<div class="col-6">
								<div class="small-title py-2">Контакты</div>
								<?$APPLICATION->IncludeFile("includes/phone.php");?><br>
								<?$APPLICATION->IncludeFile("includes/email.php");?>
							</div>
							<div class="col-6">
								<div class="small-title py-2">Мессенджеры</div>
								<?$APPLICATION->IncludeFile("includes/social.php");?>
							</div>
							<div class="col-6">
								<div class="small-title py-2">Регион работы</div>
								<?$APPLICATION->IncludeFile("includes/region.php");?>
							</div>
							<div class="col-6">
								<div class="small-title py-2">Время работы</div>
								<?$APPLICATION->IncludeFile("includes/schedule.php");?>
							</div>
						</div>
					</div>
					<div class="col-md-2 d-none d-md-block"></div>
					<div class="col-md-6">
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"form",
	Array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Имя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array("2"),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "SYSTEM",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array("3","NAME", "4", "5"),
		"PROPERTY_CODES_REQUIRED" => array("3","NAME"),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка успешно сохранена",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => 'Y'
	)
);?>

					</div>
				</div>
				<div class="row pt-5">
					<div class="col-md-3 fs-13 copy text-center text-md-start">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/logo-dark.svg" alt="" class="mw-100 mb-4">
						<?$APPLICATION->IncludeFile(
							"includes/requisites.php",
							array(),
							array(
								'NAME' => 'реквизиты'
							),
						);?>
						<p><a href="https://target-kc.ru" target="_blank">Разработка сайта: ТКК</a></p>
					</div>
					<div class="col-md-9 d-none d-md-block">
						<div class="row footer-menu pt-3">
							<div class="col-md-4">
							</div>
							<div class="col-md-4">
								<a href="#" class="section">Информация</a>
								<ul class="fs-14 mt-2">
									<li><a href="#">О компании</a></li>
									<li><a href="#">Прайс лист</a></li>
									<li><a href="#">Статьи</a></li>
									<li><a href="#">Новости</a></li>
									<li><a href="#">Отзывы</a></li>
									<li><a href="#">Портфолио</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<a href="#" class="section">Услуги</a>
								<ul class="fs-14 mt-2">
									<?
									$arFilter = array('IBLOCK_ID' => 2, 'GLOBAL_ACTIVE' => 'Y');
									$rsSection = CIBlockSection::GetList(array('SORT' => "ASC"), $arFilter, true);
									while($arSection = $rsSection->GetNext()):?>
									<li><a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection['NAME'];?></a></li>
									<?endwhile;?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>