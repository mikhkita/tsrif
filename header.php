<?
$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<!-- <link rel="stylesheet" href="css/jquery.formstyler.css" type="text/css"> -->
	
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 1023px)" href="css/layout-tablet.css">
	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 960px)" href="css/layout-mobile.css">
	<? if ($mobile):?>
	<meta name="viewport" content="width=device-width, user-scalable=no"> 
	<? else:?> 
	<meta name="viewport" content="width=1024, user-scalable=no"> 
	<? endif;?>

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
<div id="mobile-menu" class="mobile-menu hide">
	<h2>Меню</h2>
	<ul>
		<li><a href="/" class="active icon-discount">Акции и скидки</a></li>
		<li><a href="cooperation.html">Доставка и оплата</a></li>
		<li><a href="services.html">Помощь</a></li>
		<li><a href="about.html">Контакты</a></li>
		<li><a href="documents.html">Купить оптом</a></li>
		<li><a href="/" class="active icon-discount">Акции и скидки</a></li>
		<li><a href="cooperation.html">Доставка и оплата</a></li>
		<li><a href="services.html">Помощь</a></li>
		<li><a href="about.html">Контакты</a></li>
		<li><a href="documents.html">Купить оптом</a></li>
	</ul>
	<div class="b-menu-schedule">
		<p class="icon-clock">пн-пт: с 10:00 до 19:00, сб: с 10:00 до 18:00, вс – выходной</p>
	</div>
	<div class="b-phone">
		<a href="#" class="phone">+ 7 495 922 50 55</a>
		<a href="#" class="pink dashed">Заказать звонок</a>
	</div>
</div>
<div id="panel-page">
	<div class="b-top-content clearfix">
		<div class="b-block">
			<div class="b-top-content-container">
				<div class="b-top-content-block b-top-city">
					<a href="#" class="dashed"><b>Москва</b></a>
					<p>25 пунктов выдачи</p>
				</div>
				<div class="b-top-content-block b-top-schedule">
					<p class="icon-clock">пн-пт: с 10:00 до 19:00, сб: с 10:00 до 18:00, вс – выходной</p>
				</div>
				<div class="b-top-content-block b-top-auth">
					<a href="#" class="icon-rub-round"><b>Купить оптом</b></a>
					<a href="#" class="dashed">Войти</a>
				</div>
				<div class="b-phone b-phone-mobile">
					<a href="tel:+4959225055" class="phone">+7 (495) 922-50-55</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-header wave-bottom">
		<div class="b-block">
			<div class="b-header-block b-top-header-block clearfix">
				<a href="/1store" class="b-logo"></a>
				<div class="b-menu-container">
					<ul class="b-menu">
						<li><a href="#">Доставка и оплата</a></li>
						<li><a href="#">Помощь</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#" class="pink icon-discount">Акции и скидки</a></li>
					</ul>
				</div>
				<div class="b-phone clearfix">
					<a href="#" class="phone">+7 (495) 922-50-55</a>
					<a href="#" class="pink dashed">Заказать звонок</a>
				</div>
				<a href="#" class="b-cart b-mobile-cart">
					<div class="b-cart-img icon-cart"></div>
					<div class="b-cart-text">
						<p class="cart-count">5 шт.</p>
						<p class="cart-sum icon-rub">15 800</p>
					</div>
				</a>
			</div>
			<div class="b-header-block pink-header-block clearfix">
				<a href="#" class="b-catalog-menu icon-list">Каталог товаров</a>
				<div id="burger-menu" class="burger-menu icon-menu"></div>
				<form action="#" class="b-search-form">
					<div class="b-search-input icon-search">
						<input type="text" id="title-search-input" placeholder="Поиск по товарам" name="q" autocomplete="off" class="">
					</div>
					<input type="submit" class="b-search-submit" value="">
				</form>
				<a href="#" class="dashed">Задать вопрос</a>
				<a href="#" class="b-cart">
					<div class="b-cart-img icon-cart"></div>
					<div class="b-cart-text">
						<p class="cart-count">5 шт.</p>
						<p class="cart-sum icon-rub">15 800</p>
					</div>
				</a>
			</div>
			<div class="b-header-block menu-header-block">
				<ul class="b-header-categories b-header-categories-top">
					<li><a href="#">Мастика и марципан</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Ароматизаторы</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Ингредиенты</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Инвентарь</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Красители</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Молды и вайнеры</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Пищевая печать</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Украшения</a></li>
				</ul>
				<ul class="b-header-categories b-header-categories-bottom">
					<li><a href="#" class="pink">Новинки</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Формы</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Шоколад</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Подставки</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Глазурь</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Упаковка</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Для работы с кремом</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Я хочу приготовить</a></li>
					<li class="list-dot"></li>
					<li><a href="#">Еще…</a></li>
				</ul>
			</div>
		</div>
	</div>