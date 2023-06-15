<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
		<footer>
			<div class="top">
				<div class="contaner">
					<ul class="menu">
<?
$i = 0;
foreach ($menu as $key => $value):?>
						<li><a href="#<?=$key;?>" class="wow- bounceInDown" data-wow-delay="<?=(($i++)*1/10)?>s"><?=$value;?></a></li>
<?endforeach;?>
					</ul>
					<div class="content">
						<div class="logo"><img src="<?=SITE_TEMPLATE_PATH;?>/images/logo.svg" alt=""></div>

						<div class="promo_call_phone_812_1">
							Санкт-Петербург<br>
							<a href="tel:+78124485849" class="promo_call_phone_812_2">+7 (812) 448 58 49</a><br>
							<br>
						</div>

						<div class="promo_call_phone_499_1">
							Москва<br>
							<a href="tel:+74997032442" class="promo_call_phone_499_2">+7 (499) 703 24 42</a><br>
							<br>
						</div>

						<div class="promo_call_phone_800_1">
							Бесплатно по всей россии<br>
							<a href="tel:+78005555672" class="promo_call_phone_800_2">8 (800) 555 56 72</a><br>
							<br>
						</div>

						<a href="mailto:info@aledo-pro.ru" class="promo_email">info@aledo-pro.ru</a>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="contaner">
					<div class="wow- bounceInLeft">Разработка сайта: "<a href="https://target-kc.ru/" target="_blank">Таргет Консалт Компани</a>"</div>
				</div>
			</div>
		</footer>
		<div class="click">
			<a href="#">
				<img src="<?=SITE_TEMPLATE_PATH;?>/images/switch_off.svg" class="off" alt="">
				<img src="<?=SITE_TEMPLATE_PATH;?>/images/switch_on.svg" class="on" alt="">
			</a>
		</div>
		<div class="popup">
			<div id="order">
				<div class="form-contaner ajax-form wow- bounceInRight" id="top-popup">
					<form method="POST" action="/">
						<input type="hidden" name="formID" value="formpopup">
						<div class="text">
							<div class="title">Заказать обратный звонок</div>
						  <div>Заполните форму обратной связи и<br> мы оперативно свяжемся с вами</div>
					  </div>
					  <div class="input">
					  	<input type="text" name="name" value="" placeholder="Ваше имя">
					  </div>
					  <div class="input">
					  	<input type="text" name="phone" value="" placeholder="Телефон *" required="required">
					  </div>
					  <div class="submit">
					  	<button type="submit" class="btn btn-yellow">Заказать звонок</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
		<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>