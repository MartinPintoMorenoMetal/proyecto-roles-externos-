<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipos_movimientos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->all_tipos_movimientos('planificacion.fn_listar_tipos_movimientos',
		[
			"id_tipo_movimiento",
			"cod_tipo_movimiento",
			"des_tipo_movimiento",
			"gls_tipo_movimiento"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		));*/

		$data = array("data" => $this->comun_model->all_tipos_movimientos());

	    $this->load->view('amsa/tipos_movimientos/list.php', $data);
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

	public function new()
	{   
		
		$this->load->view('amsa/tipos_movimientos/form', [
			"id" => "",
            "cod_tipo_movimiento" => "",
            "des_tipo_movimiento" => "",
            "gls_tipo_movimiento" => "",
		]);

		// Aquí debería mostrarse el formulario para crear un nuevo recurso.
	}

	public function create()
	{   
		
        $cod_tipo_movimiento = $this->input->post('cod_tipo_movimiento');
        $des_tipo_movimiento = $this->input->post('des_tipo_movimiento');
        $gls_tipo_movimiento = $this->input->post('gls_tipo_movimiento');

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_insert_tipos_movimientos',
		$cod_tipo_movimiento,
        $this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$des_tipo_movimiento,
		$gls_tipo_movimiento,
		$this->id_usuario);*/

		// Esta acción se encargará de almacenar el contenido enviado por el formulario que lleva a esta acción.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no almacenar el recurso.
	}

	public function edit($id)
	{    
		/*$modelo = $this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_select_tipos_movimientos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		)[0];
		
		$this->cargarVista('amsa/tipos_movimientos/form', 'Mantener tipo movimiento', [
            "modelo" => [
                "id" => $modelo->id_tipo_movimiento,
                "cod_tipo_movimiento" => $modelo->cod_tipo_movimiento,
                "des_tipo_movimiento" => $modelo->des_tipo_movimiento,
                "gls_tipo_movimiento" => $modelo->gls_tipo_movimiento,
            ]
        ]);*/

		$this->load->view('amsa/tipos_movimientos/form', [
			"id" => $id,
            "cod_tipo_movimiento" => 'Prueba',
            "des_tipo_movimiento" => 'Prueba',
            "gls_tipo_movimiento" => 'Prueba',
		]);

		// Aquí debería mostrarse el formulario para editar un recurso existente.
	}

	public function update($id)
	{   

		$id = $this->input->post('id_tipo_movimiento');
        $cod_tipo_movimiento = $this->input->post('cod_tipo_movimiento');
        $des_tipo_movimiento = $this->input->post('des_tipo_movimiento');
        $gls_tipo_movimiento = $this->input->post('gls_tipo_movimiento');

		/* $this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_update_tipos_movimientos',
        $id,
        $cod_tipo_movimiento,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$des_tipo_movimiento,
		$gls_tipo_movimiento,
		$this->id_usuario);*/

		// Esta acción se encargará de actualizar el recurso seleccionado con el contenido enviado por el formulario que lleva a esta acción
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no actualizar el recurso.
	}

	public function delete($id)
	{   

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('planificacion.fn_desactivar_tipos_movimientos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario);*/
        echo $id;

		//$this->cargarVista('amsa/tipos_movimientos/exito', 'Mantener rol externo');

		// Esta acción se encargará de eliminar el recurso seleccionado.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no eliminar el recurso.
	}

	public function show($id)
	{   
		// Aquí deberían mostrarse los detalles del recurso seleccionado.
	}
}