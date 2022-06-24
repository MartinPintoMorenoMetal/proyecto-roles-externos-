<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class turnos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->ObtenerTablaDesdeFuncion('planificacion.fn_listar_turnos',
		[
			"id_turnos_sec",
			"cod_turno",
			"des_turno",
			"gls_turno"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		));*/

		$data = array("data" => $this->comun_model->all_turnos());

	    $this->load->view('amsa/turnos/list.php', $data);
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

	public function new()
	{   
		
		$this->load->view('amsa/turnos/form', [
			"id" => "",
            "cod_turno" => "",
			"des_turno" => "",
            "gls_turno" => "",
		]);

		// Aquí debería mostrarse el formulario para crear un nuevo recurso.
	}

	public function create()
	{   
		$cod_turno = $this->input->post('cod_turno');
        $des_turno = $this->input->post('des_turno');
        $gls_turno = $this->input->post('gls_turno');



		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_insert_turnos',
        $cod_turno,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
        $des_turno,
		$gls_turno,
		$this->id_usuario);*/

		// Esta acción se encargará de almacenar el contenido enviado por el formulario que lleva a esta acción.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no almacenar el recurso.
	}

	public function edit($id)
	{    
		/*$modelo = $this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_select_turnos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		)[0];
		
		$this->cargarVista('amsa/turnos/form', 'Mantener turno', [
            "modelo" => [
                "id" =>  $modelo->$id_turnos_sec,
                "cod_turno" =>  $modelo->cod_turno,
                "des_turno" =>  $modelo->des_turno,
                "gls_turno" =>  $modelo->gls_turno,
            ]
        ]);*/

		$this->load->view('amsa/turnos/form', [
			"id" => $id,
            "cod_turno" => "prueba",
			"des_turno" => "prueba",
            "gls_turno" => "prueba",
		]);

		// Aquí debería mostrarse el formulario para editar un recurso existente.
	}

	public function update($id)
	{   

		$id = $this->input->post('id_turnos_sec');
		$cod_turno = $this->input->post('cod_turno');
        $des_turno = $this->input->post('des_turno');
        $gls_turno = $this->input->post('gls_turno');

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_update_turnos',
		$id,
        $cod_turno,
        $this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$des_turno,
        $gls_turno,		
        $this->id_usuario);*/

		// Esta acción se encargará de actualizar el recurso seleccionado con el contenido enviado por el formulario que lleva a esta acción
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no actualizar el recurso.
	}

	public function delete($id)
	{   

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_desactivar_turnos',
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