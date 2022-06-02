<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rol_externo_model  extends CI_Model {

	public function getRolExternos(){
        //cambiarlo por la funcion 
        $this->db->select("*");
        $this->db->from("rol_externo");
        $results=$this->db->get();
        return $results->result();
       
    }

    public function getRolExterno($id){

        $this->db->select("r.*");
        $this->db->from("rol_externo r");
        $this->db->where("r.sec_rol_externo",$id);
        $results=$this->db->get();
        return $results->row();
       
    }
    

   
    public function save($data){

        //$result = $this->db->query("SELECT permisos.fn_insert_rol_externo(14,14,1,4",$data,");");
        //DATA de prueba! para retornar la respuesta de la funcion que debe entregar. 
        $result = array(
			"cod"=> 0,
			"mensaje"=> "Registro insertado"
		);
        return $result;
        // 0 exito 

    }

    public function update($data){

        //$result = $this->db->query("SELECT permisos.fn_update_rol_externo(2,14,14,1,$data);");
        //DATA de prueba! para retornar la respuesta de la funcion que debe entregar. 
        $result = array(
            "cod"=> 0,
			"mensaje"=> "Registro editado"
		);
        return $result;
        // 0 exito 

    }

    public function delete($data){

        //$result = $this->db->query("SELECT permisos.fn_desactivar_rol_externo(3,14,14,1,"$data");");
        //DATA de prueba! para retornar la respuesta de la funcion que debe entregar. 
        $result = array(
            "cod"=> 0,
			"mensaje"=> "Registro eliminado"
		);
        return $result;
        // 0 exito 

    }


    


   
}