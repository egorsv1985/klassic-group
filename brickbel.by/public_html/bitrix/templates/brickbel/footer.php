<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<section class="contacts pt-5 border-bottom">
	<div class="container">
		<div class="row justify-content-end mb-5 overflow-hidden">
			<div class="title position-relative col-6 col-md-3 fs-16 text-center text-uppercase border border-secondary py-2 rounded-2">
				<h3>КОНТАКТЫ</h3>
			</div>
		</div>
		<?
		if ($APPLICATION->GetCurPage(false) === '/') {
			// Выводим код только на главной странице
		?>
		<script type="text/javascript">if(window.BX)BX.ready(function() {(new BX.CMenuOpener({'parent':'bx_incl_area_1_7','id':'comp_1_7','component_id':'ac930a12a8a872892d932a3278c9f883','HINT':{'TITLE':'Структура разделов','TEXT':'(компонент bitrix:catalog.section.list)<br />Выводит структуру разделов инфоблока с количеством элементов в каждом разделе'},'menu':[{'ICONCLASS':'bx-context-toolbar-settings-icon','TITLE':'','TEXT':'Редактировать параметры компонента','ONCLICK':'(new BX.CDialog({\'content_url\':\'/bitrix/admin/component_props.php?component_name=bitrix%3Acatalog.section.list&component_template=faq&template_id=brickbel&lang=ru&src_path=%2Findex.php&src_line=215&src_page=%2F&src_site=s1&siteTemplateId=brickbel\',\'width\':\'\',\'height\':\'\',\'min_width\':\'450\'})).Show()','DEFAULT':true,'TYPE':'components2_props'},{'ICONCLASS':'bx-context-toolbar-create-icon','TITLE':'','TEXT':'Добавить элемент','ONCLICK':'(new BX.CAdminDialog({\'content_url\':\'/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=7&type=CONTENT&lang=ru&force_catalog=&filter_section=0&IBLOCK_SECTION_ID=0&bxpublic=Y&from_module=iblock&return_url=%23SITE_DIR%23%2Ffaq%2F%23SECTION_CODE%23%2F&siteTemplateId=brickbel\',\'width\':\'700\',\'height\':\'400\'})).Show()','IMAGE':'/bitrix/images/iblock/icons/new_element.gif'},{'ICONCLASS':'bx-context-toolbar-create-icon','TITLE':'','TEXT':'Добавить вопрос','ONCLICK':'(new BX.CAdminDialog({\'content_url\':\'/bitrix/admin/iblock_section_edit.php?IBLOCK_ID=7&type=CONTENT&lang=ru&force_catalog=&IBLOCK_SECTION_ID=0&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%23SITE_DIR%23%2Ffaq%2F%23SECTION_CODE%23%2F&siteTemplateId=brickbel\',\'width\':\'700\',\'height\':\'400\'})).Show()','IMAGE':'/bitrix/images/iblock/icons/new_section.gif'},{'TYPE':'components2_submenu','TEXT':'components2_submenu','ICON':'parameters-2','MENU':[{'ICONCLASS':'bx-context-toolbar-settings-icon','TITLE':'','TEXT':'Редактировать параметры компонента','ONCLICK':'(new BX.CDialog({\'content_url\':\'/bitrix/admin/component_props.php?component_name=bitrix%3Acatalog.section.list&component_template=faq&template_id=brickbel&lang=ru&src_path=%2Findex.php&src_line=215&src_page=%2F&src_site=s1&siteTemplateId=brickbel\',\'width\':\'\',\'height\':\'\',\'min_width\':\'450\'})).Show()','DEFAULT':true,'TYPE':'components2_props'},{'TEXT':'Структура разделов (bitrix:catalog.section.list)','ICON':'parameters-2','MENU':[{'ICONCLASS':'copy-2','TITLE':'','TEXT':'Копировать шаблон компонента','ONCLICK':'(new BX.CDialog({\'content_url\':\'/bitrix/admin/template_copy.php?lang=ru&component_name=bitrix%3Acatalog.section.list&component_template=faq&template_id=brickbel&template_site_template=brickbel&src_path=%2Findex.php&src_line=215&src_site=s1&edit_file=template&back_path=%2F%3Fclear_cache%3DY&siteTemplateId=brickbel\',\'width\':\'\',\'height\':\'\',\'min_width\':\'450\'})).Show()'},{'ICONCLASS':'edit-2','TITLE':'','TEXT':'Редактировать шаблон компонента','ONCLICK':'(new BX.CEditorDialog({\'content_url\':\'/bitrix/admin/public_file_edit_src.php?site=s1&path=%2Fbitrix%2Ftemplates%2Fbrickbel%2Fcomponents%2Fbitrix%2Fcatalog.section.list%2Ffaq%2Ftemplate.php&back_url=%2F%3Fclear_cache%3DY&lang=ru&siteTemplateId=brickbel\',\'width\':\'770\',\'height\':\'470\',\'min_width\':\'700\',\'min_height\':\'400\'})).Show()'},{'ICONCLASS':'del-cache','TITLE':'','TEXT':'Обновить кеш компонента','ONCLICK':'jsComponentUtils.ClearCache(\'component_name=bitrix%3Acatalog.section.list&site_id=s1&sessid=0a06304dc42c35f936da099853921c4e\');'},{'SEPARATOR':'Y'},{'ICONCLASS':'','TITLE':'Временно отключить компонент с сохранением настроек','TEXT':'Отключить компонент','ONCLICK':'jsComponentUtils.EnableComponent(\'component_name=bitrix%3Acatalog.section.list&lang=ru&src_path=%2Findex.php&src_line=215&src_site=s1&active=N&sessid=0a06304dc42c35f936da099853921c4e\');'}]}]}]})).Show()});</script></div><script type="text/javascript">if(window.BX&&BX.admin)BX.admin.setComponentBorder('bx_incl_area_1_7')</script><div id="bx_incl_area_1_8"><script type="text/javascript">
function BX_SetPlacemarks_MAP_mF8Ev4(map)
{
	if(typeof window["BX_YMapAddPlacemark"] != 'function')
	{
		/* If component's result was cached as html,
		 * script.js will not been loaded next time.
		 * let's do it manualy.
		*/

		(function(d, s, id)
		{
			var js, bx_ym = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "/bitrix/templates/brickbel/components/bitrix/map.yandex.view/map/script.js";
			bx_ym.parentNode.insertBefore(js, bx_ym);
		}(document, 'script', 'bx-ya-map-js'));

		var ymWaitIntervalId = setInterval( function(){
				if(typeof window["BX_YMapAddPlacemark"] == 'function')
				{
					BX_SetPlacemarks_MAP_mF8Ev4(map);
					clearInterval(ymWaitIntervalId);
				}
			}, 300
		);

		return;
	}

	var arObjects = {PLACEMARKS:[],POLYLINES:[]};
}
</script>
			<div class="map mb-4">
				<div class="bx-yandex-view-layout">
					<div class="bx-yandex-view-map">
						<script>
							var script = document.createElement('script');
							script.src = 'https://api-maps.yandex.ru/2.0/?load=package.full&mode=release&lang=ru-RU&wizard=bitrix';
							(document.head || document.documentElement).appendChild(script);
							script.onload = function() {
								this.parentNode.removeChild(script);
							};
						</script>
						<script type="text/javascript">
							if (!window.GLOBAL_arMapObjects)
								window.GLOBAL_arMapObjects = {};

							function init_MAP_mF8Ev4() {
								if (!window.ymaps)
									return;

								var node = BX("BX_YMAP_MAP_mF8Ev4");
								node.innerHTML = '';

								var map = window.GLOBAL_arMapObjects['MAP_mF8Ev4'] = new ymaps.Map(node, {
									center: [53.906443, 27.677480],
									zoom: 10,
									type: 'yandex#map'
								});

								map.behaviors.enable("scrollZoom");
								map.behaviors.enable("dblClickZoom");
								map.behaviors.enable("drag");
								if (map.behaviors.isEnabled("rightMouseButtonMagnifier"))
									map.behaviors.disable("rightMouseButtonMagnifier");
								map.controls.add('zoomControl');
								map.controls.add('miniMap');
								map.controls.add('typeSelector');
								map.controls.add('scaleLine');
								if (window.BX_SetPlacemarks_MAP_mF8Ev4) {
									window.BX_SetPlacemarks_MAP_mF8Ev4(map);
								}
							}

							(function bx_ymaps_waiter() {
								if (typeof ymaps !== 'undefined')
									ymaps.ready(init_MAP_mF8Ev4);
								else
									setTimeout(bx_ymaps_waiter, 100);
							})();


							/* if map inits in hidden block (display:none)
							 *  after the block showed
							 *  for properly showing map this function must be called
							 */
							function BXMapYandexAfterShow(mapId) {
								if (window.GLOBAL_arMapObjects[mapId] !== undefined)
									window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
							}
						</script>
						<div id="BX_YMAP_MAP_mF8Ev4" class="bx-yandex-map" style="height: 485px; width: 100%;max-width: 100%;"><?
																																$APPLICATION->IncludeComponent('bitrix:map.yandex.system', '.default', $arTransParams, false, array('HIDE_ICONS' => 'Y'));
																																?></div>
					</div>
				</div>
			</div>
		<? } ?>
		<div class="row">
			<div class="col-12 col-md-7 col-lg-6 mt-md-5 mb-3">
				<div class="fs-40 fw-700 ff-roboto mb-3">
					<h2>Связаться с нами</h2>
				</div>
				<div class="fs-18 mb-4 pe-5">
					<p>
						Заполните, пожалуйста, форму ниже, и мы сможем проконсультировать
						вас более детально
					</p>
				</div>
				<form action="#" class="form pb-5">
					<div class="row g-4">
						<div class="col-12 col-sm-6 form-group position-relative">
							<input type="text" class="form-control bg-light rounded-2 border border-secondary text-secondary p-3 h-100" name="name-contact" id="name-contact" placeholder="" required />
							<label for="name-contact" class="form-label fs-16 text-secondary position-absolute top-50">Имя</label>
						</div>
						<div class="col-12 col-sm-6 form-group position-relative">
							<input type="text" class="form-control bg-light rounded-2 border border-secondary text-secondary p-3 h-100" name="tel-contact" id="tel-contact" placeholder="" required />
							<label for="tel-contact" class="form-label fs-16 text-secondary position-absolute top-50">Телефон</label>
						</div>

						<div class="col-12 col-sm-6 form-check form-check-inline position-relative me-0 ps-3">
							<input type="checkbox" class="form-check-input m-0" value="" name="check" id="check" checked />

							<label class="form-check-label fs-14 d-block ms-5" for="check">
								Нажимая на кнопку, Вы даете согласие на обработку персональных
								данных
							</label>
						</div>
						<div class="col-12 col-sm-6">
							<button type="submit" class="btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient w-100 border-0">
								Отправить
							</button>
						</div>
					</div>
				</form>
				<div class="fs-16 fw-500 mt-4">
					<p>Или свяжитесь с нами:</p>
				</div>
				<div class="row gy-3 mb-md-5">
					<div class="col-12 col-sm-6">
						<a href="#" class="d-block rounded-2 border border-dashed border-primary fs-16 text-info py-3 ps-2 ps-lg-4 pe-2 text-nowrap h-100">
							<svg class="me-2 me-lg-3" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.977816 7.43107L19.6014 0.0898489C20.4658 -0.229406 21.2207 0.305429 20.9406 1.64169L20.9422 1.64005L17.7712 16.9133C17.5362 17.9961 16.9069 18.2594 16.0264 17.7493L11.1974 14.1107L8.86829 16.4048C8.61075 16.6681 8.39345 16.8902 7.89446 16.8902L8.23731 11.8661L17.1869 3.60001C17.5765 3.24949 17.1 3.05201 16.5865 3.40089L5.52667 10.5199L0.758904 8.99937C-0.276097 8.66366 -0.298632 7.94122 0.977816 7.43107Z" fill="#aaa" />
							</svg>
							Написать в Telegram
						</a>
					</div>
					<div class="col-12 col-sm-6">
						<a href="#" class="d-block rounded-2 border border-dashed border-primary fs-16 text-info py-3 ps-2 ps-lg-4 pe-2 text-nowrap h-100">
							<svg class="me-2 me-lg-3" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M19.5526 5.16864L19.5467 5.14382C19.0642 3.11524 16.8889 0.938467 14.8913 0.485604L14.8688 0.480779C11.6377 -0.16026 8.36161 -0.16026 5.13123 0.480779L5.10803 0.485604C3.11108 0.938467 0.935843 3.11524 0.452678 5.14382L0.447375 5.16864C-0.149125 8.00162 -0.149125 10.8746 0.447375 13.7076L0.452678 13.7324C0.915231 15.6744 2.92849 17.7511 4.85154 18.3223V20.5867C4.85154 21.4063 5.8119 21.8088 6.35803 21.2174L8.56409 18.8326C9.04255 18.8604 9.52127 18.8759 10 18.8759C11.6265 18.8759 13.2536 18.716 14.8688 18.3955L14.8913 18.3907C16.8889 17.9378 19.0642 15.761 19.5467 13.7324L19.5526 13.7076C20.1491 10.8746 20.1491 8.00162 19.5526 5.16864ZM17.8069 13.2967C17.4848 14.6202 15.8331 16.2655 14.5208 16.5695C12.8028 16.9092 11.0712 17.0545 9.3414 17.0046C9.307 17.0037 9.27392 17.0175 9.24993 17.0432C9.00444 17.3052 7.63918 18.7628 7.63918 18.7628L5.9259 20.5915C5.80064 20.7273 5.58059 20.6349 5.58059 20.4474V16.6962C5.58059 16.6342 5.53804 16.5815 5.47952 16.5696C5.47919 16.5696 5.47886 16.5695 5.47853 16.5694C4.16622 16.2654 2.51524 14.6201 2.19247 13.2967C1.65562 10.736 1.65562 8.14009 2.19247 5.57938C2.51524 4.25595 4.16622 2.61061 5.47853 2.30664C8.47892 1.71316 11.5211 1.71316 14.5208 2.30664C15.8338 2.61061 17.4848 4.25595 17.8069 5.57938C18.3443 8.14016 18.3443 10.736 17.8069 13.2967Z" fill="#aaa" />
								<path d="M12.8547 15.0283C12.653 14.9646 12.4607 14.9218 12.2821 14.8447C10.4319 14.0464 8.7291 13.0164 7.38028 11.4376C6.61325 10.5398 6.0129 9.52623 5.50541 8.45356C5.26476 7.94486 5.06195 7.41625 4.85523 6.89108C4.66673 6.41216 4.94437 5.91739 5.23672 5.55654C5.51105 5.2179 5.86404 4.95872 6.24633 4.76772C6.54472 4.61863 6.83906 4.70458 7.05698 4.96761C7.52808 5.53628 7.96081 6.13403 8.31122 6.7932C8.52669 7.19864 8.46757 7.69424 8.07706 7.97016C7.98215 8.03723 7.89566 8.11594 7.80724 8.1917C7.7297 8.25808 7.65673 8.32514 7.60357 8.41503C7.50641 8.57949 7.50177 8.77346 7.56434 8.95226C8.04591 10.3286 8.85762 11.3989 10.1897 11.9753C10.4028 12.0676 10.6169 12.175 10.8625 12.1452C11.2737 12.0952 11.4069 11.6261 11.695 11.381C11.9767 11.1414 12.3367 11.1383 12.6401 11.338C12.9436 11.5377 13.2378 11.7522 13.5302 11.9689C13.8173 12.1816 14.103 12.3897 14.3678 12.6322C14.6224 12.8654 14.7101 13.1713 14.5667 13.4877C14.3043 14.0673 13.9224 14.5494 13.3715 14.8572C13.2159 14.944 13.0301 14.9721 12.8547 15.0283C13.0301 14.9721 12.653 14.9645 12.8547 15.0283Z" fill="#aaa" />
								<path d="M10.005 4.10505C12.4252 4.17557 14.4129 5.84592 14.8389 8.33426C14.9115 8.75824 14.9373 9.19174 14.9696 9.62206C14.9832 9.80307 14.8846 9.97504 14.6968 9.97739C14.5028 9.9798 14.4155 9.81099 14.4029 9.63006C14.378 9.2719 14.3607 8.91216 14.3132 8.55697C14.0627 6.68203 12.6251 5.13085 10.8307 4.79799C10.5607 4.74788 10.2843 4.73472 10.0107 4.70487C9.83783 4.68599 9.61136 4.67509 9.57305 4.45156C9.5409 4.26414 9.69301 4.11491 9.8646 4.10533C9.91126 4.10264 9.95819 4.10484 10.005 4.10505C12.4252 4.17557 9.95819 4.10484 10.005 4.10505Z" fill="#aaa" />
								<path d="M13.6829 9.06355C13.679 9.09498 13.6768 9.16888 13.6591 9.23849C13.5949 9.49119 13.2266 9.52282 13.1417 9.26779C13.1166 9.1921 13.1128 9.10601 13.1127 9.02454C13.1118 8.49144 13.0004 7.95889 12.7419 7.49507C12.4762 7.01836 12.0703 6.61761 11.5941 6.37511C11.3062 6.2285 10.9948 6.13738 10.6793 6.08306C10.5414 6.05935 10.402 6.04494 10.2634 6.02489C10.0955 6.00062 10.0058 5.8893 10.0137 5.71719C10.0212 5.55589 10.1345 5.43988 10.3035 5.44981C10.8589 5.48262 11.3954 5.60745 11.8891 5.87938C12.8932 6.43239 13.4668 7.30531 13.6342 8.4709C13.6418 8.5237 13.654 8.57602 13.6578 8.62902C13.6673 8.75992 13.6733 8.89095 13.6829 9.06355C13.679 9.09498 13.6733 8.89095 13.6829 9.06355Z" fill="#aaa" />
								<path d="M12.1776 9.00241C11.9751 9.0062 11.8668 8.88964 11.8459 8.69657C11.8314 8.56196 11.8199 8.42555 11.789 8.29458C11.7282 8.03665 11.5964 7.7976 11.3877 7.63955C11.2892 7.5649 11.1776 7.51051 11.0607 7.47543C10.9122 7.43083 10.7579 7.4431 10.6097 7.40533C10.4488 7.36432 10.3598 7.2288 10.3851 7.07178C10.4081 6.92889 10.5418 6.81737 10.6919 6.82867C11.6302 6.89912 12.3008 7.40361 12.3965 8.55237C12.4033 8.63344 12.4112 8.71911 12.3939 8.79666C12.3643 8.92942 12.2698 8.99593 12.1776 9.00241C12.2698 8.99593 11.9751 9.0062 12.1776 9.00241Z" fill="#aaa" />
							</svg>
							Написать в Viber
						</a>
					</div>
				</div>
			</div>
			<div class="col-1 d-none d-lg-block border-end"></div>
			<div class="col-1 d-none d-lg-block"></div>
			<div class="col-12 col-md-5 col-lg-4 mt-md-5 mb-3 pt-3">
				<span class="d-block fs-16 text-nowrap text-dark mb-3">Телефоны</span>
				<div class="row g-4">
					<div class="col-6">
						<span class="d-block text-info fs-15 mb-2">Telegram</span>
						<a href="tel:+375293729823" class="d-block fs-16 text-nowrap">
							+375(29) 372 98 23
						</a>
					</div>
					<div class="col-6">
						<span class="d-block text-info fs-15 mb-2">Viber</span>
						<a href="tel:+375293729823" class="d-block fs-16 text-nowrap">
							+375(29) 372 98 23
						</a>
						<a href="tel:+375296410363" class="d-block fs-16 text-nowrap">
							+375(29) 641 03 63
						</a>
					</div>
					<div class="col-6">
						<span class="d-block text-info fs-15 mb-2">Колл-центр</span>
						<a href="tel:+375445455897" class="d-block fs-16 text-nowrap">
							+375(44) 545 58 97
						</a>
						<a href="tel:+375172482432" class="d-block fs-16 text-nowrap">
							+375(17) 248 24 32
						</a>
					</div>
					<div class="col-6">
						<span class="d-block text-info fs-15 mb-2">Консультация</span>
						<a href="tel:+375445455910" class="d-block fs-16 text-nowrap">
							+375(44) 545 59 10
						</a>
						<a href="tel:+375445450054" class="d-block fs-16 text-nowrap">
							+375(44) 545 00 54
						</a>
					</div>
					<div class="col-6 mt-5">
						<span class="d-block fs-16 text-nowrap mb-3">Адрес</span>
						<a href="#" class="d-block fs-15">
							г. Минск, ул. Карвата 63
						</a>

					</div>
					<div class="col-6 mt-5">
						<span class="d-block fs-16 text-nowrap mb-3">Режим работы</span>
						<span class="d-block fs-15">
							Пн.-Чт.: 9:00-17:45
						</span>
						<span class="d-block fs-15">
							Пт.: 9:00-16:30
						</span>

					</div>
					<div class="col-6 mt-5">
						<span class="d-block fs-16 text-nowrap mb-3">Почта</span>
						<a href="mailto:brickbel.belarus@gmail.com" class="d-block fs-15">brickbel.belarus@gmail.com</a>
						<a href="mailto:kalinin0712@tut.by" class="d-block fs-15">kalinin0712@tut.by</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</main>
<footer class="footer py-5">
	<div class="container">
		<div class="row gy-3">
			<div class="col-12 col-sm-6">
				<span class="d-block fs-14">Частное производственное унитарное предприятие «Классик-Групп».
				</span>
				<span class="d-block fs-14 mb-3">Зарегистрированное решением Минского горисполкома от 30 июня 2021г.
				</span>
				<span class="d-block fs-14 mb-4">УНП 100124892 </span>
			</div>
			<div class="col-12 col-sm-5 col-lg-4 offset-lg-2 offset-sm-1">
				<a href="#" target="_blank" class="d-block fs-14">Политика конфиденциальности</a>
				<a href="https://atib.by" target="_blank" class="d-block fs-14 mb-5">Разработка сайта: АТИБ</a>
			</div>
			<div class="col-12 col-sm-6">
				<div class="d-flex align-items-center gap-2 flex-wrap">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/visa.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/visa.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/visa-secure.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/visa-secure.png" alt="">
					</picture>

					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/master.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/master.png" alt="">
					</picture>

					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/master-ID.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/master-ID.png" alt="">
					</picture>

					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/belkart.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/belkart.png" alt="">
					</picture>

					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/belkart-internet.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/belkart-internet.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/bepaid.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/bepaid.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/gpay.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/gpay.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/mtb.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/mtb.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/mir.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/mir.png" alt="">
					</picture>
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/mir-accept.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/mir-accept.png" alt="">
					</picture>
				</div>
			</div>
			<div class="col12 col-sm-5 col-lg-4 offset-lg-2 offset-sm-1">
				<div class="col-12 col-sm-6">
					<ul class="d-flex gap-2 ps-0 m-0">
						<li class="">
							<a href="#" class="d-block">
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
							<a href="#" class="d-block">
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
				</div>
			</div>
		</div>
	</div>
</footer>

</div>


<!-- Modal -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Консультация</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

				</button>
			</div>
			<div class="modal-body">
				<form action="#" class="form">
					<div class="row gy-3">
						<div class="form-group position-relative">
							<input type="text" class="form-control form__input bg-light rounded-2 border border-secondary text-secondary p-3 h-100" name="name-modal" id="name-modal" placeholder="" required />
							<label for="name-modal" class="form-label form__label fs-16 text-secondary position-absolute top-50">Имя</label>
						</div>
						<div class="form-group position-relative">
							<input type="text" class="form-control form__input bg-light rounded-2 border border-secondary text-secondary p-3 h-100" name="tel-modal" id="tel-modal" placeholder="" required />
							<label for="tel-modal" class="form-label form__label fs-16 text-secondary position-absolute top-50">Телефон</label>
						</div>

						<div class="">
							<button type="submit" class="btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient w-100 border-0">
								Отправить
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	var modalId = document.getElementById("callback");

	modalId.addEventListener("show.bs.modal", function(event) {
		// Button that triggered the modal
		let button = event.relatedTarget;
		// Extract info from data-bs-* attributes
		let recipient = button.getAttribute("data-bs-whatever");

		// Use above variables to manipulate the DOM
	});
</script>


</body>

</html>