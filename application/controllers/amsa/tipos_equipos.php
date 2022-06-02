<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipos_equipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->all_tipos_equipos('permisos.fn_listar_rol_externo',
		[
			"id_tipo_equipo_sec",
			"cod_tipo_equipo",
			"des_tipo_equipo",
			"gls_tipo_equipo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		));*/

		$data = array("data" => $this->comun_model->all_tipos_equipos());

	    $this->load->view('amsa/tipos_equipos/list.php', $data);
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

	public function new()
	{   
		
		$this->load->view('amsa/tipos_equipos/form', [
			"id" => "",
            "des_tipo_equipo" => "",
            "gls_tipo_equipo" => "",
		]);

		// Aquí debería mostrarse el formulario para crear un nuevo recurso.
	}

	public function create()
	{   
		
        $cod_tipo_equipo = $this->input->post('cod_tipo_equipo');
        $des_tipo_equipo = $this->input->post('des_tipo_equipo');
        $gls_tipo_equipo = $this->input->post('gls_tipo_equipo');

		/* $this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_insert_rol_externo',
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$des_tipo_equipo,
		$gls_tipo_equipo,
		$this->id_usuario);*/

		// Esta acción se encargará de almacenar el contenido enviado por el formulario que lleva a esta acción.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no almacenar el recurso.
	}

	public function edit($id)
	{    
		/*$modelo = $this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_select_tipos_equipos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		)[0];
		
		$this->cargarVista('amsa/rol_externo/form', 'Mantener rol externo', [
            "modelo" => [
                "id" => $modelo->id_tipo_equipo_sec ,
                "cod_tipo_equipo"  => $modelo->cod_tipo_equipo,
                "des_tipo_equipo" => $modelo->des_tipo_equipo,
                "gls_tipo_equipo" => $modelo->gls_tipo_equipo,
            ]
        ]);*/

		$this->load->view('amsa/tipos_equipos/form', [
			"id" => $id,
            "cod_tipo_equipo" => 'Prueba',
            "des_tipo_equipo" => 'Prueba',
            "gls_tipo_equipo" => 'Prueba',
		]);

		// Aquí debería mostrarse el formulario para editar un recurso existente.
	}

	public function update($id)
	{   

		$id = $this->input->post('id_tipo_equipo_sec');
        $cod_tipo_equipo = $this->input->post('cod_tipo_equipo');
        $des_tipo_equipo = $this->input->post('des_tipo_equipo');
        $gls_tipo_equipo = $this->input->post('gls_tipo_equipo');

		
		/* $this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_insert_rol_externo',
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$des_tipo_equipo,
		$gls_tipo_equipo,
		$this->id_usuario);*/

		// Esta acción se encargará de actualizar el recurso seleccionado con el contenido enviado por el formulario que lleva a esta acción
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no actualizar el recurso.
	}

	public function delete($id)
	{   

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_desactivar_tipos_equipos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario);*/

		//$this->cargarVista('amsa/rol_externo/exito', 'Mantener rol externo');

		// Esta acción se encargará de eliminar el recurso seleccionado.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no eliminar el recurso.
	}

	public function show($id)
	{   
		// Aquí deberían mostrarse los detalles del recurso seleccionado.
	}
}