<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adulto_Mayor extends CI_Controller
{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('adulto_mayor_model');
        $this->load->model('persona_model');
    }

    public function index()
    {
        $nombre_campos_tabla = array("persona_ci", "persona_nombres", "persona_app_pat", "persona_app_mat");
        $nombre_campos_form = array("CI", "Nombres", "Apellido Paterno", "Apellido Materno");
        $enlaces = array("0" =>  array("nombre enlace" => "Registrar Adulto Mayor", "direccion" => base_url()."adulto_mayor/registrar/",), "1" => array("nombre enlace" => "Actualizar", "direccion" => "actulizar.php",), "2" => array("nombre enlace" => "Eliminar", "direccion" => "Eliminar.php",));
        $datos["persona"] = $this->persona_model->get_personas();
        $datos["enlaces"] = $enlaces;
        $datos["nombre_campos_tabla"]=$nombre_campos_tabla;
        $datos["nombre_campos_form"]=$nombre_campos_form;

        $this->load->view('/plantilla/head', $datos);
        $this->load->view('/plantilla/header', $datos);
        $this->load->view('/plantilla/slider', $datos);
        $this->load->view('/plantilla/dash_board_menu', $datos);
        $this->load->view('/adulto_mayor/show');
        $this->load->view('/plantilla/footer', $datos);
    }

    public function buscar()
    {
        $ci = $this->input->post('ci');
        $data["persona"] = $this->adulto_mayor_model->buscar($ci);
        $this->load->view('/adulto_mayor/buscar', $data);
    }
    public function registrar($id)
    {
        $datos['persona']=$this->persona_model->get_persona_id($id);
        $this->load->view('/plantilla/head');
        $this->load->view('/plantilla/header');
        $this->load->view('/plantilla/slider');
        $this->load->view('/plantilla/dash_board_menu');
        $this->load->view('/adulto_mayor/registrar',$datos);
        $this->load->view('/plantilla/footer');

    }

    public function registrar_ingreso()
    {
        $ar["persona"] = $this->persona_model->get_personas();
        $cabecera = array("nombre", "apellido_p");
        $ar["cabecera"] = "ssss";
        $this->load->view('/plantilla/head', $ar);
        $this->load->view('/plantilla/header', $ar);
        $this->load->view('/plantilla/slider', $ar);
        $this->load->view('/plantilla/dash_board_menu', $ar);
        $this->load->view('/persona/show', $cabecera);
        $this->load->view('/plantilla/footer', $ar);
    }
}
