
window.addEventListener('DOMContentLoaded', function() { //загрузка кода после того как загружены элементы DOM-дерева

	'use strict';
	
	/*ПЕРЕМЕННЫЕ*/
		/*переменные для слайдера*/
		let slideIndex = 1,  //Индекс слайда
		dots = document.querySelectorAll('.dot'), //получаем точки
		prev = document.querySelector('.prev'), //получаем элементы управления слайдером (вперед-назад)
		next = document.querySelector('.next'), 
		dotsWrap = document.querySelector('.slider-dots'),//получаем "обертку" точек

		/*переменные для класса current*/
		links = document.querySelectorAll('.menu__item'),	
		menu = document.querySelectorAll('.menu'),
		menuItems = document.querySelectorAll('.menu__item-link'),

		
		/*переменные для гамбургера*/
		hamburger = document.querySelector('.menu__burger'),
		menuMobile = document.querySelector('.menu__mobile'),
		closeElem = document.querySelector('.menu__close'),

		/*переменные для scroll up*/
		btn = document.querySelector('#toTop');

		/*исполняемый код*/
		showSlides(slideIndex);//вызываем функцию, которая перелистывает слайдер вручную
		setInterval(plusSlides, 3000); //вызываем функцию, которая перелистывает слайдер автоматически

	/*EVENT LISTENERS*/

	//показываем предыдущий слайд по клику "назад" по событию click
	prev.addEventListener('click', function() {
		slideIndex -= 2; //уменьшаем slideIndex на 2 единицы (одна единица компенсирует slideIndex++ в функции plusSlides)
		plusSlides(); //запускаем функцию plusSlides
	});

	//показываем следующий слайд по клику "вперед" по событию click
	next.addEventListener('click', function() {
		plusSlides();
	});

	//делегируем событие click обертке точек; показываем слайд, который соответствует нажатой точке
	dotsWrap.addEventListener('click', function(event) {
		for (let i = 0; i < dots.length + 1; i++) {
		//i < dots.length + 1, потому что нам нужно сделать дополнительный проход цикла (если нажата седьмая точка, то i = 6, и проход цикла закончится
		
			//проверяем, что пользователь кликнул именно на точку (event.target имеет класс .dot) и нажата соответствующая точка
			if (event.target.classList.contains('dot') && event.target == dots[i-1]) {
				slideIndex = i;
				showSlides(); //показываем соответствующий слайд
			}
		}
	});


	//добавить класс current к текущей ссылке
	menu[0].addEventListener('click', function(event) {
		let target = event.target;
		console.log(`переменная target ${target}`);
		if (target && target.classList.contains('menu__item-link')) { //делегируем событие click "обертке" табов
			console.log(`test passed`);
			for(let i = 0; i < menuItems.length; i++) {
				if (target == menuItems[i]) { //если выбран таб с индексом [i]
					removeCurrent();// прячем все табы, начиная с первого ([0])
					//показываем таб с соответствующим индексом ([1])
					links[i].classList.add('current');
					break;
				}
			}
		}
	})

	//меню гамбургер

	hamburger.addEventListener('click', () => {
		menuMobile.classList.add('active');
	});

	menu[1].addEventListener('click', function (event) {
		for (let i = 0; i < menuItems.length; i++) {
			if (event.target.classList.contains('menu__item-link')) {
				menuMobile.classList.remove('active');
			}
		}
	});

	closeElem.addEventListener('click', () => {
		menuMobile.classList.remove('active');
	});


	/*Scroll up*/
	window.addEventListener('scroll', function () {
        // Если прокрутили дальше 800px, показываем кнопку
        if (scrollY > 800) {
            btn.classList.add('show');
            // Иначе прячем
        } else {
            btn.classList.remove('show');
        }
    });

    // При клике прокручиваем на самый верх
	btn.addEventListener('click', function(click) {
		click.preventDefault();
		window.scrollTo({
			top: 0, //scroll to the top of the page, edit if necessary
			behavior: "smooth"
		});
	});

	//Калькулятор
	

	/*ФУНКЦИИ*/
		//функция, показывающая и скрывающая слайды и точки
		function showSlides() {
			let slides = document.querySelectorAll('.slider-item'); //получаем со страницы все <div> с изображениями

			if (slideIndex > slides.length) { //если мы дошли до последнего слайда
				slideIndex = 1; //показываем первый слайд
			}
			if (slideIndex < 1) { //если мы на первом слайде нажимаем стрелку "назад"
				slideIndex = slides.length; //показываем последний слайд
			}
	
			slides.forEach((item) => item.classList.remove('slider-item-active')); //скрываем все слайды
			dots.forEach((item) => item.classList.remove('dot-active')); //скрываем точки

			slides[slideIndex - 1].classList.add('slider-item-active'); //показываем первый слайд (slideIndex = 0). Изначально slideIndex = 1, поэтому уменьшаем на единицу
			dots[slideIndex - 1].classList.add('dot-active'); //показываем первую точку
		}

		//функция, показывающая следующий слайд
		function plusSlides() {
			slideIndex ++; //увеличиваем slideIndex на единицу
			showSlides();//запускаем функцию showSlides
		}

		/*current*/
		function removeCurrent() {
			for (let i = 0; i < menuItems.length; i++) { //условие, что пока i < количества табов
				links[i].classList.remove('current'); //убираем класс current у псевдоэлемента названия таба
			}
		}

});