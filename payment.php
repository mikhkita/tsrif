<?include ('header.php');?>

	<div class="b-breadcrumbs">
		<div class="b-block">
			<a href="/1store/index.php" class="icon-home"></a>
			<a href="/1store/category.php">Помощь</a>
			<a href="#" onclick="return false;">Оплата</a>
		</div>
	</div>
	<div class="b-subcategory b-rounded-tiles-block b-payment-block">
		<div class="b-block">
			<h1>Оплата</h1>
			<div class="b-1-by-3-blocks">
				<div class="b-block-1">
					<div class="b-category-left-list">
						<ul>
							<li><a href="#">Возврат и обмен товара</a></li>
							<li><a href="#">Как заказать товар</a></li>
							<li><a href="#">Часто задаваемые вопросы</a></li>
							<li><a href="#">Промокоды, купоны, карты</a></li>
							<li><a href="#">Доставка</a></li>
							<li><a href="#" class="active">Оплата</a></li>
							<li><a href="#">Бонусная программа</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Сертификаты соответствия</a></li>
						</ul>
					</div>
				</div>
				<div class="b-block-2">
					<h3>Выберите интересущий вас способ оплаты</h3>
					<div class="b-rounded-tile-list">
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-visa"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Онлайн банковской картой</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-spasibo"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">СПАСИБО от Сбербанка</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-bank"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Банковский перевод</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-sber"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Сбербанк Онлайн</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-paypal"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">PayPal</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-yandex"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Яндекс.Деньги</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-webmoney"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">WebMoney</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-qiwi"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Киви Кошелек</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-cash"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Наличными</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-deliverycash"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Наложенный платеж</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-question-block b-payment-question-block wave-top wave-bottom">
		<div class="b-block">
			<div class="b-question-block-left">
				<div class="b-question-img"></div>
				<div class="b-question-block-text">
					<div class="b-question-block-head-text">Остались вопросы?</div>
					<div class="b-question-block-other-text">Закажите обратный звонок.<br>Мы позвоним вам и подробно проконсультируем.</div>
				</div>
			</div>
			<div class="b-question-form">
				<form action="/kitsend.php" class="b-one-string-form">
					<input type="text" placeholder="Номер телефона">
					<a href="#" class="pink">Заказать звонок</a>
				</form>
			</div>
		</div>
	</div>
	<div class="b-sub-block">
		<div class="b-block">
			<h2 class="sub-title">Узнавайте об <b>акциях и новинках</b> первыми</h2>
			<h5>Подпишитесь на рассылку и покупайте с выгодой для себя</h5>
			<form action="/kitsend.php" class="b-one-string-form">
				<input type="text" placeholder="Введите ваш E-mail">
				<a href="#" class="pink">Подписаться</a>
			</form>
		</div>
	</div>
	
<?include ('footer.php');?>	