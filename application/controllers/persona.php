<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona extends CI_Controller {
	public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->model('persona_model');
        }
	public function index()
	{
		$cabecera =array("ci","nombre","apellido_p","apellido_m");
		$opciones =array("Registrar Adulto Mayor");
		$enlaces =array(
			"0"=>array(
				"nombre enlace"=>"Actualizar",
				"direccion"=>"actulizar.php",
			),
			"1"=>array(
				"nombre enlace"=>"Eliminar",
				"direccion"=>"Eliminar.php",
			)
		);
		$datos["persona"]=$this->persona_model->get_personas();
		$datos["cabecera"]=$cabecera;
		$datos["opciones"]=$opciones;
		$datos["enlaces"]=$enlaces;

		$this->load->view('/plantilla/head',$datos);
		$this->load->view('/plantilla/header',$datos);
		$this->load->view('/plantilla/slider',$datos);
		$this->load->view('/plantilla/dash_board_menu',$datos);
		$this->load->view('/persona/show',$datos);
		$this->load->view('/plantilla/footer',$datos);
	}
	public function show()
	{
		$this->load->view('persona/show');
	}
	public function reporte()
	{
		$ar["persona"]=$this->persona_model->get_personas();

		$this->load->view('/plantilla/head');
		$this->load->view('/plantilla/header');
		$this->load->view('/plantilla/slider');
		$this->load->view('/plantilla/dash_board_menu');
		$this->load->view('/plantilla/footer');
		$this->load->view('/persona/reporte',$ar);
	}
	public function nuevo()
	{
		echo "Controlador";
		$this->load->view('/persona/nuevo');
		$tabla="persona";
		$filtros=array(
			"nombres"=>$this->input->post('nombre'),
			"apellido_p"=>$this->input->post('apellido_p'),
			);
		$this->load->library('base');
		$this->base->insertar_no_repetidos($tabla,$this,$filtros);
	}
}