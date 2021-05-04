<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
</head>
<body>
<main class="content">
		<div class="contentoffice">
			<div id="office1">
				<div>
					<h1>
						¿Te mudas de Oficina?<br>
						<b>Te brindamos la mejor solución</b>
					</h1>
					<h4>
						Múdate con la seguridad de nuestro personal capacitado para trasladar con cajas a medida para
						equipos de oficina según áreas.
					</h4>
				</div>
			</div>
			<div id="office2" style="display: flexbox;">
				<div style="position: absolute;" id="contetntfondo">
					<img src="<?php echo base_url('assets/img/imgsofffice/office.png');?>" id="fondooffice">
				</div>

				<div style="position: absolute;">
					<img src="<?php echo base_url('assets/img/imgsofffice/twomen.png');?>" id="twomen">
				</div>

				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/imgsofffice/onemen.png');?>" id="onemen">
				</div>
			</div>
			<div id="office3">
				<img src="<?php echo base_url('assets/img/imgsofffice/officemoving.png');?>" id="mudanzaoffice">
			</div>
		</div>


		<div id="serviciosoffice">
			<div id="servicios1">
				<div class="centrar">
					<h3>NUESTROS SERVICIOS</h3>
				</div>
				<div class="centrar">
					<ul>
						<li><span class="fas fa-check-circle"></span> Camion Furgon Cerrado</li>
						<li><span class="fas fa-check-circle"></span> Cobijas Industriales para Proteger los Enceres
						</li>
						<li><span class="fas fa-check-circle"></span> Carge y Descarge</li>
						<li><span class="fas fa-check-circle"></span> Personal Capacitado</li>
						<li><span class="fas fa-check-circle"></span> Empaque Especalizado</li>
					</ul>
				</div>
			</div>
			<div class="container_office">
				<p class="animated-word_office">¿Hora de Irnos?</p>
			</div>
			<div id="servicios2">
				<div id="servicios3">
					<button id="agenda" class="btn fifth" onclick="location.href='cotizar'">Hagendar</button>
				</div>
				<div id="servicios4">
					<button id="whatsap" class="btn six"
						onclick="location.href='https://api.whatsapp.com/send?phone=+573138554568&text=Hola%21%20Quisiera%20mudarme.'">Contactar</button>
				</div>
			</div>
		</div>
	</main>
	</body>
</html>