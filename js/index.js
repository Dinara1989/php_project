// Анимация для кнопок социальных сетей
$(document).ready(function() {
	$("#slider").slick({
		dots: false,
		prevArrow: '<div class="arrow-prev"><i class="fas fa-arrow-left"></i></div>',
		nextArrow: '<div class="arrow-next"><i class="fas fa-arrow-right"></i></div>',
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 2
	});
});

// Обработчик кнопки регистрации
$('#reg_user').click(function () {
	var email = $('#email').val();
	var login = $('#login').val();
	var pass = $('#pass').val();

	$.ajax({
	  url: 'ajax/reg.php',
	  type: 'POST',
	  cache: false,
	  data: {'email' : email, 'login' : login, 'pass' : pass},
	  dataType: 'html',
	  success: function(data) {
		if(data == 'Готово') {
			document.location.reload(true);
		} else {
		  $('#errorBlock').show();
		  $('#errorBlock').text(data);
		}
	  }
	});
  });

// Обработчик кнопки авторизации
$('#auth_user').click(function () {
	var login = $('#login').val();
	var pass = $('#pass').val();

	$.ajax({
		url: 'ajax/auth.php',
		type: 'POST',
		cache: false,
		data: {'login' : login, 'pass' : pass},
		dataType: 'html',
		success: function(data) {
			if(data == 'Готово') {
				document.location.reload(true);
			} else {
				$('#errorBlock').show();
				$('#errorBlock').text(data);
			}
		}
	});
});


// Обработчик кнопки выхода из Личного кабинета
$('#exit').click(function () {
	$.ajax({
		url: 'ajax/exit.php',
		type: 'POST',
		cache: false,
		data: {},
		dataType: 'html',
		success: function(data) {
			document.location.reload(true);
		}
	});
});

// Работа со ссылками
$('#cut').click(function () {
	var big = $('#big').val();
	var short = $('#short').val();

	$.ajax({
		type: 'POST',
		url: 'ajax/main.php',
		cache: false,
		data: {'big' : big, 'short' : short},
		dataType: 'html',
		success: function(data) {
			if(data == 'Готово') {
				document.location.reload(true);
			} else {
				$('#errorBlock').show();
				$('#errorBlock').text(data);
			}
		}
	});
});

// Удаление блока со ссылками
// 	$("#del").click(function () {
// 	var id = this.id;
// 	// var $currentComment = $(this).parents(".delete");
//
// 	$.ajax({
// 		url: 'ajax/del.php',
// 		type: 'POST',
// 		cache: false,
// 		data: {'id' : id},
// 		dataType: 'html',
// 		success: function(data) {
// 			if(data == 'Готово') {
// 				// $currentComment.remove();
// 				document.location.reload(true);
// 			}
// 		}
// 	});
// });

// Обработчик кнопки отправки почты
$('#mess_send').click(function () {
	var name = $('#name').val();
	var email = $('#email').val();
	var age = $('#age').val();
	var mess = $('#mess').val();

	$.ajax({
		url: 'ajax/mail.php',
		type: 'POST',
		cache: false,
		data: {'name' : name, 'email' : email, 'age' : age, 'mess' : mess},
		dataType: 'html',
		success: function(data) {
			if(data == 'Готово') {
				$('#mess_send').text('Все готово');
				$('#errorBlock').hide();
				$('#name').val("");
				$('#email').val("");
				$('#age').val("");
				$('#mess').val("");
			} else {
				$('#errorBlock').show();
				$('#errorBlock').text(data);
			}
		}
	});
});