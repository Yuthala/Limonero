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
		8800
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
		}

	}
	
	priceCalaculatorDesign ();
})