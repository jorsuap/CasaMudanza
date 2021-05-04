<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,500;1,700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://kit.fontawesome.com/b1e466da68.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleindex.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/graficos.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/carrusel.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\stiloshome.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stilosoffice.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stiloscotizar.css');?>">	
	<link rel="shortcut icon" href="assets\img\Logo a color con texto PNG.png">
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url('assets\css\fonts.css');?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	

	<title> Casa Mudanza </title>
</head>
	<header>
		<div class="contnum1">
			<div class="contnum2">
				<p id="llamanosp">Llámenos! <span>&#160;&#160;</span></p>
			</div>
			<div class="contnum3">
				<p>
					<a href="tel:3138554568" target="_blank"><img src="<?php echo base_url('assets\img\llamada.png'); ?>" alt="call" width="26"
							height="25" class="logotel"> &#160;313-8554568</a>
				</p>
			</div>
		</div>
	
		
	<div id="continernav">

		<div class="logo">
			<a href="http://www.casamudanza.com/" target="_blank"><img src="<?php echo base_url('assets/img/Logo a color sin texto PNG.png'); ?>"
					id="logo" alt="logo" target="_blank"></a>
		</div>
		<div id="contenmenuicon">
			<span id="MenuIcon" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
		</div>
		<div id="topnav">
			<div class="topnav menu" data-animation="center">
				<a href="<?php echo base_url('home');?>"  id="home">Home</a>
				<a href="<?php echo base_url('hogar');?>" id="hogar">Hogar</a>
				<a href="<?php echo base_url('oficina');?>" id="oficina">Oficina</a>
				<a href="<?php echo base_url('cotizar');?>" id="cotizar">Cotizar</a>
				<!-- <button id="buscar" type="submit"><i class="fa fa-search"></i></button>
				<input id="searchBar" type="text" placeholder="Buscar"> -->
			</div>
		</div>

		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
			<a href="<?php echo base_url('home');?>" class="">Home</a>
				<a href="<?php echo base_url('hogar');?>">Hogar</a>
				<a href="<?php echo base_url('oficina');?>">Oficina</a>
				<a href="<?php echo base_url('cotizar');?>">Cotizar</a>
			</div>
		</div>

	</div>
	</header>

	<div class="social">
		<ul>
			<li><a href="https://www.facebook.com/casamudanzas" target="_blank" class="icon-facebook"></a></li>
			<li><a href="https://www.instagram.com/casamudanzas/" target="_blank" class="icon-instagram"></a></li>
			<li><a href="https://www.facebook.com/casamudanzas/inbox" target="_blank" class="icon-messenger"></a></li>
			<li><a href="mailto:casamudanza@hotmail.com" class="icon-mail2"></a></li>
		</ul>
	</div>

	<a href="https://api.whatsapp.com/send?phone=+573138554568&text=Hola%21%20Quisiera%20mudarme." class="float"
		target="_blank">
		<i class="fa fa-whatsapp my-float"></i>
		<p id="mensajewhat"><b> Hola!</b> Pudemos ayudarte?</p>
	</a>

	<script>
		function openNav() {
			document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.height = "0%";
		}
	</script>
	<script>
		window.onscroll = function () {
			myFunction()
		};

		var navbar = document.getElementById("continernav");
		var sticky = navbar.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")
			} else {
				navbar.classList.remove("sticky");
			}
		}
	</script>
</html>