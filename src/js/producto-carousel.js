$(document).ready(function () {
	var producto_carousel = $("#producto-carousel");

	producto_carousel.owlCarousel({
		margin: 0,
		nav: false,
		loop: true,
		dots: false,
		mouseDrag: false,
		touchDrag: false,
		autoplay: true,
		center: true,
		responsive: {
			0: {
				items: 1
			},
			992: {
				items: 1
			}
		}
	});

	$('#bnn-izq').click(function () {
		producto_carousel.trigger('prev.owl.carousel', [500]);
	});

	$('#bnn-der').click(function () {
		producto_carousel.trigger('next.owl.carousel', [500]);
	});

	$('#ver-pdf').click(function(){
		$('#pdf-popup').addClass('active')
	});

	$('#pdf-popup').click(function(){
		$('#pdf-popup').removeClass('active')
	});

	$('#comprar').click(function(){
		$('#comprar-popup').addClass('active')
	});

	$('#btn-cerrar-popup-c').click(function(){
		$('#comprar-popup').removeClass('active')
		reiniciarForm();
	});

	$("#btn-enviar-m").click(function (event) {
		event.preventDefault();
		enviarMsj();
	});
});

function enviarMsj () {

	var g_token = null;

	grecaptcha.execute("6LcgmfAUAAAAAL0QqfeCLNr3nMyu75RUb0leHKQS", { action: "homepage" }).then(function (token) {
		g_token = token;
	});

	var msj = $("#mensaje").val();
	var email_contacto = $("#btn-enviar-m").attr("data-email");
	

	if (msj == "") {
		$("#mensaje").notify("Has tu pedido", "error", {
			position: "top right"
		});
	} else {
		var dataSend = {
			solicitud: "enviarMsj",
			msj,
			email_contacto
		};

		$.ajax({
			url: "../../controller/tienda-virtual-controller.php",
			data: dataSend,
			method: "POST",
			dataType: "JSON",
			cache: false
		})
			.done(function (sResponse) {
				if (sResponse[ "respuesta" ] == "ok") {
					if (sResponse[ "mensaje" ] != "grecaptcha-error") {
						swal({
							title: sResponse[ "content" ][ "title" ],
							text: sResponse[ "content" ][ "text" ],
							icon: "success"
						}).then(() => {
							reiniciarForm();
						});
					}
				} else {
					swal(
						"Error: " + sResponse[ "content" ][ "title" ],
						sResponse[ "content" ][ "text" ],
						"error"
					);
				}
			})
			.always(function () {
				reiniciarForm();
			});
	}
}

function reiniciarForm () {
	$("#mensaje").val("");
}
