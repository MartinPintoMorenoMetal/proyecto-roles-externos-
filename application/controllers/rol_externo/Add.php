<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("rol_externo_model");
	}

	public function index()
	{   
	
		$this->load->view('rol_externo/Add');
	}

	public function save()
	{   
		/*  
		SELECT permisos.fn_insert_rol_externo(:id_cliente_p,:id_subcliente_p,:id_pais_p,:id_rol_externo_p,:cod_rol_externo_p,:nom_rol_externo_p,:gls_rol_externo_p,:usu_created_p);
		SELECT permisos.fn_insert_rol_externo(14,14,1,4,'PRUEBA4','COD4','GLOSA4',1);*/
		$cod_rol_externo = $this->input->post("codRolExterno");
		$nomRolExterno = $this->input->post("nomRolExterno");
		$glRolExterno = $this->input->post("glRolExterno");

		$data = array(
			"cod_rol_externo"=>$cod_rol_externo,
			"nomRolExterno"=>$nomRolExterno,
			"glRolExterno"=>$glRolExterno,
			"activo"=> 1

		);

		$result =  $this->rol_externo_model->save($data);

		
		if($result["cod"] == 0){

			$this->session->set_flashdata('success', $result["mensaje"] );
			redirect(base_url()."rol_externo");
		}else{


			$this->session->set_flashdata('success', $result["mensaje"] );
			$this->load->view('rol_externo/Add'); 

		}
	
	}


}
