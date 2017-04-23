function toReg(){
	// Считываем значения из полей
	var login = $('#login').val();
	var password = $('#password').val();
	var confPassword = $('#confPassword').val();
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	
	//Проверям подтверждение пароля
	if (password == confPassword){
		// Еcли пароли совпадают - пишем в БД
		alert('Ok');
		$.ajax({
			async: false,			
			type: "POST",
			url: "reg.php",
			dataType:"text",
			data: 'login=' + login + '&password=' + password + '&name=' + name + '&phone=' + phone + '&email=' + email,
			error: function () {	
				alert( "Не смог" );
			},
			success: function (response) {
				// Если запись прошла успешно - сообщаем пользователю и очищаем форму
				alert('regged ' + login);
				$('#login').val('');
				$('#password').val('');
				$('#confPassword').val('');
				$('#name').val('');
				$('#email').val('');
				$('#phone').val('');
			}
		});
	}
	else{
		// Если пароли не совпадают - выводим ошибку
		alert(' Ну тупые! ');
	}
}