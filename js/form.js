'use strict';

const form = document.forms["form"]; // считываем форму
const formArr = Array.from(form); // формируем массив из элементов формы
console.log(`значение formArr: ${formArr}`);
const validFormArr = []; // в этом массиве хранятся поля, которые нужно проверить
const button = form.elements["button"]; // считываем кнопку

// statusMessage = document.createElement('div');
// statusMessage.classList.add('status');

// let message = {
// 	//loading: 'Загрузка...',
// 	success: 'Спасибо! Скоро мы с вами свяжемся.',
// 	failure: 'что-то пошло не так...'
// };

formArr.forEach((el) => {
	if (el.hasAttribute("data-reg")) {
	  el.setAttribute("is-valid", "0");
	  validFormArr.push(el);
	}
  });
  
  form.addEventListener("input", inputHandler);
  button.addEventListener("click", buttonHandler);

  function inputHandler({ target }) {
	if (target.hasAttribute("data-reg")) {
	  inputCheck(target);
	}
  }
  
  function inputCheck(el) {
	const inputValue = el.value;
	const inputReg = el.getAttribute("data-reg");
	const reg = new RegExp(inputReg);
	if (reg.test(inputValue)) {
	  el.setAttribute("is-valid", "1");
	  el.style.border = "2px solid rgb(0, 196, 0)";
	} else {
	  el.setAttribute("is-valid", "0");
	  el.style.border = "2px solid rgb(255, 0, 0)";
	}
  }

  // Здесь проверяем, можно ли отправить форму
function formCheck(e) {
	e.preventDefault(); // блокируем input
	//form.appendChild(statusMessage);
	const allValid = []; // создаем массив валидных значений
	validFormArr.forEach((el) => {
	  allValid.push(el.getAttribute("is-valid")); // проверяем каждое поле
	});
	const isAllValid = allValid.reduce((acc, current) => {
	  // проверяем, чтобы все было правильно
	  return acc && current;
	});
	if (!Boolean(Number(isAllValid))) {
	  alert("Заполните поля правильно!"); // если не правильно - сообщение пользователю
	  return;
	}
	formSubmit(); // если правильно - отправляем данные
  }

  async function formSubmit() {
	const data = serializeForm(form); // получаем данные формы
	//request.send(data);
	const response = await sendData(data); // отправляем данные на почту
	if (response.ok) {
	  let result = await response.json(); // если ответ OK отвечает пользователю
	  alert(result.message); // .. что данные отправлены
	  statusMessage.innerHTML = message.success;
	  formReset(); // сбрасываем поля формы
	} else {
	  alert("Код ошибки: " + response.status); // если not OK - показываем код ошибки
	  statusMessage.innerHTML = message.failure;
	}
  }
  
  function serializeForm(form) {
	// формируем данные формы
	return new FormData(form);
  }
  
  async function sendData(data) {
	return await fetch("send_mail.php", {
	  // отправляем в скрипт send_mail.php
	  method: "POST", // методом POST
	  body: data,
	});
  }


  
  function formReset() {
	// сброс полей формы
	form.reset();
	validFormArr.forEach((el) => {
	  el.setAttribute("is-valid", 0);
	  el.style.border = "none";
	});
  }