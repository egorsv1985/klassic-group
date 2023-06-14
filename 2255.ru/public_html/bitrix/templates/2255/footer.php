<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<?if (PAGE == 'TEXT'):?>
				</div>
			</section>
<?endif;?>
			<section class="contacts bg-primary" id="contacts">
				<div class="container">
					<h2 class="contacts__title title fs-14 fw-500">Контакты</h2>
					<div class="row">
						<div class="col-12 col-xl-6 position-relative contacts__content">
							<h3 class="contacts__subtitle subtitle fw-700 mb-3">
								Мы всегда на<br />
								связи с вами
							</h3>
							<p class="contacts__text text fs-16 fw-500 mb-5">
								Добавьте фитнес в свою жизнь!
							</p>
							<div class="row mb-4">
								<div class="col-6 ps-5">
									<div class="contacts__box contacts__box--map">
										<p class="contacts__text text fw-600 fs-14 mb-1">Адрес</p>
										<span class="contacts__span d-block">Тушинская, 17 </span>
										<span class="contacts__span d-block">ТЦ Праздник 5 этаж</span>
										<div class="contacts__btn fs-14 fw-600 text-white text-start d-block mt-3">
											<a href="#" role="button" title="Смотреть на карте">Смотреть на карте</a>
										</div>
									</div>
								</div>
								<div class="col-6 ps-5">
									<div class="contacts__box contacts__box--metro">
										<p class="contacts__text text fw-600 fs-14 mb-1 opacity-0">
											Метро
										</p>
										<span class="contacts__span d-block">2 минуты от </span>
										<span class="contacts__span d-block">м. «Тушинская»</span>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-6 ps-5">
									<div class="contacts__box contacts__box--time">
										<p class="contacts__text text fw-600 fs-14">Режим работы клуба</p>
										<span class="contacts__span d-block">Пн-Пт 6:30-24:00 </span>
										<span class="contacts__span d-block">Сб-Вс 8:30-22:00</span>
									</div>
								</div>
								<div class="col-6 ps-5">
									<div class="contacts__box contacts__box--time">
										<p class="contacts__text text fw-600 fs-14">Отдел продаж</p>
										<span class="contacts__span d-block">Пн-Пт 6:30-24:00 </span>
										<span class="contacts__span d-block">Сб-Вс 8:30-22:00</span>
									</div>
								</div>
							</div>
							<!-- <div class="row">
          <div class="col-2 ps-4">
            <div class="contacts__box-border box-border">
              <div
                class="contacts__box-circle box-circle d-flex justify-content-center align-items-center"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_141_478)">
                    <path
                      d="M21 16.42V19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.633 20.984 19.276 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.015 4.367 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3H7.58C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.101 3.68 8.122 3.863 8.142 4.002C8.34073 5.38892 8.748 6.73783 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36445 13.1865 10.8145 15.6365 13.889 16.956L15.429 14.802C15.4919 14.714 15.5838 14.6509 15.6885 14.6237C15.7932 14.5964 15.9042 14.6068 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.141 15.878 20.324 15.9 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0012 16.2961 21.001 16.42H21Z"
                      fill="white"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_141_478">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
          <div class="col-10 ps-4">
            <div class="contacts__box--tel">
              <a
                href="tel:+74992830153"
                class="contacts__link d-block fs-32 fw-700"
              >
                +7 (499) 283-01-53
              </a>
              <div class="contacts__btn fs-16">
                <a
                  data-popup="#callback"
                  href="#callback"
                  role="button"
                  title="Заказать обратный звонок"
                  >Заказать обратный звонок</a
                >
              </div>
            </div>
          </div>
        </div> -->
						</div>
						<div class="col-12 col-xl-6">
							<div class="row position-relative">
								<div class=" col-6 col-lg-3 col-xl-4 d-flex justify-content-end flex-column position-relative">
									<div class="contacts__box-img contacts__box-img--left position-relative">
										<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/iphone_13_pro.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/iphone_13_pro.png" alt="iphone 13 pro" class="contacts__img" /></picture>
									</div>
								</div>
								<div class=" col-6 col-lg-3 col-xl-4 d-flex justify-content-end flex-column">
									<div class="contacts__box-img contacts__box-img--right position-relative">
										<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/img/iphone_13.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/img/iphone_13.png" alt="iphone 13 pro" class="contacts__img" /></picture>
									</div>
									<!-- <div class="contacts__btn fs-16">
              <a href="#" role="button" title="Вконтакте">Вконтакте</a>
            </div> -->
								</div>
								<div class="col-12 col-lg-6 col-xl-4 position-relative d-flex flex-column contacts__content">
									<div class="contacts__box-border box-border mb-3">
										<div class="contacts__box-circle box-circle d-flex justify-content-center align-items-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_141_376)">
													<path d="M13 13V18.585L14.828 16.757L16.243 18.172L12 22.414L7.75702 18.172L9.17202 16.757L11 18.585V13H13ZM12 2C13.717 2.00008 15.3741 2.63111 16.6562 3.77312C17.9383 4.91512 18.7561 6.48846 18.954 8.194C20.1983 8.53332 21.2837 9.2991 22.0207 10.3575C22.7576 11.416 23.0992 12.6997 22.9856 13.9844C22.8721 15.2691 22.3107 16.473 21.3996 17.3858C20.4884 18.2986 19.2855 18.8622 18.001 18.978L18 17C18.0016 15.4271 17.3855 13.9166 16.2844 12.7935C15.1832 11.6703 13.6851 11.0245 12.1125 10.995C10.54 10.9655 9.01868 11.5547 7.8762 12.6357C6.73372 13.7168 6.06142 15.2032 6.00402 16.775L6.00002 17V18.978C4.71547 18.8623 3.51242 18.2989 2.60115 17.3862C1.68988 16.4735 1.12834 15.2696 1.01469 13.9848C0.901037 12.7001 1.2425 11.4163 1.97939 10.3578C2.71627 9.29926 3.80172 8.53339 5.04602 8.194C5.24372 6.48838 6.06142 4.91491 7.3436 3.77287C8.62577 2.63082 10.283 1.99986 12 2Z" fill="white" />
												</g>
												<defs>
													<clipPath id="clip0_141_376">
														<rect width="24" height="24" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</div>
									</div>

									<span class="contacts__span fs-16 d-block">Мобильное </span>
									<span class="contacts__span fs-16 fw-700 d-block text-uppercase mb-1">приложение</span>
									<p class="contacts__text text mb-4">Установи прямо сейчас!</p>
									<div class="d-flex flex-column gap-3">
										<a href="#" role="button" class="btn btn-light text-primary text-uppercase fw-600 fs-14 py-3" style="max-width: 200px">Google play</a>
										<a href="#" role="button" class="btn btn-light text-primary text-uppercase fw-600 fs-14 py-3" style="max-width: 200px">app store</a>
									</div>
									<!-- <div class="contacts__btn fs-16 mt-auto">
              <a href="#" role="button" title="WhatsApp">WhatsApp</a>
            </div> -->
								</div>
								<div class="contacts__box-border box-border box-border--big">
									<div class="contacts__box-circle box-circle box-circle--big"></div>
								</div>
								<div class="contacts__box-border box-border box-border--center">
									<div class="contacts__box-circle box-circle box-circle--center"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row position-relative contacts__bottom mt-5 mt-lg-0">
						<div class=" col-12 col-sm-8 d-flex mb-4 mb-sm-0">
							<div class="contacts__box-border box-border d-none d-sm-flex">
								<div class="contacts__box-circle box-circle d-flex justify-content-center align-items-center">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_141_478)">
											<path d="M21 16.42V19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.633 20.984 19.276 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.015 4.367 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3H7.58C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.101 3.68 8.122 3.863 8.142 4.002C8.34073 5.38892 8.748 6.73783 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36445 13.1865 10.8145 15.6365 13.889 16.956L15.429 14.802C15.4919 14.714 15.5838 14.6509 15.6885 14.6237C15.7932 14.5964 15.9042 14.6068 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.141 15.878 20.324 15.9 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0012 16.2961 21.001 16.42H21Z" fill="white" />
										</g>
										<defs>
											<clipPath id="clip0_141_478">
												<rect width="24" height="24" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="contacts__box--tel ms-1 ms-sm-5">
								<a href="tel:+74992830153" class="contacts__link d-block fs-32 fw-700">
									+7 (499) 283-01-53
								</a>
								<div class="contacts__btn fs-16">
									<a data-popup="#callback" href="#callback" role="button" title="Заказать обратный звонок">Заказать обратный звонок</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-2 d-flex align-items-end">
							<div class="contacts__btn fs-16">
								<a href="#" role="button" title="Вконтакте" target="_blank">Вконтакте</a>
							</div>
						</div>
						<div class="col-6 col-sm-2 d-flex align-items-end">
							<div class="contacts__btn fs-16">
								<a href="https://wa.me/+79030006089" role="button" title="WhatsApp" target="_blank">WhatsApp</a>
							</div>
						</div>
					</div>
				</div>
			</section>




			</main>
			<footer class="footer">
				<div class="container">
					<div class="row g-3 g-md-0">
						<div class="col-12 col-sm-4 col-lg-6 ">
							<a href="index.html" class="footer__logo logo d-block">
								<img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/logo-footer.svg" alt="logo" class="mw-100 logo__img" />
							</a>
							<small class="footer__text text fs-12 text-success d-block mt-2 mb-3">&#169 2022 ИП Овсянко<br> ИНН 502007880841</small>
							<ul class="footer__social-list d-flex align-items-center justify-content-between ps-0 mb-5">
								<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
									<a href="#" class="footer__social-link">
										<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_141_577)">
												<path d="M1.25251 13.75L2.09751 10.645C1.54072 9.69053 1.24819 8.605 1.25001 7.5C1.25001 4.04813 4.04813 1.25 7.50001 1.25C10.9519 1.25 13.75 4.04813 13.75 7.5C13.75 10.9519 10.9519 13.75 7.50001 13.75C6.39549 13.7518 5.31042 13.4595 4.35626 12.9031L1.25251 13.75ZM5.24438 4.5675C5.16367 4.57251 5.0848 4.59377 5.01251 4.63C4.94471 4.66839 4.88282 4.71639 4.82876 4.7725C4.75376 4.84313 4.71126 4.90437 4.66563 4.96375C4.43464 5.26437 4.31039 5.63339 4.31251 6.0125C4.31376 6.31875 4.39376 6.61688 4.51876 6.89563C4.77438 7.45937 5.19501 8.05625 5.75063 8.60938C5.88438 8.7425 6.01501 8.87625 6.15563 9.00063C6.84525 9.60779 7.66704 10.0456 8.55563 10.2794L8.91126 10.3337C9.02688 10.34 9.14251 10.3313 9.25876 10.3256C9.44078 10.3162 9.61852 10.2669 9.77938 10.1813C9.88313 10.1263 9.93188 10.0988 10.0188 10.0437C10.0188 10.0437 10.0456 10.0262 10.0969 9.9875C10.1813 9.925 10.2331 9.88062 10.3031 9.8075C10.355 9.75375 10.4 9.69063 10.4344 9.61875C10.4831 9.51688 10.5319 9.3225 10.5519 9.16062C10.5669 9.03687 10.5625 8.96938 10.5606 8.9275C10.5581 8.86063 10.5025 8.79125 10.4419 8.76188L10.0781 8.59875C10.0781 8.59875 9.53438 8.36188 9.20251 8.21063C9.16752 8.19537 9.13002 8.18669 9.09188 8.185C9.04912 8.18061 9.00591 8.18542 8.96517 8.19911C8.92442 8.2128 8.88707 8.23505 8.85563 8.26437V8.26312C8.85251 8.26312 8.81063 8.29875 8.35876 8.84625C8.33282 8.8811 8.2971 8.90744 8.25613 8.92191C8.21517 8.93638 8.17083 8.93833 8.12876 8.9275C8.08803 8.91661 8.04814 8.90283 8.00938 8.88625C7.93188 8.85375 7.90501 8.84125 7.85188 8.81813L7.84876 8.81688C7.4912 8.66077 7.16015 8.4499 6.86751 8.19188C6.78876 8.12313 6.71563 8.04812 6.64063 7.97563C6.39474 7.74015 6.18045 7.47376 6.00313 7.18313L5.96626 7.12375C5.93977 7.08385 5.91836 7.04081 5.90251 6.99563C5.87876 6.90375 5.94063 6.83 5.94063 6.83C5.94063 6.83 6.09251 6.66375 6.16313 6.57375C6.22194 6.49895 6.2768 6.42114 6.32751 6.34063C6.40126 6.22188 6.42438 6.1 6.38563 6.00563C6.21063 5.57812 6.02938 5.1525 5.84313 4.73C5.80626 4.64625 5.69688 4.58625 5.59751 4.57437C5.56376 4.57062 5.53001 4.56687 5.49626 4.56437C5.41232 4.5602 5.32822 4.56104 5.24438 4.56687V4.5675Z" fill="white" />
											</g>
											<defs>
												<clipPath id="clip0_141_577">
													<rect width="15" height="15" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</a>
								</li>
								<li class="footer__social-item rounded-circle d-flex justify-content-center align-items-center">
									<a href="#" class="footer__social-link">
										<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.73638 5.4999C7.73638 6.73498 6.73519 7.73616 5.50012 7.73616C4.26504 7.73616 3.26385 6.73498 3.26385 5.4999C3.26385 4.26482 4.26504 3.26364 5.50012 3.26364C6.73519 3.26364 7.73638 4.26482 7.73638 5.4999Z" fill="white" />
											<path d="M10.7299 1.54331C10.6224 1.25201 10.4509 0.988347 10.2281 0.771924C10.0117 0.549082 9.74817 0.377583 9.45669 0.270084C9.2203 0.178273 8.86518 0.0689918 8.21109 0.0392201C7.50353 0.00695267 7.29138 0 5.50009 0C3.70862 0 3.49648 0.0067744 2.78909 0.0390419C2.135 0.0689918 1.7797 0.178273 1.54349 0.270084C1.25201 0.377583 0.988347 0.549082 0.772102 0.771924C0.54926 0.988347 0.377761 1.25184 0.270084 1.54331C0.178273 1.7797 0.0689918 2.135 0.0392201 2.78909C0.00695267 3.49648 0 3.70862 0 5.50009C0 7.29138 0.00695267 7.50353 0.0392201 8.21109C0.0689918 8.86518 0.178273 9.2203 0.270084 9.45669C0.377761 9.74817 0.549082 10.0117 0.771924 10.2281C0.988347 10.4509 1.25184 10.6224 1.54331 10.7299C1.7797 10.8219 2.135 10.9312 2.78909 10.961C3.49648 10.9932 3.70844 11 5.49991 11C7.29156 11 7.5037 10.9932 8.21091 10.961C8.865 10.9312 9.2203 10.8219 9.45669 10.7299C10.0418 10.5042 10.5042 10.0418 10.7299 9.45669C10.8217 9.2203 10.931 8.86518 10.961 8.21109C10.9932 7.50353 11 7.29138 11 5.50009C11 3.70862 10.9932 3.49648 10.961 2.78909C10.9312 2.135 10.8219 1.7797 10.7299 1.54331ZM5.50009 8.94487C3.59738 8.94487 2.05496 7.40262 2.05496 5.49991C2.05496 3.5972 3.59738 2.05496 5.50009 2.05496C7.40262 2.05496 8.94504 3.5972 8.94504 5.49991C8.94504 7.40262 7.40262 8.94487 5.50009 8.94487ZM9.08124 2.72384C8.63663 2.72384 8.27616 2.36337 8.27616 1.91876C8.27616 1.47414 8.63663 1.11367 9.08124 1.11367C9.52586 1.11367 9.88633 1.47414 9.88633 1.91876C9.88615 2.36337 9.52586 2.72384 9.08124 2.72384Z" fill="white" />
										</svg>
									</a>
								</li>
							</ul>
							<a class="footer__text text text-success fs-14 d-block" href="#">Правила клуба</a>
							<a class="footer__text text text-success fs-14 d-block" href="#">Публичный договор</a>
							<a class="footer__text text text-success fs-14 d-block" href="https://target-kc.ru/">Разработка сайта: ТКК</a>

						</div>

						<div class="col-6 col-sm-4 col-lg-3">
							<h3 class="footer__subtitle subtitle fs-14 fw-400 mb-4">Контакты</h3>

							<div class="footer__box footer__box--map fs-14 fw-400 mb-4">
								<span class="footer__span d-block text-success">Тушинская, 17 </span>
								<span class="footer__span d-block text-success">ТЦ Праздник 5 этаж</span>
							</div>

							<div class="footer__box footer__box--time fs-14 fw-400 mb-4">
								<span class="footer__span d-block">Пн-Пт 6:30-24:00 </span>
								<span class="footer__span d-block">Сб-Вс 8:30-22:00</span>
							</div>


							<div class="footer__box footer__box--tel fs-14 fw-400 mb-4">
								<a href="tel:+74992830153" class="footer__link d-block">
									<span class="footer__span">+7 (499) 283-01-53 </span>
								</a>
								<a href="tel:+74992834431" class="footer__link d-block">
									<span class="footer__span">+7 (499) 283-44-31 </span>
								</a>
							</div>


						</div>
						<div class="col-6 col-sm-4 col-lg-3">
							<h3 class="footer__subtitle subtitle fs-14 fw-400 mb-4">Меню</h3>

							<ul class="footer__list d-flex flex-column ps-0">
								<li class="footer__item">
									<a href="#about" class="footer__link d-block text-success fs-14">О клубе</a>
								</li>
								<li class="footer__item">
									<a href="#services" class="footer__link d-block text-success fs-14">Услуги</a>
								</li>
								<li class="footer__item">
									<a href="#shedule" class="footer__link d-block text-success fs-14">Расписание</a>
								</li>
								<li class="footer__item">
									<a href="#cards" class="footer__link d-block text-success fs-14">Клубные карты</a>
								</li>
								<li class="footer__item">
									<a href="#team" class="footer__link d-block text-success fs-14">Наша команда</a>
								</li>
								<li class="footer__item">
									<a href="#vacansii" class="footer__link d-block text-success fs-14">Вакансии</a>
								</li>
								<li class="footer__item">
									<a href="#contacts" class="footer__link d-block text-success fs-14">Контакты</a>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</footer>
		</div>
		<div id="callback" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<button data-close type="button" class="popup__close">
						<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="white" />
						</svg>
					</button>



					<form action="#" class="popup__form form">
						<div class="form__body d-flex flex-column">
							<div class="form__box position-relative mb-3">
								<input type="text" id="name" name="form[]" data-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
								<label for="name" class="form__label position-absolute fs-14">Ваше имя</label>
							</div>
							<div class="form__box position-relative mb-3">
								<input type="tel" id="tel" name="form[]" data-error="Ошибка" placeholder="" class="form__input w-100 p-3" required />
								<label for="tel" class="form__label position-absolute fs-14">Телефон</label>
							</div>

							<button type="submit" class="form__btn btn btn fs-16 fw-600 px-2 py-3 btn-primary btn-sm text-uppercase">
								Отправить
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>


		<div id="team-modal" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<button data-close type="button" class="popup__close">
						<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="white" />
						</svg>
					</button>



					<h2>Должность</h2>
				</div>
			</div>
		</div>



	</body>

</html>