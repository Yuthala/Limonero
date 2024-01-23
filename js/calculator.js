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

	const prices = [
		4500,
		5000,
		6000,
		6000,
		7500,
		9000,
		5500,
		4500,
		3500,
		4500,
		8800,
		2000,
		1500
	];

	// class Item {
	// 	name = "";
	// 	price = 0;
	// 	image = "";

	// 	constructor (name, price, image) {
	// 		this.name = name;
	// 		this.price = price;
	// 		this.image = image;
	// 	}
	// }

	// const items = [Item];

	// let item = new Item ("Jacket", 5500);

	// let item_1 = new Item ("J1", 7000);

	// let item_2 = new Item ("J2", 1000);
	// console.log(`переменная item ${item.name}`);
	// console.log(`переменная item ${item.price}`);

	// items.push(item);
	// items.push(item_1);
	// items.push(item_2);
	// console.log(`массив items ${items[2].price}`);

	function priceCalaculatorDesign () {
		/*переменные*/
		let itemSelector = document.getElementById('select-design'); //выбор пользователя в поле "Выберите изделие"
		console.log(`переменная itemSelector.value ${itemSelector.value}`);
		let designOptions = itemSelector.getElementsByTagName("option"); //опции выбора изделия
		console.log(`переменная designOptions[0]  ${designOptions[0]}`);
		let pictureFrame = document.getElementById ('design-picture'); //поле для вывода картинки
		let priceInput = document.getElementById('design-price'); //поле для вывода результата расчета стоимости изделия
		console.log(`переменная priceInput  ${priceInput}`);

		/*исполняемый код*/
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
			//console.log(`переменная itemSelector.value ${itemSelector.value}`);
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

	// const items = [Item];

	// let item = new Item ("Jacket", 5500);

	// let item_1 = new Item ("J1", 7000);

	// let item_2 = new Item ("J2", 1000);
	// console.log(`переменная item ${item.name}`);
	// console.log(`переменная item ${item.price}`);

	// items.push(item);
	// items.push(item_1);
	// items.push(item_2);
	// console.log(`массив items ${items[2].price}`);

	const items = [
		new Item ("Манжеты, 2 шт.", 1200, 'img/calculator/image_100.webp'),
		new Item ("Рукав, 2 шт.", 2500, 'img/calculator/image_101.jpg'),
		new Item ("Капюшон", 2000, 'img/calculator/image_102.jpg'),
		new Item ("Шнур вязаный, 1 м", 300, 'img/slider/slide_5.jpg'),
		new Item ("Воротник для бомбера", 1200, 'img/calculator/image_104.png'),
		new Item ("Накладной карман", 300, 'img/calculator/image_105.jpg')
	];

	console.log(`переменная item_0 ${items[0].price}`);

	function priceCalculatorTailor () {
		/*переменные*/
		let itemSelector = document.getElementById('select-tailor'); //выбор пользователя в поле "Выберите изделие"
		//console.log(`переменная itemSelector.value ${itemSelector.value}`);
		//let tailorOptions = itemSelector.getElementsByTagName("option"); //опции выбора изделия
		//console.log(`переменная tailorOptions[0]  ${tailorOptions[0]}`);
		let pictureFrame = document.getElementById ('tailor-picture'); //поле для вывода картинки
		let priceInput = document.getElementById('tailor-price'); //поле для вывода результата расчета стоимости изделия
		//console.log(`переменная priceInput  ${priceInput}`);

		priceInput.innerHTML = items[0].price;
		pictureFrame.style.backgroundImage = "url('" + items[0].image + "')";
		console.log(`items-0[image] ${items[0].image}`);

		/*EVENT LISTENERS*/
		itemSelector.addEventListener('change', function() {
			//showPrice();
			let i = itemSelector.value;
			let price = items[i].price;
			console.log(`переменная price ${price}`);
			priceInput.innerHTML = price;
			pictureFrame.style.backgroundImage = "url('" + items[i].image + "')";
		});

	}

	priceCalculatorTailor ();

})