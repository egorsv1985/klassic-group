<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if(!defined("TYPE_PAGE"))
	define('TYPE_PAGE', 'TEXT');

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss('https://fonts.googleapis.com/css2?family=Commissioner:wght@700&family=Nunito:ital,wght@0,400;0,600;1,400;1,600&display=swap');

$asset->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-3.6.0.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.css');
$asset->addJs(SITE_TEMPLATE_PATH.'/libs/bootstrap/popper.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.js');

//$asset->addJs(SITE_TEMPLATE_PATH.'/libs/bs5-lightbox/index.bundle.min.js');

$asset->addJs(SITE_TEMPLATE_PATH.'/libs/fancybox/fancybox.umd.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/libs/fancybox/fancybox.css');

$asset->addJs(SITE_TEMPLATE_PATH.'/libs/slick/slick.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/libs/slick/slick.css');


$asset->addJs(SITE_TEMPLATE_PATH.'/libs/jquery-ui/jquery-ui.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/libs/jquery-ui/jquery-ui.css');
$asset->addJs(SITE_TEMPLATE_PATH.'/libs/jquery-ui/jquery-ui.theme.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/libs/jquery-ui/jquery-ui.theme.css');


$asset->addJs(SITE_TEMPLATE_PATH.'/script.js');


if (file_exists($_SERVER["DOCUMENT_ROOT"].$APPLICATION->GetCurDir().'cover.jpg')) {
	if (CModule::IncludeModule("millcom.phpthumb")) {
		$WEBP = CMillcomPhpThumb::generateImg($APPLICATION->GetCurDir().'cover.jpg', 7);
		$APPLICATION->SetPageProperty('cover', ' style="background-image: url('.$WEBP.')"');
	} else {
		$APPLICATION->SetPageProperty('cover', ' style="background-image: url('.$APPLICATION->GetCurDir().'cover.jpg'.')"');
	}
} elseif (file_exists($_SERVER["DOCUMENT_ROOT"].dirname($_SERVER['REAL_FILE_PATH']).'/cover.jpg')) {
	if (CModule::IncludeModule("millcom.phpthumb")) {
		$WEBP = CMillcomPhpThumb::generateImg(dirname($_SERVER['REAL_FILE_PATH']).'/cover.jpg', 7);
		$APPLICATION->SetPageProperty('cover', ' style="background-image: url('.$WEBP.')"');
	} else {
		$APPLICATION->SetPageProperty('cover', ' style="background-image: url('.dirname($_SERVER['REAL_FILE_PATH']).'/cover.jpg'.')"');
	}
}


?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<?if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse') === false):?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<?else:?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?endif;?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>

		<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/site.webmanifest">
		<link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon/safari-pinned-tab.svg" color="#597063">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">


	</head>
	<body<?=($USER->IsAdmin() ? ' class="admin"' : '')?>>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<header class="py-md-3">
			<div class="container container-head py-1">
				<div class="row align-items-center">
					<div class="col-3 col-md-2">
						<a href="/">
							<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="" class="mw-100">
						</a>
					</div>
					<div class="col-7 col-md-2">
						<?$APPLICATION->IncludeFile("includes/phone.php");?>
					</div>
					<div class="col-md-2 col-lg-3 d-none d-md-block">
						<?$APPLICATION->IncludeFile("includes/social.php");?>
					</div>
					<div class="col-md-5 col-lg-4 d-none d-md-block">
						<nav class="top-menu text-nowrap">
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
						</nav>
					</div>
					<div class="col-2 col-md-1 text-end">
						<a href="#" class="open-menu">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
				<div class="main-menu white-section d-flex flex-column justify-content-between">
					<div class="container">
						<div class="menu">
							<div class="line d-none d-md-block">
								<div class="row">
									<div class="col-8"><div class="item"></div></div>
									<div class="col-3"><div class="item"></div></div>
								</div>
							</div>
							<div class="row pt-5 pt-md-4">
								<div class="col-md-8">
									<div class="menu-title">Услуги</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main",
	Array(
		"COL" => 2,
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "services",
		"USE_EXT" => "Y"
	)
);?>
								</div>
								<div class="col-md-4">
									<div class="menu-title">Информация</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "information",
		"USE_EXT" => "Y"
	)
);?>
								</div>
							</div>
						</div>
					</div>
					<div class="block-section m-2 m-lg-3 contacts p-0 py-md-4">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-md-6 d-none d-md-block">
									<div class="row align-items-center">
										<div class="col-md-4">
											<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="" class="mw-100">
										</div>
										<div class="col-md-6 slogan">
											Связаться с нами — просто и быстро
										</div>
									</div>
								</div>
								<div class="col-md-6 d-none d-md-block">
									<div class="phone-large py-2">
										<?$APPLICATION->IncludeFile("includes/phone.php");?>
									</div>
								</div>
								<div class="col-md-6 py-3 d-none d-md-block">
									<div class="contacts-block row gy-4 fs-16 mb-4">
										<div class="col-4">
											<div class="small-title py-2">Регион работы</div>
											<?$APPLICATION->IncludeFile("includes/region.php");?>
										</div>
										<div class="col-4">
											<div class="small-title py-2">Время работы</div>
											<?$APPLICATION->IncludeFile("includes/schedule.php");?>
										</div>
										<div class="col-4">
											<div class="small-title py-2">Почта</div>
											<?$APPLICATION->IncludeFile("includes/email.php");?>
										</div>
									</div>
								</div>
								<div class="col-md-6 py-3">
									<?$APPLICATION->IncludeFile("includes/social.php");?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<?if (TYPE_PAGE == 'TEXT' || TYPE_PAGE == 'CONTAINER'):?>
		<section class="block-section top-page m-md-2 m-lg-3"<?$APPLICATION->ShowProperty('cover')?>>
			<div class="shadow">
				<div class="container">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"",
					Array(
						"PATH" => "",
						"SITE_ID" => SITE_ID,
						"START_FROM" => "0"
					)
				);?>
					<div class="row text-center text-md-start">
						<div class="col-md-8">
							<h1 class="mt-md-3"><?$APPLICATION->ShowTitle(true);?></h1>
						</div>
						<div class="col-12">
							<div class="row py-3 pb-5 py-md-5">
								<div class="col-md-4 pb-3 d-none d-md-block">
									<a href="#" class="btn btn-lg btn-border">Заказать услугу</a>
								</div>
								<div class="col-md-4 fs-20">
									Удалим деревья любой сложности без ущерба имуществу
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?endif;?>
<?if (TYPE_PAGE == 'TEXT'):?>
		<section class="block-section white-section m-2 mx-md-3">
			<div class="container py-4 py-md-5 text">
<?endif;?>