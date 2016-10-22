<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');

class Base {
   function insertar_no_repetidos($tabla,$controlador,$filtros){
   	   if(!datos_repetidos($tabla,$controlador,$filtros)){
       echo'<script>alert("Error. !alguien ya ah registrado ese código!")</script>';
       }
       else
       	$controlador->db->insert($tabla,$controlador->input->post());
      }
      function datos_repetidos($tabla,$controlador,$filtros)
      {
      	$query = $controlador->db->get_where($tabla,$filtros);
      	if ($query->num_rows() > 0)
      		return true;
      	else
      		return false;
      }
   function buscar_registro($strNombreTabla,$filtro,$valor,$controlador)
   {
        $controlador->db->select('*');
        $controlador->db->from('persona');
        $controlador->db->join('adulto_mayor', 'persona.id = adulto_mayor.id_persona');
        $controlador->db->where('ci',5520295);
        $query = $controlador->db->get();
        return $query;
        //return  $controlador->db->query("select * from persona");
   }
 }
?>