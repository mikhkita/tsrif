<?include ('header.php');?>

	<div class="b-breadcrumbs">
		<div class="b-block">
			<a href="/1store/index.php" class="icon-home"></a>
			<a href="#" onclick="return false;">Личный кабинет</a>
		</div>
	</div>
	<div class="b-cabinet wave-bottom">
		<div class="b-block">
			<h1>Личный кабинет</h1>
			<div class="b-cabinet-left">
				<div class="b-profile">
					<!-- <a href="#" class="b-profile-photo icon-add-photo"> -->
					<a href="#" class="b-profile-photo icon-change-photo" style="background-image: url(i/women.jpg);">
						<div class="b-profile-photo-back"></div>
					</a>
					<div class="b-profile-name">Аглая Петровна Фурцева</div>
					<div class="b-profile-bonus-text">Мои бонусные баллы</div>
					<div class="b-profile-bonus-count">125</div>
					<a href="#" class="b-btn">Редактировать профиль</a>
				</div>
				<div class="b-get-bonus">
					<div class="b-get-bonus-text">Получить бонусные баллы</div>
					<form action="/getBonus.php" method="POST" class="b-one-string-form">
						<div class="b-get-bonus-input-container">
							<input type="text" placeholder="Ссылка на селфи">
							<a href="#" class="pink ajax">Получить</a>
						</div>
						<div class="b-get-bonus-input-container">
							<input type="text" placeholder="Ссылка на отзыв">
							<a href="#" class="pink ajax">Получить</a>
						</div>
						<div class="b-get-bonus-input-container">
							<input type="text" placeholder="Ссылка на мастер-класс">
							<a href="#" class="pink ajax">Получить</a>
						</div>
					</form>
				</div>
			</div>
			<div class="b-cabinet-right">
				<div class="b-cabinet-hello">Здравствуйте, Аглая!</div>
				<div class="b-orders">
					<div class="b-orders-header">Текущие заказы</div>
					<div class="b-orders-list">
						<div class="b-orders-container">
							<div class="b-order-item">
								<div class="b-order-date b-order-text">03.12.2018 г.</div>
								<div class="b-order-img" style="background-image: url('i/catalog-item-5.jpg');"></div>
								<div class="b-order-name b-order-text">Силиконовая форма для кекса и маффина</div>
								<div class="b-order-count b-order-text">15</div>
								<div class="b-order-sum b-order-text">2 700 ₽</div>
								<div class="b-order-status b-order-text pink">Ждет оплаты</div>
								<a href="#" class="b-order-repeat icon-thin-reload"><div class="b-hint">Повторить&nbsp;заказ</div></a>
								<a href="#" class="b-order-delete icon-delete"><div class="b-hint">Удалить&nbsp;заказ</div></a>
							</div>
							<div class="b-order-item">
								<div class="b-order-date b-order-text">03.12.2018 г.</div>
								<div class="b-order-img" style="background-image: url('i/catalog-item-5.jpg');"></div>
								<div class="b-order-name b-order-text">Силиконовая форма для кекса и маффина</div>
								<div class="b-order-count b-order-text">15</div>
								<div class="b-order-sum b-order-text">2 700 ₽</div>
								<div class="b-order-status b-order-text blue">Оплачено</div>
								<a href="#" class="b-order-repeat icon-thin-reload"></a>
								<a href="#" class="b-order-delete icon-delete"></a>
							</div>
						</div>
						<!-- <div class="b-btn-container">
							<a href="#" class="b-load-more icon-load">
								<p class="pink dashed">Показать все</p>
							</a>
						</div> -->
					</div>
					<div class="b-orders-header">История заказов</div>
					<div class="b-orders-list">
						<div class="b-orders-container">
							<div class="b-order-item">
								<div class="b-order-date b-order-text">03.12.2018 г.</div>
								<div class="b-order-img" style="background-image: url('i/catalog-item-5.jpg');"></div>
								<div class="b-order-name b-order-text">Силиконовая форма для кекса и маффина</div>
								<div class="b-order-count b-order-text">15</div>
								<div class="b-order-sum b-order-text">2 700 ₽</div>
								<div class="b-order-status b-order-text green">Доставлено</div>
								<a href="#" class="b-order-repeat icon-thin-reload"></a>
								<a href="#" class="b-order-delete icon-delete"></a>
							</div>
							<div class="b-order-item">
								<div class="b-order-date b-order-text">03.12.2018 г.</div>
								<div class="b-order-img" style="background-image: url('i/catalog-item-5.jpg');"></div>
								<div class="b-order-name b-order-text">Силиконовая форма для кекса и маффина</div>
								<div class="b-order-count b-order-text">15</div>
								<div class="b-order-sum b-order-text">2 700 ₽</div>
								<div class="b-order-status b-order-text green">Доставлено</div>
								<a href="#" class="b-order-repeat icon-thin-reload"></a>
								<a href="#" class="b-order-delete icon-delete"></a>
							</div>
						</div>
						<div class="b-btn-container">
							<a href="#" class="b-load-more icon-load">
								<p class="pink dashed">Показать все</p>
							</a>
						</div>
					</div>
				</div>
				<div class="b-tabs">
					<div id="b-cabinet-tab-slider" class="b-tabs-container b-tabs-container-underline tacenter">
						<div class="b-tab active" data-tab="myworks">Мои работы</div>
						<div class="b-tab" data-tab="myreviews">Мои отзывы</div>
						<div class="b-tab" data-tab="myquestions">Мои вопросы</div>
					</div>
					<div class="b-tab-item" id="myworks">
						<div class="myreviews-header">Мои работы</div>
						<div class="b-works-list b-cabinet-works-list">
							<div class="b-works-item-container">
								<a href="work.php" class="b-works-item">
									<div class="b-works-back" style="background-image:url('i/works-4.jpg');"></div>
									<div class="b-works-back-gradient"></div>
									<div class="b-works-item-icons">
										<div class="b-works-item-icon icon-photo">21</div>
										<div class="b-works-item-icon icon-works-like">1500</div>
										<div class="b-works-item-icon icon-comment">350</div>
									</div>
								</a>
								<div class="b-work-name">Торт «Максимка»</div>
							</div>
							<div class="b-works-item-container">
								<a href="work.php" class="b-works-item">
									<div class="b-works-back" style="background-image:url('i/works-2.jpg');"></div>
									<div class="b-works-back-gradient"></div>
									<div class="b-works-item-icons">
										<div class="b-works-item-icon icon-photo">1</div>
										<div class="b-works-item-icon icon-works-like">5</div>
										<div class="b-works-item-icon icon-comment">3</div>
									</div>
								</a>
								<div class="b-work-name">Торт «Максимка»</div>
							</div>
							<div class="b-works-item-container">
								<a href="work.php" class="b-works-item">
									<div class="b-works-back" style="background-image:url('i/works-3.jpg');"></div>
									<div class="b-works-back-gradient"></div>
									<div class="b-works-item-icons">
										<div class="b-works-item-icon icon-photo">1</div>
										<div class="b-works-item-icon icon-works-like">5</div>
										<div class="b-works-item-icon icon-comment">3</div>
									</div>
								</a>
								<div class="b-work-name">Торт «Максимка»</div>
							</div>
							<div class="b-works-item-container">
								<a href="work.php" class="b-works-item">
									<div class="b-works-back" style="background-image:url('i/works-1.jpg');"></div>
									<div class="b-works-back-gradient"></div>
									<div class="b-works-item-icons">
										<div class="b-works-item-icon icon-photo">1</div>
										<div class="b-works-item-icon icon-works-like">5</div>
										<div class="b-works-item-icon icon-comment">3</div>
									</div>
								</a>
								<div class="b-work-name">Торт «Максимка»</div>
							</div>
						</div>
						<div class="b-works-upload">
							<a href="#" class="b-load-more icon-load">
								<p class="pink dashed">Показать все</p>
							</a>
						</div>
					</div>
					<div class="b-tab-item hide" id="myreviews">
						<div class="myreviews-header">Мои отзывы</div>
						<div class="myreviews-list">
							<div class="myreviews-item">
								<div class="myreview-text">Приготовила на день рождения сына. Использовала кондитерские насадки 2М и 4М и плунжеры Бабочки, купленные в Первом магазине для кондитеров. Инструмент и ингедиенты качественные, все вышло отлично! Сын в восторге. Спасибо, что вы есть!</div>
								<div class="myreview-bottom">
									<div class="myreview-bottom-left">
										<a href="#" class="dashed">Посмотреть на странице</a>
									</div>
									<div class="myreview-bottom-right">
										<a href="#" class="myreview-like icon-like-up">5</a>
										<a href="#" class="myreview-dislike icon-dislike">3</a>
									</div>
								</div>
							</div>
							<div class="myreviews-item">
								<div class="myreview-text">Приготовила на день рождения сына. Использовала кондитерские насадки 2М и 4М и плунжеры Бабочки, купленные в Первом магазине для кондитеров. Инструмент и ингедиенты качественные, все вышло отлично! Сын в восторге. Спасибо, что вы есть!</div>
								<div class="myreview-bottom">
									<div class="myreview-bottom-left">
										<a href="#" class="dashed">Посмотреть на странице</a>
									</div>
									<div class="myreview-bottom-right">
										<a href="#" class="myreview-like icon-like-up">5</a>
										<a href="#" class="myreview-dislike icon-dislike">3</a>
									</div>
								</div>
							</div>
						</div>
						<div class="b-btn-container">
							<a href="#" class="b-load-more icon-load">
								<p class="pink dashed">Показать все</p>
							</a>
						</div>
					</div>
					<div class="b-tab-item hide" id="myquestions">
						<div class="myreviews-header">Мои Вопросы</div>
						<div class="b-faq-list">
							<div class="b-faq-item no-img">
								<div class="b-faq-header">Когда мне доставят заказ?
									<div class="b-faq-header-icon">
										<div class="b-faq-header-icon-line"></div>
										<div class="b-faq-header-icon-line"></div>
									</div>
								</div>
								<div class="b-faq-content">
									<div class="b-faq-item-text">Сборка товаров начинается послеподтверждения факта оплаты и длится от 1 часа до 10 дней в зависимости от объема. После сборки заказ отправляется выбранным вами способом. Доставка зависит от политики компании-доставщика. В среднем доставка по России занимает не более 10 дней.</div>
								</div>
							</div>
							<div class="b-faq-item no-img">
								<div class="b-faq-header">Менеджер поможет с выбором товара?
									<div class="b-faq-header-icon">
										<div class="b-faq-header-icon-line"></div>
										<div class="b-faq-header-icon-line"></div>
									</div>
								</div>
								<div class="b-faq-content">
									<div class="b-faq-item-text">Сборка товаров начинается послеподтверждения факта оплаты и длится от 1 часа до 10 дней в зависимости от объема. После сборки заказ отправляется выбранным вами способом. Доставка зависит от политики компании-доставщика. В среднем доставка по России занимает не более 10 дней.</div>
								</div>
							</div>
							<div class="b-faq-item no-img">
								<div class="b-faq-header">Как быстро мне доставят заказ?
									<div class="b-faq-header-icon">
										<div class="b-faq-header-icon-line"></div>
										<div class="b-faq-header-icon-line"></div>
									</div>
								</div>
								<div class="b-faq-content">
									<div class="b-faq-item-text no-answer">Администратор еще не ответил на ваш вопрос</div>
								</div>
							</div>
						</div>
						<div class="b-works-upload">
							<a href="#" class="b-load-more icon-load">
								<p class="pink dashed">Показать все</p>
							</a>
						</div>
					</div>
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