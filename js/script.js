
window.addEventListener('DOMContentLoaded', function() { //загрузка кода после того как загружены элементы DOM-дерева

	'use strict';
	
	/*ПЕРЕМЕННЫЕ*/

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

	/*EVENT LISTENERS*/

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

});