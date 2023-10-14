'use strict';

const form = document.forms["form"]; // считываем форму
const formArr = Array.from(form); // формируем массив из элементов формы
const validFormArr = []; // в этом массиве хранятся поля, которые нужно проверить
const button = form.elements["button"]; // считываем кнопку