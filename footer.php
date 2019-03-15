<div class="b-footer wave-top">
		<div class="b-block">
			<div class="b-bottom-menu">
				<div class="b-bottom-menu-list">
					<h4>О компании</h4>
					<ul>
						<li><a href="#" class="underline">О нас</a></li>
						<li><a href="#" class="underline">Новости магазина</a></li>
						<li><a href="#" class="underline">Сертификаты</a></li>
						<li><a href="#" class="underline">Преимущества</a></li>
						<li><a href="#" class="underline">Вакансии</a></li>
						<li><a href="#" class="underline">Блог</a></li>
					</ul>
				</div>
				<div class="b-bottom-menu-list">
					<h4>Покупателям</h4>
					<ul>
						<li><a href="#" class="underline">Акции и скидки</a></li>
						<li><a href="#" class="underline">Доставка и оплата</a></li>
						<li><a href="#" class="underline">Как сделать заказ</a></li>
						<li><a href="#" class="underline">Возврат без затрат</a></li>
						<li><a href="#" class="underline">Вопросы и ответы</a></li>
						<li><a href="#" class="underline">Контакты и реквизиты</a></li>
					</ul>
				</div>
				<div class="b-bottom-menu-list">
					<h4>Сотрудничество</h4>
					<ul>
						<li><a href="#" class="underline">Поставщикам</a></li>
						<li><a href="#" class="underline">Партнеры</a></li>
						<li><a href="#" class="underline">Франшиза</a></li>
					</ul>
				</div>
				<div class="b-bottom-menu-list">
					<h4>Следуйте за нами</h4>
					<div class="b-soc">
						<a href="http://vk.com" target="_blank" class="b-soc-item icon-vk"></a>
						<a href="http://facebook.com" target="_blank" class="b-soc-item icon-facebook"></a>
						<a href="http://instagram.com" target="_blank" class="b-soc-item icon-instagram"></a>
					</div>
				</div>
			</div>
			<div class="b-underfooter">
				<div class="b-underfooter-item left-underfooter-item">
					© 2002–2018 <a href="1KONDITER.RU" target="_blank" class="underline underfooter-link">1KONDITER.RU</a> – Первый магазин для кондитеров.<br>
					Все права защищены. Доставка по всей России!
				</div>
				<div class="b-underfooter-item">
					<a href="#" class="underline politics-link">Политика конфиденциальности</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-menu-overlay" id="b-menu-overlay" style="display: none;"></div>
</div>
	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup b-popup-city" id="b-popup-city">
			<div class="b-popup-h3">Выбор города</div>
			<form action="kitsend.php" method="POST" id="b-form-city">
				<div class="b-popup-form">
					<div class="b-input-string icon-search">
						<input type="text" class="b-popup-input" placeholder="Где вы находитесь?" name="q">
					</div>
					<div class="b-btn-container">
						<a href="#" class="b-btn b-btn-white ajax">Выбрать</a>
					</div>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>
		<div class="b-popup" id="b-popup-1">
			<h3>Оставьте заявку</h3>
			<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
			<form action="kitsend.php" data-goal="CALLBACK" method="POST" id="b-form-1">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required/>
					<label for="tel">Введите Ваш номер телефона</label>
					<input type="text" id="tel" name="phone" required/>
					<label for="tel">Введите Ваш E-mail</label>
					<input type="text" id="tel" name="email" required/>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#" class="b-btn b-blue-btn ajax">Заказать</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI"></script> -->
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/slideout.min.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>