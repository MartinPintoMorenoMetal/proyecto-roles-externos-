<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comun_model  extends CI_Model {

    public function all_tipos_equipos(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from tipos_equipos");
        return $data->result();
        // 0 exito 
       
    }

    public function all_tipos_movimientos(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from tipos_movimientos");
        return $data->result();
        // 0 exito 
       
    }

    public function all_perfiles_externos(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("SELECT * FROM perfil_externo ");
        return $data->result();
       
    }

    public function all_rol_externo(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from rol_externo");
        return $data->result();
       
    }

    public function all_estatus_usuario(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from estatus_usuario");
        return $data->result();
       
    }

    public function all_empresa_externa(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select * from empresa_externa");
        return $data->result();
       
    }

    public function all_usuarios_externos(){

        //$data = $this->db->query("SELECT planificacion.fn_listar_tipos_equipos(14,14,1,1,null);");
        $data = $this->db->query("select  * ,usex.email as email from usuarios_externos usex 
        left join perfil_externo perex on ( perex.sec_perfil_externo = usex.id_perfil_externo)
        left join rol_externo rolex on ( rolex.sec_rol_externo = usex.id_rol_externo)
        left join empresa_externa empext on ( empext.id_transportista = usex.id_empresa_externa)
        left join estatus_usuario estatus_usuario on ( estatus_usuario.id_status = usex.status_usuario)
        ");
        return $data->result();
        // 0 exito 
       
    }
   
}
?>

