<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sistema extends CI_Controller {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('persona_model');
    }
    public function index()
    {
        $datos["cabeceras"]=array(
            "0"=>array(
                "nombre"=>"Nombre",
                "nombre_tabla"=>"nombre",
                "tipo"=>"text",
            ),
            "1"=>array(
                "nombre"=>"Apellido Paterno",
                "nombre_tabla"=>"apellido_p",
                "tipo"=>"text",
            ),
            "2"=>array(
                "nombre"=>"Apellido Materno",
                "nombre_tabla"=>"apellido_m",
                "tipo"=>"text",
            ),
            "3"=>array(
                "nombre"=>"sexo",
                "nombre_tabla"=>"sexo",
                "tipo"=>"text",
            ));
        $titulo="Datos Personales";
        $columnas="class='col-lg-6 connectedSortable ui-sortable'";
        $datos['titulo']=$titulo;
        $datos['columnas']=$columnas;
        $this->load->view('/plantilla/head');
        $this->load->view('/plantilla/header');
        $this->load->view('/plantilla/slider');
        $this->load->view('/plantilla/dash_board_menu');
        $this->load->view('/sistema/generar_formulario',$datos);
        $this->load->view('/plantilla/footer');
    }
}