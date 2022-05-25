$(document).ready(function () {
	$('#menu-btn').click(function (e) {
		e.preventDefault();

		$('header').toggleClass("extended");
	});

	window.addEventListener('scroll', function () {
		if (window.scrollY > 100) {
			$("header").addClass("active")
		} else {
			$("header").removeClass("active")
		}
	});

	$('.btn-cerrar-popup').click(function (event) {
		event.preventDefault();
		$('.popup').removeClass("active");
	});

	$('#btn-login').click(function (event) {
		event.preventDefault();
		$('#login-popup').addClass("active");
	});

	$('#btn-login, #btn-login-log').click(function (event) {
		event.preventDefault();
		$('.popup').removeClass("active");
		$('#login-popup').addClass("active");
	});

	$('#btn-reg-log').click(function (event) {
		event.preventDefault();
		$('.popup').removeClass("active");
		$('#register-popup').addClass("active");
	});
});