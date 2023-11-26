window.addEventListener('DOMContentLoaded', function() {

	// Функция отправки формы fetch
	async function postData(url= '', data = {}) {
		const response = await fetch(url, {
			method: "POST",
			body: data
		});
		return await response.json();
	}
	
	// отправка
	let form = document.getElementById('form'), // переменная с формой
	// при отправке формы любым способом
		checkbox = document.getElementById('checkbox'); //переменная чекбокс для принятия политики конфиденциальности
		

	//проверка, что нажата галочка на политике конфиденциальности
		if (checkbox.checked) {
			form.addEventListener('submit', function (event) {
				// запрещаем стандартное действие
				event.preventDefault();
				// создаем объект FormData
				let data = new FormData(form);
				console.log([data]);
				// передаем в фукцию fetch данные и получаем результат
				postData('send.php', data).then((data) => {
					let result = document.getElementById('result');
					// обработка ответа от сервера
					if (data.error == '') {
							// Очищаем поля формы и выводим пользователю сообщение обуспешной отправке
							event.target.reset();
							result.style.color = '#F7F6F6';
							result.textContent = "Ваше сообщение успешно отправлено";
					} else {
						result.style.color = 'red';
						result.textContent = "При отправке формы произошла ошибка";
					}
				})
			});

		} else {
			result.style.color = 'red';
			result.textContent = "Необходимо принять Политику конфиденциальности";
		}


	
	});
	
	