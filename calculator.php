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
				<h3 class="machine-knit__header">Машинное вязание</h3>
				<p>Стоимость изготовления рассчитывается по метражу расхода пряжи - 2 рубля/метр.</p>
				<p>Ниже приведена примерная стоимость изготовления изделия без узора из пряжи метражом Nm 32/2 в 3 сложения (из пряжи средней толщины), что соответствует расходу 530 м/100 г в 3 сложения.</p>
				<p>В зависимости от состава пряжи, выбранной вязки, плотности вязания, желаемой толщины полотна, особенностей конкретной модели расход пряжи может отличаться как в большую, так и в меньшую сторону.</p>
				<p><strong>Приведенная стоимость не включает расчет изделия.</strong></p>

				<div class="machine-knit__calculator">
					<div class="machine-knit__item options-list">
						<label class="machine-knit__label">Выберите изделие</label>
						<select>
							<option selected>Базовый джемпер жен., р. 46</option>
							<option>Базовый джемпер муж., р. 50</option>
							<option>Базовый джемпер дет., р. 116</option>
							<option>Жилетка, длина 58 см, р. 46</option>
							<option>Платье жен., длина 100 см,  р. 46</option>
							<option>Шапка взросл.</option>
							<option>Шапка дет.</option>
							<option>Шарф длина 180 см, шир. 30 см</option>
							<option>Носки дет., р. 20</option>
							<option>Носки жен., р. 25</option>
							<option>Носки муж., р. 29</option>
						</select>
					</div>

					<div class="machine-knit__item">
						<label class="machine-knit__label">Расход пряжи в метрах</label>
						<div class="machine-knit__meters"></div>
					</div>

					<div class="machine-knit__item">
						<label class="machine-knit__label">Стоимость</label>
						<div class="machine-knit__price"></div>
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
					<div class="machine-knit__table-item">20%</div>
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
</body>
</html>