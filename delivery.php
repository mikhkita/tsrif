<?include ('header.php');?>

	<div class="b-breadcrumbs">
		<div class="b-block">
			<a href="/1store/index.php" class="icon-home"></a>
			<a href="/1store/category.php">Покупателям</a>
			<a href="#" onclick="return false;">Доставка</a>
		</div>
	</div>
	<div class="b-subcategory b-rounded-tiles-block b-delivery-block">
		<div class="b-block">
			<h1>Доставка</h1>
			<div class="b-1-by-3-blocks">
				<div class="b-block-1">
					<div class="b-category-left-list">
						<ul>
							<li><a href="#">Возврат и обмен товара</a></li>
							<li><a href="#">Как заказать товар</a></li>
							<li><a href="#">Часто задаваемые вопросы</a></li>
							<li><a href="#">Промокоды, купоны, карты</a></li>
							<li><a href="#" class="active">Доставка</a></li>
							<li><a href="#">Оплата</a></li>
							<li><a href="#">Бонусная программа</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Сертификаты соответствия</a></li>
						</ul>
					</div>
				</div>
				<div class="b-block-2">
					<h3>Доставляем кондитерский инвентарь в 1100 городов России и всего мира</h3>
					<div class="b-delivery-select-container">
						<div class="b-delivery-select b-sort-item">
							<div class="b-sort-select icon-marker">
								<select name="type">
									<option value="spb">Санкт-Петербург</option>
									<option value="tomsk">Томск</option>
									<option value="moscow">Москва</option>
								</select>
							</div>
						</div>
						<div class="b-delivery-select-label">
							Закажите до 14:00 – доставим завтра
						</div>
					</div>
					<div class="b-rounded-tile-list">
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-courier"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Курьерска доставка</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-urgently"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Срочная курьерская доставка день в день</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-autopost"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Доставка через постоматы</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-sdek"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">СДЭК</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-post"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Почта России</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-tc"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Доставка транспортными компаниями</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-pickup"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Самовывоз</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-pek"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Транспортная компания ПЭК</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-dl"></div>
							<div class="b-rounded-tile-name-container">
								<div class="b-rounded-tile-name">Деловые линии</div>
							</div>
						</a>
						<a href="#" class="b-rounded-tile-item">
							<div class="b-rounded-tile-img icon-sl"></div>
							<div class="b-rounded-tile-name-container">
									<div class="b-rounded-tile-name">Shop Logistic</div>
								</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-question-block wave-top wave-bottom">
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
	<div class="b-delivery-advantages">
		<div class="b-block">
			<div class="about-advantages">
				<div class="about-advantages-item" style="background-image: url('i/about-adv-1.svg');">
					<h4>Удобная доставка</h4>
					<p>Сделали заказ до 14 часов?<br>Доставим завтра</p>
				</div>
				<div class="about-advantages-item" style="background-image: url('i/about-adv-2.svg');">
					<h4>Безопасная оплата</h4>
					<p>Более 20 способов оплаты<br>через зашифрованное соединение</p>
				</div>
				<div class="about-advantages-item" style="background-image: url('i/about-adv-3.svg');">
					<h4>30 дней на обмен</h4>
					<p>Не понравилась покупка?<br>Обменяем без проблем!</p>
				</div>
				<div class="about-advantages-item" style="background-image: url('i/about-adv-4.svg');">
					<h4>Ассортимент</h4>
					<p>В наличии на складе<br>более 7 000 наименований</p>
				</div>
				<div class="about-advantages-item" style="background-image: url('i/about-adv-5.svg');">
					<h4>Пункты самовывозом</h4>
					<p>Более 2 000 пунктов<br>самовывоза</p>
				</div>
				<div class="about-advantages-item" style="background-image: url('i/about-adv-6.svg');">
					<h4>Лучшие цены</h4>
					<p>Нашли дешевле? Сообщите нам.<br>Покупай больше, плати меньше!</p>
				</div>
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