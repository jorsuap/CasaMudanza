<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cotizar extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('cotizar_view');
		$this->load->view('footer');
	}

	public function enviar(){
	
		//Llamamos los inputs

		$fname = $_POST['firstname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$tipodemudanza = $_POST['tipodemudanza'];
		$origen = $_POST['origen'];
		$destino = $_POST['destino'];
		$fecha = $_POST['fecha'];
		$subject = $_POST['subject'];

		//Datos para el correo
		$destinatario = "casamudanza@hotmail.com";
		$asunto = "Cotizar Mudanza";

		$correo = "De: $fname \n";
		$correo .= "Correo: $email \n";
		$correo .="Telefono: $phone \n";
		$correo .="Tipo de Mudanza: $tipodemudanza \n";
		$correo .="Ciudad de Origen: $origen \n";
		$correo .="Ciudad de Destino: $destino \n";
		$correo .="Para: $fecha \n";
		$correo .="Mensaje: $subject \n";

		

		mail($destinatario, $asunto, $correo);
			
		

		header('location: ../cotizar' );
	}
}
