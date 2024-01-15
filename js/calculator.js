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
		7000,
		7700,
		8800,
		8400,
		8800,
		9400,
		8400,
		8800,
		5500,
		4500,
		11800,
		3000,
		2500
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
			showPrice();
		});

		/*Функции*/
		function showPrice () {
			let i = itemSelector.value;
			let option = designOptions[i];
			let image = option.getAttribute("data-image");
			pictureFrame.style.backgroundImage = "url('" + image + "')";
			//console.log(`переменная itemSelector.value ${itemSelector.value}`);

			priceInput.innerHTML = prices[i];
			//priceInput.innerHTML = items[i].price;
		}

	}
	
	priceCalaculatorDesign ();

	/*Калькулятор Tailor*/

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
})