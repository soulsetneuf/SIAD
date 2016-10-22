<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function index()
	{
		$ar["direccion"]="San Martin";
		$ar["telefono"]=7584585;
		$this->load->view('welcome_message',$ar);
	}
}
