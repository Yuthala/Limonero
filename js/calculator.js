window.addEventListener('DOMContentLoaded', function() { 

'use strict';

	/*Калькулятор Машинное Вязание*/
	function priceCalaculatorKnit () {

		/*ПЕРЕМЕННЫЕ*/
		let itemSelector = document.getElementById('select'), //выбор пользователя в поле "Выберите изделие"
		consumptionCalc = 0, //переменная для хранения значения расхода пряжи
		consumtionInput = document.getElementById('consumption'),//поле для вывода расхода пряжи
		priceCalc = 0, //переменная для хранения результатов подсчета стоимости изделия
		priceInput = document.getElementById('price');//поле для вывода результата расчета стоимости изделия

		/*исполняемый код*/
		showConsumption();
		showPrice();

		/*EVENT LISTENERS*/
		itemSelector.addEventListener('change', function() {
			showConsumption();
			showPrice();
		})

		/*Функции*/
		function showConsumption () {
			consumptionCalc = itemSelector.value;
			consumtionInput.innerHTML = consumptionCalc;
		}

		function showPrice () {
			priceCalc = (itemSelector.value) * 2;
			priceInput.innerHTML = priceCalc;
		}
	}

	priceCalaculatorKnit ();



	
	/*Калькулятор Design*/
	/*массив с ценами*/
	const prices = [
		7900, //джемпер жен. без узоров
		8500, //джемпер жен. простой узор
		9800, //джемпер жен. с жаккардом
		8500, //джемпер жен. с роспусками
		10900, //джемпер жен. интарсия 2 цвета
		13000, //джемпер жен. интарсия многоцветная
		8500, //кардиган жен. короткий
		8900, //джемпер муж. простой
		5400, //джемпер детский 
		5800, //жилетка жен.
		10900, //платье прямое 
		3200, //шапка взрослая
		2300 //шарф взрослый
	];

	function priceCalaculatorDesign () {
		/*переменные*/
		let itemSelector = document.getElementById('select-design'); //выбор пользователя в поле "Выберите изделие"
		console.log(`переменная itemSelector.value ${itemSelector.value}`);
		let designOptions = itemSelector.getElementsByTagName("option"); //опции выбора изделия
		console.log(`переменная designOptions[0]  ${designOptions[0]}`);
		let pictureFrame = document.getElementById ('design-picture'); //поле для вывода картинки
		let priceInput = document.getElementById('design-price'); //поле для вывода результата расчета стоимости изделия
		console.log(`переменная priceInput  ${priceInput}`);

		showPrice ();

		/*EVENT LISTENERS*/
		itemSelector.addEventListener('change', function() {
			showPrice ();
		});

		function showPrice () {
			let i = itemSelector.value;
			let option = designOptions[i];
			let image = option.getAttribute("data-image");
			pictureFrame.style.backgroundImage = "url('" + image + "')";
			priceInput.innerHTML = prices[i];
		}
	}
	
	priceCalaculatorDesign ();

	/*Калькулятор Tailor*/
	class Item {
		name = "";
		price = 0;
		image = "";

		constructor (name, price, image) {
			this.name = name;
			this.price = price;
			this.image = image;
		}
	}

	const items = [
		new Item ("Манжеты, 2 шт.", 1200, 'img/calculator/image_100.webp'),
		new Item ("Рукав, 2 шт.", 2500, 'img/calculator/image_101.jpg'),
		new Item ("Капюшон", 3000, 'img/calculator/image_102.jpg'),
		new Item ("Шнур вязаный, 1 м", 300, 'img/slider/slide_5.jpg'),
		new Item ("Воротник для бомбера", 1200, 'img/calculator/image_104.png'),
		new Item ("Накладной карман", 300, 'img/calculator/image_105.jpg')
	];

	console.log(`переменная item_0 ${items[0].price}`);

	function priceCalculatorTailor () {
		/*переменные*/
		let itemSelector = document.getElementById('select-tailor'); //выбор пользователя в поле "Выберите изделие"
		let pictureFrame = document.getElementById ('tailor-picture'); //поле для вывода картинки
		let priceInput = document.getElementById('tailor-price'); //поле для вывода результата расчета стоимости изделия

		priceInput.innerHTML = items[0].price;
		pictureFrame.style.backgroundImage = "url('" + items[0].image + "')";
		console.log(`items-0[image] ${items[0].image}`);

		/*EVENT LISTENERS*/
		itemSelector.addEventListener('change', function() {
			let i = itemSelector.value;
			let price = items[i].price;
			console.log(`переменная price ${price}`);
			priceInput.innerHTML = price;
			pictureFrame.style.backgroundImage = "url('" + items[i].image + "')";
		});

	}

	priceCalculatorTailor ();

})