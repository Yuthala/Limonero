<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yuthala@GitHub/Dina Polousova">
	<title>Калькулятор</title>
	<meta name="title" content="Онлайн-калькулятор">
	<meta name="description" content="Примерный расчет стоимости услуг">

	<link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.min.css">

</head>
<body>
	<header class="header">
		<div class="container">
			<div class="menu__desktop">
				<nav>
					<ul class="menu">
						<li class="menu__item"><a href="./index.html" class="menu__item-link"><img src="img/logo.png" alt="logo" class="logo"></a></li>
						<li class="menu__item"><a href="./index.html" class="menu__item-link">Главная</a></li>
						<li class="menu__item"><a href="./index.html#services" class="menu__item-link">Услуги</a></li>
						<li class="menu__item"><a href="./index.html#portfolio" class="menu__item-link">Работы</a></li>
						<li class="menu__item"><a href="./index.html#about" class="menu__item-link">Обо мне</a></li>
						<li class="menu__item current"><a href="#" class="menu__item-link">Калькулятор</a></li>
						<li class="menu__item"><a href="./index.html#contacts" class="menu__item-link">Контакты</a></li>
					</ul>
				</nav>
			</div>

			<div class="menu__mobile">
				<div class="menu__block">
					<div class="menu__close"></div>
					<nav>
						<ul class="menu">
							<li class="menu__item"><a href="./index.html" class="menu__item-link">Главная</a></li>
							<li class="menu__item"><a href="./index.html#services" class="menu__item-link">Услуги</a></li>
							<li class="menu__item"><a href="./index.html#portfolio" class="menu__item-link">Работы</a></li>
							<li class="menu__item"><a href="./index.html#about" class="menu__item-link">Обо мне</a></li>
							<li class="menu__item"><a href="./index.html" class="menu__item-link current">Калькулятор</a></li>
							<li class="menu__item"><a href="./index.html#contacts" class="menu__item-link">Контакты</a></li>
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
		<div class="pageUp">
			<a href="#" id="toTop"><img src="img/up-arrow.png" alt="arrow up"></a>
		</div>
	</header>

	<main>
		<section class="machine-knit">
			<div class="container">
				<h2 class="machine-knit__header">Машинное вязание</h2>
				<p>Стоимость изготовления рассчитывается по метражу расхода пряжи - 2 рубля/метр.</p>
				<p>Ниже приведена примерная стоимость изготовления изделия без узора из пряжи метражом Nm 32/2 в 3 сложения (из пряжи средней толщины), что соответствует расходу 530 м/100 г.</p>
				<p>В зависимости от состава пряжи, выбранной вязки, плотности вязания, желаемой толщины полотна, особенностей конкретной модели расход пряжи может отличаться как в большую, так и в меньшую сторону.</p>
				<p><strong>Приведенная стоимость не включает расчет изделия.</strong></p>


				<div class="machine-knit__calculator">

				<?php
					$content = '
						<div class="machine-knit__item options-list">
							<label class="machine-knit__label">Выберите изделие</label>
							<select id="select">
								<option value="1500" selected >Базовый джемпер жен., р. 46</option>
								<option value="1900">Базовый джемпер муж., р. 50</option>
								<option value="950">Базовый джемпер дет., р. 116</option>
								<option value="1000">Жилетка, длина 58 см, р. 46</option>
								<option value="2200">Платье жен., длина 100 см,  р. 46</option>
								<option value="400">Шапка взросл.</option>
								<option value="300">Шапка дет.</option>
								<option value="400">Шарф длина 180 см, шир. 30 см</option>
							</select>
						</div>';
					echo $content;
				?>


					<div class="machine-knit__item">
						<label class="machine-knit__label">Расход пряжи в метрах</label>
						<div class="machine-knit__meters" id="consumption"></div>
					</div>

					<div class="machine-knit__item">
						<label class="machine-knit__label">Стоимость</label>
						<div class="machine-knit__price" id="price"></div>
					</div>
				</div>

				<div>
					<p>Если вам известен метраж пряжи, у вас изделие гладью или обычной резинкой, из стандартной пряжи (средней толщины, без пайеток), без узоров, полос, роспусков, сложных резинок (жемучужная, английская), стоимость изготовления будет равна стоимости по калькулятору.  Фурнитура оплачивается отдельно. </p> 
					<div class="dividerTable"></div>
					<p>Ажурные вставки, сложные резинки, узоры, молнии, увеличивают стоимость изготовления. Наценки к стандартной стоимости приведены в таблице ниже.</p>
				</div>

				<div class="machine-knit__table">
					<div class="machine-knit__table-item tableheader">Особенность изготовления</div>
					<div class="machine-knit__table-item tableheader">Наценка, %</div>
					<div class="machine-knit__table-item">Горизонтальные полосы до 30% изделия</div>
					<div class="machine-knit__table-item">10%</div>
					<div class="machine-knit__table-item">Горизонтальные полосы свыше 30% изделия</div>
					<div class="machine-knit__table-item">20%</div>
					<div class="machine-knit__table-item">Жемчужная, английская резинка</div>
					<div class="machine-knit__table-item">30%</div>
					<div class="machine-knit__table-item">Узор жаккард</div>
					<div class="machine-knit__table-item">двухцветный 100% + 10% за каждый дополнительный цвет, наценка только на площадь узора</div>
					<div class="machine-knit__table-item">Узор интарсия</div>
					<div class="machine-knit__table-item">двухцветный 100% + 10% за каждый дополнительный цвет, наценка только на площадь узора</div>
					<div class="machine-knit__table-item">Узор ажурный</div>
					<div class="machine-knit__table-item">100%, только с площади узора</div>
					<div class="machine-knit__table-item">Роспуски до 10 шт на изделие</div>
					<div class="machine-knit__table-item">10%</div>
					<div class="machine-knit__table-item">Роспуски от до 11 до 20 шт на изделие</div>
					<div class="machine-knit__table-item">20%</div>
					<div class="machine-knit__table-item">Изделие с пуговицами и планкой</div>
					<div class="machine-knit__table-item">не более 10%</div>
				</div>

				<div class="dividerTable"></div>
				<h3 class="machine-knit__subheader">Пример расчета</h3>
				<div class="machine-knit__example">
					<div class="machine-knit__example-image">
						<img src="img/jacket.jpg" alt="jacket">
					</div>
					<div class="machine-knit__example-table">
						<div class="machine-knit__example-item tableheader">Жилет оверсайз</div>
						<div class="machine-knit__example-item">размер 42-44</div>
						<div class="machine-knit__example-item">Пряжа</div>
						<div class="machine-knit__example-item">Мохер Mister Joe, 800 м/100 г в 2 сложения</div>
						<div class="machine-knit__example-item">Вязка</div>
						<div class="machine-knit__example-item">Промышленная резинка 2х1, планка</div>
						<div class="machine-knit__example-item">Расход пряжи</div>
						<div class="machine-knit__example-item">160 г</div>
						<div class="machine-knit__example-item">Стоимость изготовления</div>
						<div class="machine-knit__example-item">(400 м * 1,6 ) * 2 р = 640 м * 2 р = 1280 р</div>
						<div class="machine-knit__example-item">Наценка</div>
						<div class="machine-knit__example-item">0 (планка только под сторону с пуговицами, без узоров, простая резинка)</div>
						<div class="machine-knit__example-item">Стоимость фурнитуры</div>
						<div class="machine-knit__example-item">60 р * 4 шт. = 240 р</div>
						<div class="machine-knit__example-item tableheader">Итого</div>
						<div class="machine-knit__example-item">1520 р</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container">
			<h3 class="policy"><a href="./policy.html" target="_blank">Политика конфиденциальности</a></h3>
			<div class="divider"></div>
			<div class="warning">Данный сайт несет информационный характер.<br> Материалы и цены,
				размещенные на сайте, не являются публичной офертой</div>
			<div class="footer__author">
				<p class="footer__author-text">2023 Limonero</p>
				<p class="footer__author-text">© Yuthala @ GitHub</p>
			</div>
		</div>
	</footer>

	<script src="js/script.js"></script>
	<script src="js/calculator.js"></script>
</body>
</html>