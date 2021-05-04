
<body>
<main class="content">
		<div class="contetinfoHogar">
			<div id="hogar1">
				<div>
					<h1>
						¿Te mudas de casa?<br>
						<b>Nosotros lo hacemos por ti</b>
					</h1>
					<h4>
						Confía en el cuidado y protección que ofrece nuestro personal.
					</h4>
				</div>
			</div>
			<div id="hogar2" style="display: flexbox;">
				<div style="position: absolute;" id="contetntfondo">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/fungohogar.png');?>" id="fondogohar">
				</div>

				<div style="position: absolute;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/Cajones.png');?>" id="cajones">
				</div>
				
				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/Lampara.png');?>" id="lampara">
				</div>
				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/Cajas.png');?>" id="cajas">
				</div>
				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/LaparaMini.png');?>" id="lamparamini">
				</div>
				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/mama.png');?>"id="mama">
				</div>
				<div style="position: absolute;display: flexbox;">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/Papa.png');?>"id="dad">
				</div>
			</div>
			<div id="hogar3">
					<img src="<?php echo base_url('assets/img/ImagenesHogar/mudanzahogar.png');?>"id="mudanzahogar">
			</div>
		</div>
		<div id="servicioshogar">
			<div id="servicios1">
				<div class="centrar">
					<h3 >NUESTROS SERVICIOS</h3>
				</div>
				<div class="centrar">
					<ul>
						<li><span class="fas fa-check-circle"></span> Camion Furgon Cerrado</li>
						<li><span class="fas fa-check-circle"></span> Cobijas Industriales para Proteger los Enceres</li>
						<li><span class="fas fa-check-circle"></span> Carge y Descarge</li>
						<li><span class="fas fa-check-circle"></span> Personal Capacitado</li>
						<li><span class="fas fa-check-circle"></span> Empaque Especalizado</li>
					</ul>
				</div>
			</div>
			<div class="container_hogar">
				<p class="animated-word_hogar">¿Hora de Irnos?</p>
			</div>
			<div id="servicios2">
				<div id="servicios3">
					<button id="agenda" class="btn fifth" onclick="location.href='cotizar.html'">Hagendar</button>
				</div>
				<div id="servicios4">
					<button id="whatsap" class="btn six" onclick="location.href='https://api.whatsapp.com/send?phone=+573138554568&text=Hola%21%20Quisiera%20mudarme.'">Contactar</button>
				</div>
			</div>
		</div>
		
	</main>
</body>
<script>
	window.onload = function active();

	function active(){
		document.getElementsByTagName('hogar')[0].className += 'active';
	} 
</script>


