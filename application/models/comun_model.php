<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comun_model  extends CI_Model {

    public function all_tipos_equipos(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from tipos_equipos");
        return $data->result();
        // 0 exito 
       
    }
   
}
?>