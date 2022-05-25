<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cogua - Food - El Orillo</title>

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
				<iframe src="/src/img/restaurantes/el-orillo/menu.pdf" frameborder="0" id="pdf-content"></iframe>
				<div id="btn-cerrar-popup">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
					</svg>
				</div>
			</div>

			<div class="pi">
				<h4>
					EL ORILLO
				</h4>

				<div id="carousel-container">
					<div class="scc">
						<div class="owl-carousel owl-theme" id="producto-carousel">
							<div class="item-producto">
								<img class="" src="/src/img/restaurantes/el-orillo/img-1.jpg" alt="">
							</div>
							<div class="item-producto">
								<img class="" src="/src/img/restaurantes/el-orillo/img-2.jfif" alt="">
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
					<h3>El Orillo</h3>
					<span>Hamburguesas, pechugas, pescados, carnes, costillas, lasagnas</span>
					<div id="pdi-btn-c">

						<button id="ver-pdf">Ver Menú</button>
					</div>
					<p>
						Teléfono. <a href="tel:0318511143">8511143</a><br>

						Celular: <a href="tel:+573222371275">322 237 1275</a> <br>

						Correo: <a href="mailto:elorillo@gmail.com">elorillo@gmail.com</a>
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