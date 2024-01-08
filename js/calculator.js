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
	function priceCalaculatorDesign () {
			/*переменные*/
		let itemSelector = document.getElementById('select-design'), //выбор пользователя в поле "Выберите изделие"
		pictureFrame = document.getElementById ('design-picture'), //поле для вывода картинки
		priceInput = document.getElementById('design-price'); //поле для вывода результата расчета стоимости изделия

		// const pictures = [

		// ]

		/*исполняемый код*/
		showPrice();

		/*EVENT LISTENERS*/

		/*Функции*/
		function showPrice () {
			priceInput.innerHTML = itemSelector.value;
		}
	}
	
	priceCalaculatorDesign ();
})