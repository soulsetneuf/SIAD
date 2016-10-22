<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona_model extends CI_Model {
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                //Cargar base de datos
                $this->load->database();
        }
        public function get_personas()
        {
                $query=$this->db->query('select * from persona;');
                return $query;
        }
        public function get_persona_id($id)
        {
                $this->db->from('persona');
                $this->db->where('persona_id',$id);
                $query = $this->db->get();
                return $query;
        }
        public function insertar($data)
        {
                $this->db->insert('persona',$data);
        }
}
?>