<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cogua - Food - Cana</title>

	<link rel="stylesheet" href="/src/css/producto-detalle.min.css">
	<!-- <link rel="stylesheet" href="/src/libs/wow/animate.css"> -->
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.theme.default.min.css">
</head>

<body>
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/src/commons/header.php"; ?>

	<main>
		<section class="s-pdc">
			<div id="pdf-popup">
				<iframe src="/src/img/restaurantes/del-rancho/menu.pdf" frameborder="0" id="pdf-content"></iframe>
				<div id="btn-cerrar-popup">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
					</svg>
				</div>
			</div>

			<div id="comprar-popup">
				<div id="c-comprar">
					<div id="content-c">
						<h3>Local 203 Comidas</h3>

						<div id="con-l">
							<a href="tel:+5732223712753">
								<span>
									<svg style="width:50px;height:50px" viewBox="0 0 24 24">
										<path fill="#FD5518" d="M17.25,18H6.75V4H17.25M14,21H10V20H14M16,1H8A3,3 0 0,0 5,4V20A3,3 0 0,0 8,23H16A3,3 0 0,0 19,20V4A3,3 0 0,0 16,1Z" />
									</svg>
								</span>
								322 237 1275
							</a>

							<a href="https://wa.me/573222371275?text=Realiza tu pedido:" target="_blank">
								<span>
									<svg style="width:50px;height:50px" viewBox="0 0 24 24">
										<path fill="#06D755" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
									</svg>
								</span>
								322 237 1275
							</a>

							<textarea id="mensaje" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea>

							<div id="c-btn">
								<a href="#" id="btn-enviar-m" data-email="publicidadharbin@gmail.com">Enviar</a>
							</div>
						</div>
					</div>

					<div id="btn-cerrar-popup-c">
						<svg style="width:50px;height:50px" viewBox="0 0 24 24">
							<path fill="#FD5518" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
						</svg>
					</div>
				</div>
			</div>

			<div class="pi">
				<h4>
					CANA
				</h4>

				<div id="carousel-container">
					<div class="scc">
						<div class="owl-carousel owl-theme" id="producto-carousel">
							<div class="item-producto">
								<img class="" src="/src/img/gastronomia/img-1.jfif" alt="">
							</div>
							<div class="item-producto">
								<img class="" src="/src/img/gastronomia/img-2.jfif" alt="">
							</div>
							<div class="item-producto">
								<img class="" src="/src/img/gastronomia/img-3.jfif" alt="">
							</div>

						</div>

						<div class="bnn" id="bnn-izq">
							<svg style="width:50px;height:50px" viewBox="0 0 24 24">
								<path fill="#FFCE00" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
							</svg>
						</div>

						<div class="bnn" id="bnn-der">
							<svg style="width:50px;height:50px" viewBox="0 0 24 24">
								<path fill="#FFCE00" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>

			<div class="pd">
				<div id="pd-info">
					<h3>Cana</h3>
					<span>Hamburguesas, wraps, pechugas, pescados, carnes, costillas, lasagnas, malteadas</span>
					<div id="pdi-btn-c">

						<button id="ver-pdf">Ver Menú</button>
					</div>
					<p>
						Teléfono. <a href="tel:0318511143">8511143</a><br>

						Celular: <a href="tel:+573222371275">322 237 1275</a> <br>

						Correo: <a href="mailto:publicidadharbin@gmail.com">publicidadharbin@gmail.com</a>
					</p>
				</div>
			</div>
		</section>
	</main>

	<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/src/commons/footer.php"; ?>

	<!-- Scripts -->
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/src/js/commons-script.html"; ?>
	<script src="/src/js/general-script.js"></script>
	<script src="/src/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="/src/js/producto-carousel.js"></script>
	<!-- <script>
		new WOW().init();
	</script> -->
</body>

</html>