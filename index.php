<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yuthala@GitHub/Dina Polousova">
	<title>Limonero LAB</title>
	<meta name="title" content="Разработка и изготовление трикотажных изделий">
	<meta name="description" content="Limonero - трикотаж от идеи до воплощения">

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
						<li class="menu__item"><a href="#" class="menu__item-link"><img src="img/logo.png" alt="logo" class="logo"></a></li>
						<li class="menu__item current"><a href="#" class="menu__item-link">Главная</a></li>
						<li class="menu__item"><a href="#services" class="menu__item-link">Услуги</a></li>
						<li class="menu__item"><a href="#portfolio" class="menu__item-link">Работы</a></li>
						<li class="menu__item"><a href="#about" class="menu__item-link">О мастерской</a></li>
						<li class="menu__item"><a href="./calculator.php" class="menu__item-link">Калькулятор</a></li>
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
							<li class="menu__item"><a href="#about" class="menu__item-link">О мастерской</a></li>
							<li class="menu__item"><a href="./calculator.php" class="menu__item-link">Калькулятор</a></li>
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
						<a href="./calculator.php#machine-knit" class="services__link"> >> онлайн калькулятор >></a>
						<p class="services__text">Отвяжу небольшие партии по вашим схемам из вашей пряжи на собственном оборудовании.<br> Доверьте изготовление ваших изделий, и освободите себе время для развития бизнеса.</p>
						<p class="services__price">стоимость услуги: от 2 400 р/изд</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Разработка модели<br> "под ключ"</h3>
						<a href="./calculator.php#design" class="services__link"> >> онлайн калькулятор >></a>
						<p class="services__text">Полный цикл разработки изделия с подбором материалов, отвязыванием и сборкой образцового изделия<br>Сразу можно вязать для себя или передавать материалы дессинатору для производства в промышленных масштабах.</p>
						<p class="services__price">стоимость услуги: от 5 400 р</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Услуги для ателье</h3>
						<a href="./calculator.php#tailor" class="services__link"> >> онлайн калькулятор >></a>
						<p class="services__text">Изготовление отдельных деталей для ателье. Помощь в подборе материалов. <br>Подвязы, воротник, рукава, капюшон, шнур, листочка, клапан кармана, карман.</p>
						<p class="services__price">стоимость услуги: от 1 200 р</p>
					</div>
					<div class="services__item">
						<h3 class="services__header">Консультации</h3>
						<p class="services__text">Проконсультирую по любым вопросам, связанным с изготовлением вязаного трикотажа. <br>По материалам, узорам, конструированию, расходу пряжи, поставщикам, обучению.</p>
						<p class="services__price">Оставьте заявку на консультацию через форму <a href="#contacts" class="calculator-link">обратной связи</a></p>
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
					<img src="img/slider/slide_1.webp" alt="slide_1">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_2.webp" alt="slide_2">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_3.webp" alt="slide_3">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_4.webp" alt="slide_4">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_5.webp" alt="slide_5">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_6.webp" alt="slide_6">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_7.webp" alt="slide_7">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_8.webp" alt="slide_8">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_9.webp" alt="slide_9">
				</div>
				<div class="slider-item">
					<img src="img/slider/slide_10.webp" alt="slide_10">
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
						<img src="img/quality-round.webp" alt="quality">
						<h3 class="advantages__text">гарантия качества</h3>
					</div>
					<div class="advantages__item">
						<img src="img/equipment-round.webp" alt="quality">
						<h3 class="advantages__text">собственное оборудование</h3>
					</div>
					<div class="advantages__item">
						<img src="img/little_slot-round.webp" alt="quality">
						<h3 class="advantages__text">работаю с маленькими партиями</h3>
					</div>
					<div class="advantages__item">
						<img src="img/calculations-round.webp" alt="quality">
						<h3 class="advantages__text">быстрый расчет стоимости</h3>
					</div>
					<div class="advantages__item">
						<img src="img/wool_yarn-round.webp" alt="yarn">
						<h3 class="advantages__text">надежные поставщики<br>пряжи</h3>
					</div>
					<div class="advantages__item">
						<img src="img/contract-round.webp" alt="contract">
						<h3 class="advantages__text">Официально. Работаю с физлицами,<br>юрлицами, ИП</h3>
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="divider"></div>
				<h2 class="about__title title">О мастерской</h2>
				<div class="about__inner">
					<div class="about__item">
						<img src="img/table.webp" alt="working table">
						<img src="img/sweater.webp" alt="blue sweater">
						<img src="img/computer.webp" alt="computer">
						<img src="img/workshop.webp" alt="workshop">
						<img src="img/dina-round.webp" alt="Dina">
					</div>
					<p class="about__text">Меня зовут Дина. Я основатель трикотажной мастерской Limonero. У меня большой опыт конструирования и изготовления женских, мужских и детских трикотажных изделий с использованием вязальных машин. Моя цель - помочь предпринимателям, которые хотят расширить свой ассортимент трикотажа, но при этом не вкладываться в производство крупных партий. Трикотажные фабрики редко работают с партиями менее 100 единиц одного артикула, но иногда нужно гораздо меньше. Это может быть лимитированная сезонная коллекция, изделия для небольшого магазина, небольшая партия для определенного мероприятия.<br><br>
					В моей мастерской также можно заказать расчет трикотажного изделия для изготовления на другом производстве или самостоятельного изготовления. Сделаю все расчеты, схемы, описание, подберу пряжу и отвяжу сигнальный образец (образцовое изделие). Для промышленного производства эти материалы передаются на трикотажную фабрику, и по ним специалисты фабрики составляют программу для промышленной вязальной машины. <br><br>Я открыта вашим идеям, и могу дать им экспертную оценку модели с точки зрения материала, конструкции и технологии изготовления изделия.<br>
					Делаю свое дело с любовью, ставя в приоритет соответствие конечного результата вашим ожиданиям. Работаю официально, заключаю договора и выдаю чеки. Поэтапная оплата. Первый платеж - после согласования ТЗ.<br><br>
					У меня собственная мастерская и оборудование: вязальная и кеттельная машины, гладильное оборудование, швейное оборудование.<br><br>
					Трикотажное производство - это и еще много расчетов. Я использую современное программное обеспечение и компьютерное оборудование, которые позволяют оцифровывать узоры, составлять многоцветные схемы в цифровом формате, делать автоматический расчет кривых и многое другое.<br><br>
					Я также занимаюсь обучением ручному вязанию начинающих и продолжающих вязальщиц в формате мастер классов. Также вы можете приобрести онлайн-мастер классы для начинающих с материалами и схемами <a href="https://www.ozon.ru/seller/limonero-1576711/products/?miniapp=seller_1576711" target="_blank"> в моем магазине на OZON</a>. Некоторые обучающие материалы есть и в <a href="https://www.youtube.com/channel/UCVO1mU9Sn72nrU9KbnXiMBA" target="_blank">открытом доступе</a>.</p>
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
							<a href="mailto:smtp_assist@mail.ru" target="_blank"><img src="img/email.png" alt="email" class="contacts__item-link"></a>
						</div>
					</div>

					<form action="send.php" method="POST" id="form" class="contacts__form">
						<input 
							type="text" 
							name="name" 
							id="name"
							class="contacts__name" 
							placeholder="Ваше имя"
                			pattern="[А-Яа-яЁё]{3,15}">
						<label for="name">Только русские буквы</label>

						<input 
						type="email" 
						name="email" 
						id="email"
						class="contacts__email" 
						placeholder="Ваш e-mail"
						maxlength="30" 
						required>
						<label for="email">В формате: emailboxname@xxxx.xx<span> *</span></label>
						
						<input 
						type="text" 
						name="subject" 
						class="contacts__topic" 
						pattern="[а-яА-ЯёЁa-zA-Z0-9]{3,20}"
						placeholder="Тема обращения (одним словом)">

						<label for="message">Обязательное поле<span> *</span></label>
						<textarea 
						name="body" 
						id="message"
						class="contacts__textarea" 
						placeholder="Ваше сообщение" 
						required></textarea>

						<input type="submit" name="submit" id="submit" class="contacts__button" value="Отправить">
						<div id="result"> </div>

						<div class="contacts__form-policy">
							<input type="checkbox" id="checkbox" checked>
							<label class="contacts__form-checkbox">Отправляя форму, вы принимаете <a href="./policy.html" target="_blank">"Соглашение об обработке конфиденциальных данных"</a></label>
						</div>
					</form>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container">
			<h3 class="policy"><a href="./policy.html" target="_blank">Политика конфиденциальности</a></h3>
			<div class="divider"></div>
			<div class="warning">Данный сайт носит информационный характер.<br> Материалы и цены,
				размещенные на сайте, не являются публичной офертой</div>
			<div class="footer__author">
				<p class="footer__author-text">2023-2024 ©Limonero</p>
				<p class="footer__author-text">сайт от <a href="https://github.com/Yuthala" class="footer__author-link" target="_blank">Yuthala @ GitHub</a></p>
			</div>
		</div>
	</footer>

	<script src="js/script.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/form.js"></script>
</body>
</html>