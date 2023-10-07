<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yuthala@GitHub/Dina Polousova">
	<title>Limonero</title>
	<meta name="title" content="Разработка и изготовление трикотажных изделий">
	<meta name="description" content="Limonero - трикотаж от идеи до воплощения">

	<link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/normalize.css">
	<!--<link rel="stylesheet" href="css/style.min.css">-->
	<?php 
		wp_head();
	?>
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="menu__desktop">
				<nav>
					<ul class="menu">
						<li class="menu__item"><a href="#" class="menu__item-link"><img src="img/logo.png" alt="logo" class="logo"></a></li>
						<li class="menu__item current"><a href="#" class="menu__item-link">Главная</a></li>
						<li class="menu__item"><a href="#services" class="menu__item-link">Услуги</a></li>
						<li class="menu__item"><a href="#portfolio" class="menu__item-link">Работы</a></li>
						<li class="menu__item"><a href="#about" class="menu__item-link">Обо мне</a></li>
						<li class="menu__item"><a href="#" class="menu__item-link">Блог</a></li>
						<li class="menu__item"><a href="#contacts" class="menu__item-link">Контакты</a></li>
					</ul>
				</nav>
			</div>

			<div class="menu__mobile">
				<div class="menu__block">
					<div class="menu__close"></div>
					<nav>
						<ul class="menu">
							<li class="menu__item"><a href="#" class="menu__item-link current">Главная</a></li>
							<li class="menu__item"><a href="#services" class="menu__item-link">Услуги</a></li>
							<li class="menu__item"><a href="#portfolio" class="menu__item-link">Работы</a></li>
							<li class="menu__item"><a href="#about" class="menu__item-link">Обо мне</a></li>
							<li class="menu__item"><a href="#" class="menu__item-link">Блог</a></li>
							<li class="menu__item"><a href="#contacts" class="menu__item-link">Контакты</a></li>
						</ul>
					</nav>	

					<div class="menu__social">
						<a href="https://t.me/SugarBay" target="_blank"><img src="img/telegram.png" alt="telegram" class="menu__social-link"></a>
						<a href="https://vk.ru/limonero_studio" target="_blank"><img src="img/vk.png" alt="vk" class="menu__social-link"></a>
						<a href="mailto:dinavl@bk.ru" target="_blank"><img src="img/email.png" alt="email" class="menu__social-link"></a>
					</div>

				</div>

				<div class="menu__overlay"></div>
			</div>

			<div class="menu__burger">
				<span></span>
				<span class="long"></span>
				<span></span>
			</div>

			<div class="header__content">
				<h1 class="header__title">Трикотаж от идеи до воплощения</h1>
				<p class="header__text">Разработка, расчет и изготовление трикотажных изделий</p>
				<div class="header__button"><a href="#services">Подробнее</a></div>
			</div>

			<div class="subheader">
				<div class="subheader__item">
					<span class="thin">Если у вас</span>
					<span class="medium">недостаточный объем</span>
					<span class="big"><span class="gray">для </span>контрактного <span class="thin">производства</span></span>
				</div>
				<div class="subheader__item">
					<span class="medium gray">Если вы </span>
					<span class="thin">хотите </span>
					<span class="big">оценить спрос </span>
					<span class="medium gray">и расширить </span>
					<span class="medium">ассортимент</span>
				</div>
				<div class="subheader__item">
					<span class="thin">Если вам </span>
					<span class="medium">нужна</span>
					<span class="big">партия </span>
					<span class="thin gray">товара </span>
					<span class="medium">для сезонных </span>
					<span class="thin">распродаж</span>
				</div>
			</div>
			<h3 class="subheader__text">есть решение!</h3>
			<h3 class="subheader__text">Предлагаю несколько вариантов сотрудничества</h3>
		</div>

		<div class="pageUp">
			<a href="#" id="toTop"><img src="img/up-arrow.png" alt="arrow up"></a>
		</div>
	</header>

	<main>
		<section class="services">
			<div class="container">
				<h2 class="services__title title" id="services">услуги</h2>
				<div class="services__inner">
					<div class="services__item">
						<h3 class="services__header">Машинное вязание</h3>
						<p class="services__text">Отвяжем небольшие партии по вашим схемам из вашей пряжи на собственном оборудовании.<br> Доверьте нам изготовление ваших изделий, и освободите себе время для развития бизнеса.</p>
						<p class="services__price">стоимость услуги: от 1 500 р</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Разработка модели<br> "под ключ"</h3>
						<p class="services__text">Полный цикл разработки изделия с подбором материалов и отвязыванием образцового изделия<br>Сразу можно закупать пряжу и приступать к вязанию для себя или на продажу.</p>
						<p class="services__price">стоимость услуги: от 10 000 р</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Составление схем узоров</h3>
						<p class="services__text">Разработаем узор с нуля или по фото.<br>Больше не нужно выискивать схему понравившегося узора в Интернете. Узоры жаккард и интарсия без искажения по высоте.</p>
						<p class="services__price">стоимость услуги: от 2 000 р</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Составление описаний</h3>
						<p class="services__text">Подробное и понятное описание с расчетами понравившейся модели по готовому изделию.<br>Всю кропотливую работу по определению плотности, расчету петель, расчету количества пряжи мы сделаем за вас.</p>
						<p class="services__price">стоимость услуги: от 2 000 р</p>
					</div>
				</div>
			</div>	
		</section>

		<section class="slider">
			<div class="container">
				<div class="divider"></div>
			<h2 class="slider__title title" id="portfolio">готовые работы</h2>
			<div class="wrap">
				<div class="slider-item slider-item-active">
					<img src="img/slider/slide_1.jpg" alt="slide_1">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_2.jpg" alt="slide_2">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_3.jpg" alt="slide_3">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_4.png" alt="slide_4">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_5.png" alt="slide_5">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_6.jpg" alt="slide_6">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_7.jpg" alt="slide_7">
				</div>
	
				<div class="prev"><div class="arrow-left"></div></div>
				<div class="next"><div class="arrow-right"></div></div>
			</div>

			<div class="slider-dots">
				<div class="dot dot-active"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>

			<div class="slider-bottom"></div>
			</div>
		</section>

		<section class="advantages">
			<div class="container">
					<h2 class="advantages__title title">преимущества</h2>
				<div class="advantages__inner">
					<div class="advantages__item">
						<img src="img/quality-round.png" alt="quality">
						<h3 class="advantages__text">гарантия качества</h3>
					</div>
					<div class="advantages__item">
						<img src="img/equipment-round.png" alt="quality">
						<h3 class="advantages__text">собственное оборудование</h3>
					</div>
					<div class="advantages__item">
						<img src="img/little_slot-round.png" alt="quality">
						<h3 class="advantages__text">работаем с маленькими партиями</h3>
					</div>
					<div class="advantages__item">
						<img src="img/calculations-round.png" alt="quality">
						<h3 class="advantages__text">быстрый расчет стоимости</h3>
					</div>
					<div class="advantages__item">
						<img src="img/wool_yarn-round.png" alt="yarn">
						<h3 class="advantages__text">надежные поставщики<br>пряжи</h3>
					</div>
					<div class="advantages__item">
						<img src="img/contract-round.png" alt="contract">
						<h3 class="advantages__text">работаем с физлицами,<br>юрлицами, ИП</h3>
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="divider"></div>
				<h2 class="about__title title">Обо мне</h2>
				<div class="about__inner">
					<div class="about__item">
						<div class="about__circle"></div>
						<img src="img/dina-round.png" alt="founder">
					</div>
					<p class="about__text">Привет! Меня зовут Дина. Я основатель студии трикотажа "Limonero". Более 20 лет занимаюсь трикотажем, а свою первую вязальную машинку я купила 7 лет назад. Сначала я вязала по готовым описаниям, со временем научилась составлять описания сама.<br><br>
					Мощный бустер моему мастерству придало обучение конструированию трикотажных изделий у опытного мастера. Здесь я научилась не только разрабатывать свои собственные модели, но и работать по фото и готовым моделям - мысленно разделять изделия на детали и переводить это на язык рядов и петель.<br><br>
				У меня небольшая семейная мастерская со всем необходимым оборудованием и программным обеспечением. Мной разработано более 30 моделей женской, мужской и детской одежды. Работаю с жаккардовыми узорами, узорами в технике интарсия.
				Cотрудничаю с мастерами трикотажного производства, конструкторами.</p>
				</div>
			</div>
		</section>

		<section class="contacts">
			<div class="container">
				<h2 class="contacts__title title" id="contacts">контакты</h2>
				<div class="contacts__inner">
					<div class="contacts__icon-box">
						<div class="contacts__item">
							<a href="https://t.me/SugarBay" target="_blank"><img src="img/telegram.png" alt="telegram" class="contacts__item-link"></a>
						</div>
						<div class="contacts__item">
							<a href="https://vk.ru/limonero_studio" target="_blank"><img src="img/vk.png" alt="vk" class="contacts__item-link"></a>
						</div>
						<div class="contacts__item">
							<a href="mailto:dinavl@bk.ru" target="_blank"><img src="img/email.png" alt="email" class="contacts__item-link"></a>
						</div>
					</div>
					<form action="#" class="contacts__form">
						<input type="text" class="contacts__name" placeholder="Ваше имя">
						<input type="email" class="contacts__email" placeholder="Ваш e-mail">
						<input type="text" class="contacts__topic" placeholder="Тема обращения">
						<textarea class="contacts__textarea" placeholder="Ваше сообщение"></textarea>
						<input type="submit" class="contacts__button" value="Отправить">
					</form>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container">
			<h3 class="policy"><a href="#" target="_blank">Политика конфиденциальности</a></h3>
			<div class="divider"></div>
			<div class="warning">Данный сайт несет информационный характер и, ни при каких условиях<br> материалы и цены,
				размещенные на сайте, не являются публичной офертой</div>
			<div class="footer__author">
				<p class="footer__author-text">© Yuthala @ GitHub</p>
				<p class="footer__author-text">Powered by WordPress</p>
			</div>
		</div>
	</footer>

	<script src="js/script.js"></script>
</body>
</html>