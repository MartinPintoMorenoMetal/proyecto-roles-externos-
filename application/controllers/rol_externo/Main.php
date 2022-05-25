<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("rol_externo_model");
	}


	public function index()
	{   
		$data = array("data" => $this->rol_externo_model->getRolExternos());
		//print_r($data);

		$this->load->view('rol_externo/Main',$data );

	}

	public function delete($id)
	{   
		$result =  $this->rol_externo_model->delete($id);
		if($result["cod"] == 0){

			$this->session->set_flashdata('success', $result["mensaje"] );
			redirect(base_url()."rol_externos");
		}else{

			$this->session->set_flashdata('success', $result["mensaje"] );
			redirect(base_url()."rol_externos");

		}

	}
}

