<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perfiles_externos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->all_perfiles_externos('permisos.fn_listar_perfil_externo',
		[
			"sec_perfil_externo",
			"cod_perfil_externo",
			"nom_perfil_externo",
			"gls_perfil_externo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		));*/

		$data = array("data" => $this->comun_model->all_perfiles_externos());

	    $this->load->view('amsa/perfiles_externos/list.php', $data);
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

	public function new()
	{   
		
		$this->load->view('amsa/perfiles_externos/form', [
			"id" => "",
			"cod_perfil_externo" => "",
            "nom_perfil_externo" => "",
            "gls_perfil_externo" => "",
		]);

		// Aquí debería mostrarse el formulario para crear un nuevo recurso.
	}

	public function create()
	{   
		
        $cod_perfil_externo = $this->input->post('cod_perfil_externo');
        $nom_perfil_externo = $this->input->post('nom_perfil_externo');
        $gls_perfil_externo = $this->input->post('gls_perfil_externo');


		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_insert_perfil_externo',
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$cod_perfil_externo,
		$des_perfil_externo,
		$gls_perfil_externo,
		$this->id_usuario);*/

		// Esta acción se encargará de almacenar el contenido enviado por el formulario que lleva a esta acción.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no almacenar el recurso.
	}

	public function edit($id)
	{    
		/*$modelo = $this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_select_perfil_externo',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		)[0];
		
		$this->cargarVista('amsa/perfiles_externos/form', 'Mantener perfil externos', [
            "modelo" => [
                "id" => $modelo->sec_perfil_externo ,
                "cod_perfil_externo"  => $modelo->cod_perfil_externo,
                "nom_perfil_externo" => $modelo->nom_perfil_externo,
                "gls_perfil_externo" => $modelo->gls_perfil_externo,
            ]
        ]);*/

		$this->load->view('amsa/perfiles_externos/form', [
			"id" => $id,
            "cod_perfil_externo" => 'Prueba1',
            "nom_perfil_externo" => 'Prueba2',
            "gls_perfil_externo" => 'Prueba3',
		]);

		// Aquí debería mostrarse el formulario para editar un recurso existente.
	}

	public function update($id)
	{   

		$id = $this->input->post('id_perfil_externo_sec');
		$cod_perfil_externo = $this->input->post('cod_perfil_externo');
        $nom_perfil_externo = $this->input->post('nom_perfil_externo');
        $gls_perfil_externo = $this->input->post('gls_perfil_externo');

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_update_perfil_externo',
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$id,
		$cod_perfil_externo,
		$nom_perfil_externo,
		$gls_perfil_externo,
		$this->id_usuario);*/

		// Esta acción se encargará de actualizar el recurso seleccionado con el contenido enviado por el formulario que lleva a esta acción
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no actualizar el recurso.
	}

	public function delete($id)
	{   

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_desactivar_perfil_externo',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario);*/

		//$this->cargarVista('amsa/perfiles_externos/exito', 'Mantener rol externo');

		// Esta acción se encargará de eliminar el recurso seleccionado.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no eliminar el recurso.
	
	}

	public function show($id)
	{   
		// Aquí deberían mostrarse los detalles del recurso seleccionado.
	}
}