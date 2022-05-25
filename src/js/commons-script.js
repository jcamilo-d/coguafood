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
});