<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main class="content">
		<div id="svgcasamudanza">
			<svg viewBox="0 0 1200 612">
				<symbol id="s-text">
					<text text-anchor="middle" x="50%" y="35%" class="text--line">
						Casa
					</text>
					<text text-anchor="middle" x="50%" y="68%" class="text--line2">
						Mudanza
					</text>

				</symbol>

				<g class="g-ants">
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
				</g>
			</svg>
		</div>
		<div id="ContinerSlader" class="w3-content" style="max-width:100%">
			<img class="mySlides" src="<?php echo base_url('assets/img/Slider/EjecutivoMudandose.jpg');?>" style="width:100%">
			<img class="mySlides" src="<?php echo base_url('assets/img/Slider/FamiliaSentados.jpg');?>" style="width:100%">
			<img class="mySlides" src="<?php echo base_url('assets/img/Slider/ParejaconLLaves.jpg');?>" style="width:100%">
			<img class="mySlides" src="<?php echo base_url('assets/img/Slider/ParejaSentados.jpg');?>" style="width:100%">
		</div>
		<div id="animacionTextFlip">
			<span>
				<h1 id="wt2">Elige&nbsp; </h1>
			</span>
			<h1 class="written-text" id="wt1"></h1><span>
				<h1 id="wt2"> &nbsp;Mudanza</h1>
			</span>
			<script src="<?php echo base_url('assets/js/writting-machine.js');?>"></script>
			<script src="<?php echo base_url('assets/js/app.js');?>"></script>
			
			
		</div>
		<div id="contentFlip">
			<div id="fliphogar">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<div id="ContentImgFront">
								<img src="<?php echo base_url('assets/img/ImagenesFlip/MudanzaHogar.jpg');?>" alt="Avatar" class="imgfront">
							</div>
							<div id="fondotrans">
								<div class="icon-home" class="iconhijo">
									<h3 class="opcionhorgar">Hogar</h3>
								</div>
							</div>
						</div>
						<div class="flip-card-back">

							<p><b>Confía</b>en el cuidado y protección de nuestro personal
								preparado embalando desde platos y copas, hasta armado y desarmado de
								camas<br></br><button class="button">Mudarme</button></p>

						</div>
					</div>
				</div>
			</div>
			<div id="flipOfice">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<div id="ContentImgFront">
								<img src="<?php echo base_url('assets/img/ImagenesFlip/MudanzaOficina.jpg');?>" alt="Avatar" class="imgfront">
							</div>
							<div id="fondotrans">
								<div class="icon-office" class="iconhijo">
									<h3 class="opcionhorgar">Oficina</h3>
								</div>
							</div>
						</div>
						<div class="flip-card-back">

							<p><b>Múdate con la seguridad que te brindamos</b> con nuestro
								personal de confianza para trasladar cajas para archivos y equipos de
								oficinas.<br></br><button class="button">Mudarme</button></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div id="contenzonaoperacion">
			<div class="infozonaoperacion">
				<div class="centrar">
					<div id="centrar1">
						<div class="centrar">
							<img src="<?php echo base_url('assets/img/RefMap.png');?>" id="refmap" class="centrartext">
						</div>
						<div>
							<h3 class="centrartext" id="formatotitutlozona"> ZONAS DE COBERTURA</h3>
						</div>
						<div>
							<p class="centrartext" id="fotmattexzona">Estas son nuestras zonas de cobertura, <br>para
								saber si tu punto de traslado esta dentro de<br>
								nuestro limite, comunicarte con nosotros.</p>
						</div>
					</div>
				</div>
			</div>
			<div id="mapzonaoperacion">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1FaPsy9MM_Mh48AWy3cTw8cT7FlB6aVjL"
					id="map"></iframe>
			</div>
		</div>
		<!-- https://codepen.io/studiojvla/pen/qVbQqW carrusel de marcas -->

		<!-- LINK DE ANIMACION PARA ELLOS CONFIAN EN NOSOTROS https://codepen.io/JyGProyectosWeb/pen/WvORYN -->
	
		<div class="divclientestext">
			<h3><span>Ellos </span>Confian en Nosotros</h3>
		</div>
		<div id="carrusel">
		<div class="slider">
			<div class="slide-track">
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Batuta.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/ConsValderrama.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Lubesol.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Memoria.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Prosegur.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/RederJas.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Batuta.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/ConsValderrama.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Lubesol.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Memoria.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/Prosegur.png');?>" height="100" width="250"
						alt="" />
				</div>
				<div class="slide">
					<img src="<?php echo base_url('assets/img/Clientes/RederJas.png');?>" height="100" width="250"
						alt="" />
				</div>
				
			</div>
		</div>
	</div>
	</main>
	
</body>
<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {
				myIndex = 1
			}
			x[myIndex - 1].style.display = "block";
			setTimeout(carousel, 3000); // Change image every 2 seconds
		}
	</script>
</html>