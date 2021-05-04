<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hogar extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('hogar_view');
		$this->load->view('footer');
	}
}
