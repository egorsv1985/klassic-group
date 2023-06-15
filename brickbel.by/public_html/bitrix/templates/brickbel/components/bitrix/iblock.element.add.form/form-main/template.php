<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(false);
?>

<section class="form py-5">
	<div class="container bg-success px-4 py-5 rounded-top">
		<div class="row mb-4">
			<div class="col-12 col-md-6 fs-30 fw-700 ff-roboto">
				<h2>Оставьте заявку для бесплатной консультации</h2>
			</div>
			<div class="col-12 col-md-6 col-lg-4 fs-18 lh-11 pt-3">
				<p>Наш сотрудник свяжется с вами для уточнения всех деталей</p>
			</div>
		</div>
		<?

if (!empty($arResult["ERRORS"])) : ?>
	<? ShowError(implode("<br />", $arResult["ERRORS"])) ?>
<? endif;
if ($arResult["MESSAGE"] <> '') : ?>
	<? ShowNote($arResult["MESSAGE"]) ?>
<? endif ?>
		<form name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
			<div class="row gy-3">
				<?= bitrix_sessid_post() ?>
				<? if ($arParams["MAX_FILE_SIZE"] > 0) : ?><input type="hidden" name="MAX_FILE_SIZE" value="<?= $arParams["MAX_FILE_SIZE"] ?>" /><? endif ?>



				<? if (is_array($arResult["PROPERTY_LIST"]) && !empty($arResult["PROPERTY_LIST"])) : ?>

					<? foreach ($arResult["PROPERTY_LIST"] as $propertyID) : ?>
						<div class="col-12 col-md-6 col-lg-3 form-group position-relative">



							<?
							if (intval($propertyID) > 0) {
								if (
									$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T"
									&&
									$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1"
								)
									$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
								elseif (
									($arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"
										||
										$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N"
									)
									&&
									$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1"
								)
									$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
							} elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
								$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";

							if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y") {
								$inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ? count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
								$inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
							} else {
								$inputNum = 1;
							}

							if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
								$INPUT_TYPE = "USER_TYPE";
							else
								$INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];

							switch ($INPUT_TYPE):
								case "USER_TYPE":
									for ($i = 0; $i < $inputNum; $i++) {
										if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) {
											$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["~VALUE"] : $arResult["ELEMENT"][$propertyID];
											$description = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["DESCRIPTION"] : "";
										} elseif ($i == 0) {
											$value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
											$description = "";
										} else {
											$value = "";
											$description = "";
										}
										echo call_user_func_array(
											$arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"],
											array(
												$arResult["PROPERTY_LIST_FULL"][$propertyID],
												array(
													"VALUE" => $value,
													"DESCRIPTION" => $description,
												),
												array(
													"VALUE" => "PROPERTY[" . $propertyID . "][" . $i . "][VALUE]",
													"DESCRIPTION" => "PROPERTY[" . $propertyID . "][" . $i . "][DESCRIPTION]",
													"FORM_NAME" => "iblock_add",
												),
											)
										);
									}
									break;
								case "TAGS":
									$APPLICATION->IncludeComponent(
										"bitrix:search.tags.input",
										"",
										array(
											"VALUE" => $arResult["ELEMENT"][$propertyID],
											"NAME" => "PROPERTY[" . $propertyID . "][0]",
											"TEXT" => 'size="' . $arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"] . '"',
										),
										null,
										array("HIDE_ICONS" => "Y")
									);
									break;
								case "HTML":
									$LHE = new CHTMLEditor;
									$LHE->Show(array(
										'name' => "PROPERTY[" . $propertyID . "][0]",
										'id' => preg_replace("/[^a-z0-9]/i", '', "PROPERTY[" . $propertyID . "][0]"),
										'inputName' => "PROPERTY[" . $propertyID . "][0]",
										'content' => $arResult["ELEMENT"][$propertyID],
										'width' => '100%',
										'minBodyWidth' => 350,
										'normalBodyWidth' => 555,
										'height' => '200',
										'bAllowPhp' => false,
										'limitPhpAccess' => false,
										'autoResize' => true,
										'autoResizeOffset' => 40,
										'useFileDialogs' => false,
										'saveOnBlur' => true,
										'showTaskbars' => false,
										'showNodeNavi' => false,
										'askBeforeUnloadPage' => true,
										'bbCode' => false,
										'siteId' => SITE_ID,
										'controlsMap' => array(
											array('id' => 'Bold', 'compact' => true, 'sort' => 80),
											array('id' => 'Italic', 'compact' => true, 'sort' => 90),
											array('id' => 'Underline', 'compact' => true, 'sort' => 100),
											array('id' => 'Strikeout', 'compact' => true, 'sort' => 110),
											array('id' => 'RemoveFormat', 'compact' => true, 'sort' => 120),
											array('id' => 'Color', 'compact' => true, 'sort' => 130),
											array('id' => 'FontSelector', 'compact' => false, 'sort' => 135),
											array('id' => 'FontSize', 'compact' => false, 'sort' => 140),
											array('separator' => true, 'compact' => false, 'sort' => 145),
											array('id' => 'OrderedList', 'compact' => true, 'sort' => 150),
											array('id' => 'UnorderedList', 'compact' => true, 'sort' => 160),
											array('id' => 'AlignList', 'compact' => false, 'sort' => 190),
											array('separator' => true, 'compact' => false, 'sort' => 200),
											array('id' => 'InsertLink', 'compact' => true, 'sort' => 210),
											array('id' => 'InsertImage', 'compact' => false, 'sort' => 220),
											array('id' => 'InsertVideo', 'compact' => true, 'sort' => 230),
											array('id' => 'InsertTable', 'compact' => false, 'sort' => 250),
											array('separator' => true, 'compact' => false, 'sort' => 290),
											array('id' => 'Fullscreen', 'compact' => false, 'sort' => 310),
											array('id' => 'More', 'compact' => true, 'sort' => 400)
										),
									));
									break;
								case "T":
									for ($i = 0; $i < $inputNum; $i++) {

										if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) {
											$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
										} elseif ($i == 0) {
											$value = intval($propertyID) > 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
										} else {
											$value = "";
										}
							?>
										<textarea cols="<?= $arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"] ?>" rows="<?= $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] ?>" name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]"><?= $value ?></textarea>
									<?
									}
									break;

								case "S":
								case "N":
									for ($i = 0; $i < $inputNum; $i++) {
										if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) {
											$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
										} elseif ($i == 0) {
											$value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
										} else {
											$value = "";
										}
									?>


										<input class="form-control form__input bg-light rounded-2 border border-secondary text-secondary p-3 h-100" type="text" name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]" id="PROPERTY[<?= $propertyID ?>][<?= $i ?>]" placeholder="" value="<?= $value ?>" required>
										<label for="PROPERTY[<?= $propertyID ?>][<?= $i ?>]" class="form-label form__label fs-16 text-secondary position-absolute top-50"><? if (intval($propertyID) > 0) : ?><?= $arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"] ?><? else : ?><?= !empty($arParams["CUSTOM_TITLE_" . $propertyID]) ? $arParams["CUSTOM_TITLE_" . $propertyID] : GetMessage("IBLOCK_FIELD_" . $propertyID) ?><? endif ?></label>
										<?
										if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["USER_TYPE"] == "DateTime") : ?><?
																														$APPLICATION->IncludeComponent(
																															'bitrix:main.calendar',
																															'',
																															array(
																																'FORM_NAME' => 'iblock_add',
																																'INPUT_NAME' => "PROPERTY[" . $propertyID . "][" . $i . "]",
																																'INPUT_VALUE' => $value,
																															),
																															null,
																															array('HIDE_ICONS' => 'Y')
																														);
																														?><small><?= GetMessage("IBLOCK_FORM_DATE_FORMAT") ?><?= FORMAT_DATETIME ?></small><?
																																																		endif
																																																			?><?
																																																																																																}
																																																																																																break;

																																																																																															case "F":
																																																																																																for ($i = 0; $i < $inputNum; $i++) {
																																																																																																	$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
																																																																																																	?>
										<input type="hidden" name="PROPERTY[<?= $propertyID ?>][<?= $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i ?>]" value="<?= $value ?>">
										<label for="PROPERTY_FILE_<?= $propertyID ?>_<?= $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i ?>" class="form-label form-file fs-16  rounded-2 border border-dashed py-2 py-md-0 px-5 mb-0 d-flex align-items-center h-100 text-nowrap w-100">

											<span class="form-file-text position-absolute">Прикрепить файл</span> </label>
										<input class="form-control opacity-0" type="file" name="PROPERTY_FILE_<?= $propertyID ?>_<?= $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i ?>" id="PROPERTY_FILE_<?= $propertyID ?>_<?= $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i ?>">
										<?

																																																																																																	if (!empty($value) && is_array($arResult["ELEMENT_FILES"][$value])) {
										?>
											<input type="checkbox" name="DELETE_FILE[<?= $propertyID ?>][<?= $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i ?>]" id="file_delete_<?= $propertyID ?>_<?= $i ?>" value="Y">
											<label for="file_delete_<?= $propertyID ?>_<?= $i ?>"><?= GetMessage("IBLOCK_FORM_FILE_DELETE") ?></label>
											<?

																																																																																																		if ($arResult["ELEMENT_FILES"][$value]["IS_IMAGE"]) {
											?>
												<img src="<?= $arResult["ELEMENT_FILES"][$value]["SRC"] ?>" height="<?= $arResult["ELEMENT_FILES"][$value]["HEIGHT"] ?>" width="<?= $arResult["ELEMENT_FILES"][$value]["WIDTH"] ?>" border="0">
											<?
																																																																																																		} else {
											?>
												<?= GetMessage("IBLOCK_FORM_FILE_NAME") ?>: <?= $arResult["ELEMENT_FILES"][$value]["ORIGINAL_NAME"] ?>
												<?= GetMessage("IBLOCK_FORM_FILE_SIZE") ?>: <?= $arResult["ELEMENT_FILES"][$value]["FILE_SIZE"] ?> b
												[<a href="<?= $arResult["ELEMENT_FILES"][$value]["SRC"] ?>"><?= GetMessage("IBLOCK_FORM_FILE_DOWNLOAD") ?></a>]
											<?
																																																																																																		}
																																																																																																	}
																																																																																																}

																																																																																																break;
																																																																																															case "L":

																																																																																																if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["LIST_TYPE"] == "C")
																																																																																																	$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "checkbox" : "radio";
																																																																																																else
																																																																																																	$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "multiselect" : "dropdown";

																																																																																																switch ($type):
																																																																																																	case "checkbox":
																																																																																																	case "radio":
																																																																																																		foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum) {
																																																																																																			$checked = false;
																																																																																																			if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) {
																																																																																																				if (is_array($arResult["ELEMENT_PROPERTIES"][$propertyID])) {
																																																																																																					foreach ($arResult["ELEMENT_PROPERTIES"][$propertyID] as $arElEnum) {
																																																																																																						if ($arElEnum["VALUE"] == $key) {
																																																																																																							$checked = true;
																																																																																																							break;
																																																																																																						}
																																																																																																					}
																																																																																																				}
																																																																																																			} else {
																																																																																																				if ($arEnum["DEF"] == "Y") $checked = true;
																																																																																																			}

											?>
												<input type="<?= $type ?>" name="PROPERTY[<?= $propertyID ?>]<?= $type == "checkbox" ? "[" . $key . "]" : "" ?>" value="<?= $key ?>" id="property_<?= $key ?>" <?= $checked ? " checked=\"checked\"" : "" ?>><label for="property_<?= $key ?>"><?= $arEnum["VALUE"] ?></label>
											<?
																																																																																																		}
																																																																																																		break;

																																																																																																	case "dropdown":
																																																																																																	case "multiselect":
											?>
											<select name="PROPERTY[<?= $propertyID ?>]<?= $type == "multiselect" ? "[]\" size=\"" . $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] . "\" multiple=\"multiple" : "" ?>">
												<option value=""><? echo GetMessage("CT_BIEAF_PROPERTY_VALUE_NA") ?></option>
												<?
																																																																																																		if (intval($propertyID) > 0) $sKey = "ELEMENT_PROPERTIES";
																																																																																																		else $sKey = "ELEMENT";

																																																																																																		foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum) {
																																																																																																			$checked = false;
																																																																																																			if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) {
																																																																																																				foreach ($arResult[$sKey][$propertyID] as $elKey => $arElEnum) {
																																																																																																					if ($key == $arElEnum["VALUE"]) {
																																																																																																						$checked = true;
																																																																																																						break;
																																																																																																					}
																																																																																																				}
																																																																																																			} else {
																																																																																																				if ($arEnum["DEF"] == "Y") $checked = true;
																																																																																																			}
												?>
													<option value="<?= $key ?>" <?= $checked ? " selected=\"selected\"" : "" ?>><?= $arEnum["VALUE"] ?></option>
												<?
																																																																																																		}
												?>
											</select>
							<?
																																																																																																		break;

																																																																																																endswitch;
																																																																																																break;
																																																																																														endswitch; ?>

						</div>
					<? endforeach; ?>
					<? if ($arParams["USE_CAPTCHA"] == "Y" && $arParams["ID"] <= 0) : ?>
						<?= GetMessage("IBLOCK_FORM_CAPTCHA_TITLE") ?>

						<input type="hidden" name="captcha_sid" value="<?= $arResult["CAPTCHA_CODE"] ?>">
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["CAPTCHA_CODE"] ?>" width="180" height="40" alt="CAPTCHA">
						<?= GetMessage("IBLOCK_FORM_CAPTCHA_PROMPT") ?><span class="starrequired">*</span>:
						<input type="text" name="captcha_word" maxlength="50" value="">

					<? endif ?>

				<? endif ?>


				<? if ($arParams["LIST_URL"] <> '') : ?>
					<input type="submit" name="iblock_apply" value="<?= GetMessage("IBLOCK_FORM_APPLY") ?>">
					<input type="button" name="iblock_cancel" value="<? echo GetMessage('IBLOCK_FORM_CANCEL'); ?>" onclick="location.href='<? echo CUtil::JSEscape($arParams["LIST_URL"]) ?>';">
				<? endif ?>
				<div class="col-12 col-md-6 col-lg-3">
					<button type="submit" name="iblock_submit" value="Отправить" class="btn fs-20 fw-500 px-3 py-3 btn-primary bg-gradient w-100 border-0">
						Отправить
					</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container bg-gradient bg-primary rounded-bottom">
		<div class="row gy-3 p-4">
			<div class="col-12 col-md-6 col-lg-3 fs-20 fw-700 lh-15 ff-roboto text-white pe-4">
				<h3>Дополнительные способы связи</h3>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex gap-4 align-items-center">
				<div class="form__tel-box rounded-circle border border-dashed border-white d-flex justify-content-center align-items-center">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_120_95)">
							<path d="M14 10.9467V13.304C14.0001 13.4728 13.9361 13.6353 13.8211 13.7588C13.706 13.8823 13.5484 13.9575 13.38 13.9693C13.0887 13.9893 12.8507 14 12.6667 14C6.77533 14 2 9.22467 2 3.33333C2 3.14933 2.01 2.91133 2.03067 2.62C2.04248 2.45163 2.11772 2.29401 2.2412 2.17894C2.36468 2.06387 2.52722 1.99992 2.696 2H5.05333C5.13603 1.99992 5.2158 2.03057 5.27715 2.08601C5.33851 2.14145 5.37706 2.21772 5.38533 2.3C5.40067 2.45333 5.41467 2.57533 5.428 2.668C5.56049 3.59262 5.832 4.49189 6.23333 5.33533C6.29667 5.46867 6.25533 5.628 6.13533 5.71333L4.69667 6.74133C5.5763 8.79097 7.2097 10.4244 9.25933 11.304L10.286 9.868C10.328 9.80933 10.3892 9.76725 10.459 9.7491C10.5288 9.73095 10.6028 9.73787 10.668 9.76867C11.5113 10.1692 12.4104 10.4401 13.3347 10.572C13.4273 10.5853 13.5493 10.6 13.7013 10.6147C13.7835 10.6231 13.8596 10.6617 13.9149 10.7231C13.9702 10.7844 14.0008 10.8641 14.0007 10.9467H14Z" fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_120_95">
								<rect width="16" height="16" fill="white" />
							</clipPath>
						</defs>
					</svg>

				</div>
				<div class="d-flex flex-column justify-content-center">
					<a href="tel:+375445455897" class="fs-16 fw-500 text-white">
						+375(44) 545 58 97
					</a>
					<a href="tel:++375445455910" class="fs-16 fw-500 text-white">
						+375(44) 545 59 10
					</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="d-block rounded-2 border border-dashed fs-16 text-white py-3 ps-4">
					<svg class="me-3" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.977816 7.43107L19.6014 0.0898489C20.4658 -0.229406 21.2207 0.305429 20.9406 1.64169L20.9422 1.64005L17.7712 16.9133C17.5362 17.9961 16.9069 18.2594 16.0264 17.7493L11.1974 14.1107L8.86829 16.4048C8.61075 16.6681 8.39345 16.8902 7.89446 16.8902L8.23731 11.8661L17.1869 3.60001C17.5765 3.24949 17.1 3.05201 16.5865 3.40089L5.52667 10.5199L0.758904 8.99937C-0.276097 8.66366 -0.298632 7.94122 0.977816 7.43107Z" fill="white" />
					</svg>
					Написать в Telegram
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="d-block rounded-2 border border-dashed fs-16 text-white py-3 ps-4">
					<svg class="me-3" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19.5526 5.16864L19.5467 5.14382C19.0642 3.11524 16.8889 0.938467 14.8913 0.485604L14.8688 0.480779C11.6377 -0.16026 8.36161 -0.16026 5.13123 0.480779L5.10803 0.485604C3.11108 0.938467 0.935843 3.11524 0.452678 5.14382L0.447375 5.16864C-0.149125 8.00162 -0.149125 10.8746 0.447375 13.7076L0.452678 13.7324C0.915231 15.6744 2.92849 17.7511 4.85154 18.3223V20.5867C4.85154 21.4063 5.8119 21.8088 6.35803 21.2174L8.56409 18.8326C9.04255 18.8604 9.52127 18.8759 10 18.8759C11.6265 18.8759 13.2536 18.716 14.8688 18.3955L14.8913 18.3907C16.8889 17.9378 19.0642 15.761 19.5467 13.7324L19.5526 13.7076C20.1491 10.8746 20.1491 8.00162 19.5526 5.16864ZM17.8069 13.2967C17.4848 14.6202 15.8331 16.2655 14.5208 16.5695C12.8028 16.9092 11.0712 17.0545 9.3414 17.0046C9.307 17.0037 9.27392 17.0175 9.24993 17.0432C9.00444 17.3052 7.63918 18.7628 7.63918 18.7628L5.9259 20.5915C5.80064 20.7273 5.58059 20.6349 5.58059 20.4474V16.6962C5.58059 16.6342 5.53804 16.5815 5.47952 16.5696C5.47919 16.5696 5.47886 16.5695 5.47853 16.5694C4.16622 16.2654 2.51524 14.6201 2.19247 13.2967C1.65562 10.736 1.65562 8.14009 2.19247 5.57938C2.51524 4.25595 4.16622 2.61061 5.47853 2.30664C8.47892 1.71316 11.5211 1.71316 14.5208 2.30664C15.8338 2.61061 17.4848 4.25595 17.8069 5.57938C18.3443 8.14016 18.3443 10.736 17.8069 13.2967Z" fill="white" />
						<path d="M12.8547 15.0283C12.653 14.9646 12.4607 14.9218 12.2821 14.8447C10.4319 14.0464 8.7291 13.0164 7.38028 11.4376C6.61325 10.5398 6.0129 9.52623 5.50541 8.45356C5.26476 7.94486 5.06195 7.41625 4.85523 6.89108C4.66673 6.41216 4.94437 5.91739 5.23672 5.55654C5.51105 5.2179 5.86404 4.95872 6.24633 4.76772C6.54472 4.61863 6.83906 4.70458 7.05698 4.96761C7.52808 5.53628 7.96081 6.13403 8.31122 6.7932C8.52669 7.19864 8.46757 7.69424 8.07706 7.97016C7.98215 8.03723 7.89566 8.11594 7.80724 8.1917C7.7297 8.25808 7.65673 8.32514 7.60357 8.41503C7.50641 8.57949 7.50177 8.77346 7.56434 8.95226C8.04591 10.3286 8.85762 11.3989 10.1897 11.9753C10.4028 12.0676 10.6169 12.175 10.8625 12.1452C11.2737 12.0952 11.4069 11.6261 11.695 11.381C11.9767 11.1414 12.3367 11.1383 12.6401 11.338C12.9436 11.5377 13.2378 11.7522 13.5302 11.9689C13.8173 12.1816 14.103 12.3897 14.3678 12.6322C14.6224 12.8654 14.7101 13.1713 14.5667 13.4877C14.3043 14.0673 13.9224 14.5494 13.3715 14.8572C13.2159 14.944 13.0301 14.9721 12.8547 15.0283C13.0301 14.9721 12.653 14.9645 12.8547 15.0283Z" fill="white" />
						<path d="M10.005 4.10505C12.4252 4.17557 14.4129 5.84592 14.8389 8.33426C14.9115 8.75824 14.9373 9.19174 14.9696 9.62206C14.9832 9.80307 14.8846 9.97504 14.6968 9.97739C14.5028 9.9798 14.4155 9.81099 14.4029 9.63006C14.378 9.2719 14.3607 8.91216 14.3132 8.55697C14.0627 6.68203 12.6251 5.13085 10.8307 4.79799C10.5607 4.74788 10.2843 4.73472 10.0107 4.70487C9.83783 4.68599 9.61136 4.67509 9.57305 4.45156C9.5409 4.26414 9.69301 4.11491 9.8646 4.10533C9.91126 4.10264 9.95819 4.10484 10.005 4.10505C12.4252 4.17557 9.95819 4.10484 10.005 4.10505Z" fill="white" />
						<path d="M13.6829 9.06355C13.679 9.09498 13.6768 9.16888 13.6591 9.23849C13.5949 9.49119 13.2266 9.52282 13.1417 9.26779C13.1166 9.1921 13.1128 9.10601 13.1127 9.02454C13.1118 8.49144 13.0004 7.95889 12.7419 7.49507C12.4762 7.01836 12.0703 6.61761 11.5941 6.37511C11.3062 6.2285 10.9948 6.13738 10.6793 6.08306C10.5414 6.05935 10.402 6.04494 10.2634 6.02489C10.0955 6.00062 10.0058 5.8893 10.0137 5.71719C10.0212 5.55589 10.1345 5.43988 10.3035 5.44981C10.8589 5.48262 11.3954 5.60745 11.8891 5.87938C12.8932 6.43239 13.4668 7.30531 13.6342 8.4709C13.6418 8.5237 13.654 8.57602 13.6578 8.62902C13.6673 8.75992 13.6733 8.89095 13.6829 9.06355C13.679 9.09498 13.6733 8.89095 13.6829 9.06355Z" fill="white" />
						<path d="M12.1776 9.00241C11.9751 9.0062 11.8668 8.88964 11.8459 8.69657C11.8314 8.56196 11.8199 8.42555 11.789 8.29458C11.7282 8.03665 11.5964 7.7976 11.3877 7.63955C11.2892 7.5649 11.1776 7.51051 11.0607 7.47543C10.9122 7.43083 10.7579 7.4431 10.6097 7.40533C10.4488 7.36432 10.3598 7.2288 10.3851 7.07178C10.4081 6.92889 10.5418 6.81737 10.6919 6.82867C11.6302 6.89912 12.3008 7.40361 12.3965 8.55237C12.4033 8.63344 12.4112 8.71911 12.3939 8.79666C12.3643 8.92942 12.2698 8.99593 12.1776 9.00241C12.2698 8.99593 11.9751 9.0062 12.1776 9.00241Z" fill="white" />
					</svg>
					Написать в Viber
				</a>
			</div>
		</div>
	</div>

</section>