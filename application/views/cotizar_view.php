<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\stiloscotizar.css');?>">	
</head>
<body>
<main class="content">

		<div class="contentcotizar">
			<div id="imgcoti">
				<img src="<?php echo base_url('assets\img\cotizar\imgcotizar.png');?>" id="imgcotijpg">
			</div>
			<div id="textologo">
				<div class="centrar">
					<div class="centrar1">
						<div id="centrar" class="centrartext  w3-container w3-center w3-animate-left">
							<span class="far fa-calendar-alt calen"></span>
						</div>
						<div id="cotitext" class="w3-container w3-center w3-animate-right">
							<h2 class="centrartext"><b>PROGRAMA TU MUDANZA</b></h2>
						</div>
					</div>
				</div>  
			</div>
		</div>              
		<div id="contenedorcontac" class="w3-animate-bottom">
			<div id="contactform">
				<div id="alinarform">
					<div class="container">
						<form name="myForm" action="<?php echo base_url('cotizar/enviar');?>" onsubmit="return validateForm()" method="POST">
							<label for="fname">Nombre o Empresa</label>
							<input type="text" id="fname" name="firstname" placeholder="Su Nombre.." required>

							<label for="email">Correo</label>
							<input type="email" id="email" name="email" placeholder="Su correo.." required>
							
							<label for="phone">Teléfono</label>
							<input type="tel" id="phone" name="phone" placeholder="Su celular.." required>

							<label for="tipodemudanza">Tipo de Mudanza</label>
							<select id="tipodemudanza" name="tipodemudanza">
								<option value="Hogar">Hogar</option>
								<option value="Oficina">Oficina</option>
							</select>

							<label for="origen">Ciudad de Origen</label>
							<input type="text" id="origen" name="origen" placeholder="Ciudad de Origen.." required>

							<label for="destino">Ciudad de Destino</label>
							<input type="text" id="destino" name="destino" placeholder="Ciudad de Destino.." required	>

							<label for="fecha">Fecha de Mudanza:</label>
							<input type="date" id="fecha" name="fecha">

							<label for="subject">Haga una breve descripcion de su Mudanza:</label>
							<textarea id="subject" name="subject" placeholder="Describa su mudanza.."
								style="height:100px" required></textarea>

							<input type="submit" value="Enviar" onclick="confirmaciomsn()" >
						</form>
					</div>
				</div>
			</div>
			<div id="datoscontact">
				<div id="alinerardatos">
					<div id="contenedorcontact">
						<h3><b>CONTÁCTANOS</h3></b><br>
						<p><span class="fas fa-phone-alt"></span> (313)8554564</p>
						<p><span class="fab fa-whatsapp whatps"></span> (316)5763565</p>
						<p><span class="fas fa-envelope-open-text"></span> casamudanza@hotmail.com</p><br>
						<h3 style="color: #ff6666;"><b>Horarios:</b></h3>
						<p><span class="far fa-calendar-check"></span> Lunes a Domingo</p><br>
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-whatsapp-square"></i>
					</div>
				</div>

			</div>
		</div>

	</main>
   
    </body>
    <script>
		function validateForm() {
			var x = document.forms["myForm"]["firstname"].value;
			if (x == "") {
				alert("Debe llenar el Nombre");
				return false;
			}

			var e = document.forms["myForm"]["email"].value;
			if ( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
				alert("Agregue un correo");
				return false;
			}
			var y = document.forms["myForm"]["phone"].value;
			if( isNaN(y) )  {
				alert("Debe llenar el Número de Telefono");
				return false;
			}
			var z = document.forms["myForm"]["origen"].value;
			if (z == "") {
				alert("Debe agregar la ciudad de origen de la mudanza");
				return false;
			}
			var d = document.forms["myForm"]["destino"].value;
			if (d == "") {
				alert("Debe agregar una ciudad de destino de la mudanza");
				return false;
			}
			var f = document.forms["myForm"]["fecha"].value;
			if (f == "") {
				alert("Selecione una fecha para su mudanza");
				return false;
			}
			var m = document.forms["myForm"]["subject"].value;
			if (m == "") {
				alert("Agregue una descripcion de su mudanza");
				return false;
			}
		}
	</script>

<script>
	function confirmaciomsn() {
	alert("Formulario Enviado Correctamente");
	}
</script>

</html>