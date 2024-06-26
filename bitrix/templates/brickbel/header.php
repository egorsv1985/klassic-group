<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if (!defined("PAGE"))
	define("PAGE", "TEXT");

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addJs('https://code.jquery.com/jquery-3.6.0.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js');

$asset->addJs('https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js');
$asset->addCss('https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');



// <link rel="stylesheet" href="css/style.css?_v=20230614112846">

$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');



?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg+xml" href="<?= SITE_TEMPLATE_PATH; ?>/favicon/favicon.svg">
	<link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH; ?>/favicon/favicon.png">

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TZ4Z8MX');
	</script>
	<!-- End Google Tag Manager -->

</head>


<body <?= ($USER->IsAdmin() ? ' class="admin"' : '') ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ4Z8MX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<div class="wrapper">
		<header class="header bg-white">
			<div class="border-bottom py-2">
				<div class="container">
					<div class="row align-items-center flex-nowrap">
						<div class="col-3 col-md-2">
							<picture>
								<a href="/" class="d-flex align-items-center pt-1">
									<picture>
										<source srcset="<?= PAGE === "MAIN" ? SITE_TEMPLATE_PATH . '/img/logo-main.webp' : (strpos($APPLICATION->GetCurPage(), 'zelenye-zabory') ?				SITE_TEMPLATE_PATH . '/img/logo-fences.webp' : SITE_TEMPLATE_PATH . '/img/logo.webp') ?>" type="image/webp">
										<img src="<?= PAGE === "MAIN" ? SITE_TEMPLATE_PATH . '/img/logo-main.png' : (strpos($APPLICATION->GetCurPage(), 'zelenye-zabory') ?				SITE_TEMPLATE_PATH . '/img/logo-fences.png' : SITE_TEMPLATE_PATH . '/img/logo.png') ?>" alt="logo" title="logo" class="mw-100 h-auto" width="500" height="500">
									</picture>
								</a>
						</div>

						<div class="col-3 col-md-2 d-none d-sm-block">
							<a href="tel:+375445455897" class="d-block fs-15 text-nowrap">
								+375(44) 545 58 97
							</a>
							<a href="tel:+375445455910" class="d-block fs-15 text-nowrap">
								+375(44) 545 59 10
							</a>
							<a href="tel:7671 " class="d-block fs-15 text-nowrap"><span>A1 и МТС </span>
								7671
							</a>
							<span class="d-block fs-10">звонок платный</span>
						</div>
						<div class="col-md-2 ms-2 d-none d-md-block">
							<a href="https://yandex.by/maps/-/CXeAyiT" target="_blank" class="d-block fs-15"> г. Минск, ул.<br>Карвата 63 </a>
						</div>
						<div class="col-lg-2 d-none d-lg-block">
							<span class="fs-15 d-block">Пн.-Чт.: 9:00-17:45</span>
							<span class="fs-15 d-block">Пт.: 9:00-16:30</span>
						</div>

						<ul class="col-md-1 d-none d-md-flex gap-2 ps-0 m-0 justify-content-center">
							<li class="">
								<a href="#" class="d-none">
									<svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_34_87)">
											<path d="M13.5 28C20.9558 28 27 21.732 27 14C27 6.26801 20.9558 0 13.5 0C6.04416 0 0 6.26801 0 14C0 21.732 6.04416 28 13.5 28Z" fill="#039BE5" />
											<path d="M6.17737 13.6967L19.1936 8.49216C19.7977 8.26583 20.3254 8.645 20.1296 9.59233L20.1307 9.59116L17.9145 20.419C17.7502 21.1867 17.3104 21.3733 16.695 21.0117L13.32 18.4322L11.6921 20.0585C11.5121 20.2452 11.3602 20.4027 11.0115 20.4027L11.2511 16.8408L17.5061 10.9807C17.7784 10.7322 17.4454 10.5922 17.0865 10.8395L9.35662 15.8865L6.02437 14.8085C5.30099 14.5705 5.28524 14.0583 6.17737 13.6967Z" fill="white" />
										</g>
										<defs>
											<clipPath id="clip0_34_87">
												<rect width="27" height="28" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</a>
							</li>
							<li class="">
								<a href="viber://chat?number=+375445455897" class="d-block">
									<svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_34_90)">
											<path d="M27 14.5V13.5C27 6.04416 20.9558 0 13.5 0C6.04416 0 0 6.04416 0 13.5V14.5C0 21.9558 6.04416 28 13.5 28C20.9558 28 27 21.9558 27 14.5Z" fill="#7D3DAF" />
											<path d="M21.1235 9.98643L21.1189 9.96729C20.7457 8.4027 19.0632 6.72381 17.5181 6.37453L17.5006 6.37081C15.0015 5.8764 12.4675 5.8764 9.96889 6.37081L9.95094 6.37453C8.40635 6.72381 6.72385 8.4027 6.35014 9.96729L6.34603 9.98643C5.88466 12.1714 5.88466 14.3873 6.34603 16.5723L6.35014 16.5914C6.70791 18.0892 8.26512 19.691 9.75255 20.1315V21.878C9.75255 22.5101 10.4954 22.8206 10.9178 22.3644L12.6241 20.525C12.9942 20.5465 13.3645 20.5585 13.7348 20.5585C14.9928 20.5585 16.2513 20.4351 17.5006 20.1879L17.5181 20.1842C19.0632 19.8349 20.7457 18.156 21.1189 16.5915L21.1235 16.5723C21.5849 14.3873 21.5849 12.1714 21.1235 9.98643ZM19.7732 16.2554C19.524 17.2761 18.2465 18.5451 17.2315 18.7796C15.9027 19.0416 14.5633 19.1536 13.2254 19.1152C13.1987 19.1145 13.1732 19.1251 13.1546 19.1449C12.9647 19.3471 11.9087 20.4712 11.9087 20.4712L10.5835 21.8817C10.4867 21.9864 10.3165 21.9151 10.3165 21.7705V18.8773C10.3165 18.8295 10.2835 18.7889 10.2383 18.7797C10.238 18.7796 10.2378 18.7796 10.2375 18.7795C9.22248 18.5451 7.94548 17.2761 7.69582 16.2554C7.28058 14.2804 7.28058 12.2782 7.69582 10.3032C7.94548 9.2825 9.22248 8.0135 10.2375 7.77905C12.5582 7.32131 14.9113 7.32131 17.2315 7.77905C18.2471 8.0135 19.524 9.2825 19.7732 10.3032C20.1889 12.2783 20.1889 14.2804 19.7732 16.2554Z" fill="white" />
											<path d="M15.9427 17.5909C15.7867 17.5418 15.638 17.5088 15.4999 17.4493C14.0688 16.8336 12.7517 16.0392 11.7084 14.8215C11.1151 14.1291 10.6508 13.3473 10.2582 12.52C10.0721 12.1277 9.91523 11.72 9.75534 11.3149C9.60954 10.9455 9.82429 10.5639 10.0504 10.2856C10.2626 10.0244 10.5356 9.82454 10.8313 9.67722C11.0621 9.56223 11.2898 9.62853 11.4583 9.8314C11.8227 10.27 12.1574 10.731 12.4285 11.2394C12.5951 11.5521 12.5494 11.9344 12.2474 12.1472C12.1739 12.1989 12.107 12.2596 12.0387 12.318C11.9787 12.3692 11.9222 12.421 11.8811 12.4903C11.806 12.6171 11.8024 12.7667 11.8508 12.9046C12.2233 13.9662 12.8511 14.7917 13.8814 15.2363C14.0463 15.3074 14.2119 15.3902 14.4018 15.3673C14.7199 15.3287 14.8229 14.9669 15.0458 14.7778C15.2636 14.5931 15.5421 14.5907 15.7768 14.7447C16.0115 14.8987 16.2391 15.0641 16.4652 15.2313C16.6873 15.3953 16.9083 15.5558 17.1131 15.7429C17.31 15.9227 17.3778 16.1586 17.267 16.4027C17.0639 16.8497 16.7686 17.2216 16.3425 17.459C16.2221 17.5259 16.0784 17.5476 15.9427 17.5909C16.0784 17.5476 15.7867 17.5417 15.9427 17.5909Z" fill="white" />
											<path d="M13.7386 9.16612C15.6105 9.22051 17.148 10.5088 17.4775 12.428C17.5336 12.755 17.5536 13.0893 17.5786 13.4212C17.5891 13.5608 17.5128 13.6935 17.3676 13.6953C17.2175 13.6972 17.15 13.567 17.1403 13.4274C17.121 13.1512 17.1076 12.8737 17.0709 12.5998C16.8771 11.1537 15.7652 9.95729 14.3772 9.70057C14.1684 9.66192 13.9546 9.65177 13.743 9.62875C13.6093 9.61418 13.4341 9.60578 13.4045 9.43337C13.3796 9.28882 13.4973 9.17372 13.63 9.16633C13.6661 9.16426 13.7024 9.16596 13.7386 9.16612C15.6105 9.22051 13.7024 9.16596 13.7386 9.16612Z" fill="white" />
											<path d="M16.5834 12.9905C16.5803 13.0147 16.5787 13.0717 16.565 13.1254C16.5153 13.3203 16.2304 13.3447 16.1648 13.148C16.1454 13.0896 16.1424 13.0232 16.1423 12.9604C16.1417 12.5492 16.0555 12.1385 15.8556 11.7807C15.65 11.4131 15.3361 11.104 14.9678 10.9169C14.7451 10.8039 14.5042 10.7336 14.2602 10.6917C14.1535 10.6734 14.0457 10.6623 13.9385 10.6468C13.8086 10.6281 13.7392 10.5422 13.7454 10.4095C13.7511 10.2851 13.8388 10.1956 13.9695 10.2033C14.3991 10.2286 14.814 10.3249 15.1959 10.5346C15.9726 10.9611 16.4162 11.6344 16.5457 12.5334C16.5516 12.5741 16.561 12.6144 16.564 12.6553C16.5713 12.7563 16.5759 12.8573 16.5834 12.9905C16.5803 13.0147 16.5759 12.8573 16.5834 12.9905Z" fill="white" />
											<path d="M15.4191 12.9435C15.2625 12.9464 15.1787 12.8565 15.1625 12.7076C15.1513 12.6037 15.1424 12.4985 15.1185 12.3975C15.0715 12.1986 14.9695 12.0142 14.8081 11.8923C14.732 11.8347 14.6456 11.7928 14.5552 11.7657C14.4403 11.7313 14.321 11.7408 14.2064 11.7117C14.0819 11.68 14.0131 11.5755 14.0327 11.4544C14.0504 11.3442 14.1538 11.2582 14.27 11.2669C14.9957 11.3212 15.5144 11.7103 15.5884 12.5964C15.5937 12.6589 15.5998 12.725 15.5864 12.7848C15.5635 12.8872 15.4904 12.9385 15.4191 12.9435C15.4904 12.9385 15.2625 12.9464 15.4191 12.9435Z" fill="white" />
										</g>
										<defs>
											<clipPath id="clip0_34_90">
												<rect width="27" height="28" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</a>
							</li>
						</ul>

						<div class="col-7 col-sm-5 col-md-4 col-lg-3 pt-1 d-block">
							<!-- Button trigger modal -->
							<button type="button" class="fs-15 fw-500 btn  d-block btn-transparent btn-outline-secondary text-nowrap p-3 w-100" data-bs-toggle="modal" data-bs-target="#callback">
								<span class="mx-3">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_415_16060)">
											<path d="M12.0417 15.8333L10 18.75L7.95835 15.8333H2.50002C2.27901 15.8333 2.06704 15.7455 1.91076 15.5893C1.75448 15.433 1.66669 15.221 1.66669 15V3.33333C1.66669 3.11232 1.75448 2.90036 1.91076 2.74408C2.06704 2.5878 2.27901 2.5 2.50002 2.5H17.5C17.721 2.5 17.933 2.5878 18.0893 2.74408C18.2456 2.90036 18.3334 3.11232 18.3334 3.33333V15C18.3334 15.221 18.2456 15.433 18.0893 15.5893C17.933 15.7455 17.721 15.8333 17.5 15.8333H12.0417Z" fill="#5E2627" />
										</g>
										<defs>
											<clipPath id="clip0_415_16060">
												<rect width="20" height="20" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</span>

								Консультация
							</button>
						</div>
						<div class="col-1">
							<button type="button" class="header__burger burger button d-lg-none d-block" title="открытие меню">
								<span class="burger__inner position-relative w-100 h-100 d-flex justify-content-center align-items-center">
									<span></span>
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="header__bottom">
				<div class="container">
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"top-menu",
						array(
							"COMPONENT_TEMPLATE" => "top-menu",
							"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(),
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						),
						false
					); ?>
				</div>
			</div>
		</header>
		<main class="<?= (strpos($APPLICATION->GetCurPage(), 'zelenye-zabory')  !== false) ? ' padding' : '' ?>">
			<div class="container py-4">
				<? if (PAGE == 'TEXT' || PAGE == 'FENCES') : ?>
					<? $APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"",
						array()
					); ?>
					<div class="row pt-4 mb-3 mb-5">
						<div class="col">
							<h1 class="fs-48 fw-700 ff-roboto"><? $APPLICATION->ShowTitle(true); ?></h1>
						</div>
						<? if (PAGE != 'FENCES' && strpos($APPLICATION->GetCurPage(), 'zelenye-zabory') == false && PAGE != 'PANELI' && strpos($APPLICATION->GetCurPage(), 'interernye-akusticheskie-paneli') == false): ?>
							<div class="col-4 offset-3">
								<div class="fs-18 lh-11">
									<p>
										Более 20 разных цветов. Возможно изготовление индивидуальных цветов
										по спецзаказу!
									</p>
								</div>
							</div>
						<? endif; ?>
						
					</div>
				<? endif; ?>
			</div>