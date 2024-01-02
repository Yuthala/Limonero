window.addEventListener('DOMContentLoaded', function() { 

'use strict';

	/*ПЕРЕМЕННЫЕ*/
	//переменные для калькулятора
	let itemSelector = document.getElementById('select'), //выбор пользователя в поле "Выберите изделие"
	consumptionCalc = 0, //переменная для хранения значения расхода пряжи
	consumtionInput = document.getElementById('consumption'),//поле для вывода расхода пряжи
	priceCalc = 0, //переменная для хранения результатов подсчета стоимости изделия
	priceInput = document.getElementById('price');//поле для вывода результата расчета стоимости изделия

	/*исполняемый код*/
	console.log(`переменная itemSelector ${itemSelector}`);

	consumtionInput.innerHTML = itemSelector[0].value;
	priceCalc = (itemSelector[0].value) * 2;
	priceInput.innerHTML = priceCalc;

	/*EVENT LISTENERS*/

})