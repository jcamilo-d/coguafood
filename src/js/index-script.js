var s_p = $("#sp-cb");

$.getJSON('/src/js/productos.json', function (json_data) {
	$('#sp-cb').append(json_data["todos"]);

	s_p.children().sort(function () {
		return Math.round(Math.random()) - 0.5
	}).each(function () {
		$(this).appendTo(s_p);
	});
	console.log(json_data);
});

$('.btn-cerrar-popup').click(function () {
	event.preventDefault();
	$('.popup').removeClass("active");
});

$('#sec-ini').click(function (event) {
	event.preventDefault();
	$("html, body").animate({
		scrollTop: $('#s-b').offset().top - 65
	}, 800);
});

$('#sec-cat').click(function (event) {
	event.preventDefault();
	$("html, body").animate({
		scrollTop: $('#s-c').offset().top - 65
	}, 800);
});

$('#sec-prod').click(function (event) {
	event.preventDefault();
	$("html, body").animate({
		scrollTop: $('#sp-cb').offset().top - 65
	}, 800);
});

$('#sec-com, #btn-c-c').click(function (event) {
	event.preventDefault();
	$("html, body").animate({
		scrollTop: $('#s-c-c').offset().top - 65
	}, 800);
});

$('#cat-todo').click(function (event) {
	event.preventDefault();

	$("html, body").animate({
		scrollTop: $('#s-p').offset().top - 75
	}, 800);

	$.getJSON('/src/js/productos.json', function (json_data) {
		$('#sp-cb').html(json_data["todos"]);

		s_p.children().sort(function () {
			return Math.round(Math.random()) - 0.5
		}).each(function () {
			$(this).appendTo(s_p);
		});
	});
});

$('#cat-res').click(function (event) {
	event.preventDefault();

	$("html, body").animate({
		scrollTop: $('#s-p').offset().top - 75
	}, 800);

	$.getJSON('/src/js/productos.json', function (json_data) {
		$('#sp-cb').html(json_data["restaurante"]);

		s_p.children().sort(function () {
			return Math.round(Math.random()) - 0.5
		}).each(function () {
			$(this).appendTo(s_p);
		});
	});
});

$('#cat-bar').click(function (event) {
	event.preventDefault();

	$("html, body").animate({
		scrollTop: $('#s-p').offset().top - 75
	}, 800);

	$.getJSON('/src/js/productos.json', function (json_data) {
		$('#sp-cb').html(json_data["bares"]);

		s_p.children().sort(function () {
			return Math.round(Math.random()) - 0.5
		}).each(function () {
			$(this).appendTo(s_p);
		});
	});
});

$('#cat-rap').click(function (event) {
	event.preventDefault();

	$("html, body").animate({
		scrollTop: $('#s-p').offset().top - 75
	}, 800);

	$.getJSON('/src/js/productos.json', function (json_data) {
		$('#sp-cb').html(json_data["rapidas"]);

		s_p.children().sort(function () {
			return Math.round(Math.random()) - 0.5
		}).each(function () {
			$(this).appendTo(s_p);
		});
	});
});