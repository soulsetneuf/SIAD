<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adulto_mayor_model extends CI_Model {
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                //Cargar base de datos
                $this->load->database();
        }
        public function buscar($ci)
        {
                $this->db->select('*');
                $this->db->from('persona');
                $this->db->join('adulto_mayor', 'persona.id = adulto_mayor.id_persona');
                $this->db->where('ci',$ci);
                $query = $this->db->get();
                return $query;
        }
}
?>