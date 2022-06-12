<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_externos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_usuarios_externos',
		[
			"id_usuario_externo",
			"nom_usuario",
			"celular",
			"email",
			"nom_perfil_externo",
			"nom_rol_externo",
			"nom_empresa_externa",
			"nom_status"
			
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		));*/

		$data = array("data" => $this->comun_model->all_usuarios_externos());

	    $this->load->view('amsa/usuarios_externos/list.php', $data );
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

	public function new()
	{   
		/*$data['perfiles_externos'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_perfil_externo',
		[
			"sec_perfil_externo",
			"nom_perfil_externo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		$data['rol_externos'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_rol_externo',
		[
			"sec_rol_externo",
			"nom_rol_externo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		$data['status_usuarios'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_status_usuario',
		[
			"id_status",
			"nom_status"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		//se cambio a id_transportista la id del proveedores_transporte por temas que estaba en el excel  id_proveedor_transporte2, 
		//ojo tambien en la consulta que realize para traer todos los datos 

		$data['proveedores_transportes']  = $this->comun_model->ObtenerTablaDesdeFuncion('planificacion.fn_listar_proveedores_transporte',
		[
			"id_transportista",
			"nombre_proveedor"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);*/

	
		$data = array(
			"id" => "",
			"id_perfil_externo" => "",
			"id_rol_externo" => "",
			"id_empresa_externa" => "",
			"nom_usuario" => "",
			"name_usu" => "",
			"lastname_usu" => "",
			"id_ident" => "",
			"tip_ident" => "",
			"status_usuario" => "",
			"fec_fin"=> "",
			"email" => "",
			"celular" => "",
			"username" => "",
			"clave" => "",
			
		);

		$data['perfiles_externos'] =  $this->comun_model->all_perfiles_externos();
		$data['rol_externos'] =  $this->comun_model->all_rol_externo();
		$data['status_usuarios'] =  $this->comun_model->all_estatus_usuario();
		$data['proveedores_transportes'] =  $this->comun_model->all_empresa_externa();

		$this->load->view('amsa/usuarios_externos/form',$data);

	}

	public function create()
	{   
		
        $id_perfil_externo = $this->input->post('id_perfil_externo');
        $id_rol_externo = $this->input->post('id_rol_externo');
        $id_empresa_externa = $this->input->post('id_empresa_externa');
        $nom_usuario = $this->input->post('nom_usuario');
        $name_usu = $this->input->post('name_usu');
        $lastname_usu = $this->input->post('lastname_usu');
        $id_ident = $this->input->post('id_ident');
        $tip_ident = $this->input->post('tip_ident');
        $status_usuario = $this->input->post('status_usuario');
        $email = $this->input->post('email');
        $celular = $this->input->post('celular');
        $username = $this->input->post('username');
        $clave = $this->input->post('clave');

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion(
		'permisos.fn_insert_usuarios_externos',
        $this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$id_perfil_externo,
		$id_rol_externo,
		$id_empresa_externa,
		$nom_usuario,
		$name_usu,
		$lastname_usu,
		$id_ident,
		$tip_ident,
		$status_usuario,
		$email,
		$celular,
		$username,
		$clave,
		$this->id_usuario,);*/
		//$this->cargarVista('amsa/usuarios_externos/exito', 'Mantener usuario externo');
		// Esta acción se encargará de almacenar el contenido enviado por el formulario que lleva a esta acción.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no almacenar el recurso.
	}

	public function edit($id)
	{    
		/*$modelo = $this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_select_usuarios_externos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		)[0];


		$data['perfiles_externos'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_perfil_externo',
		[
			"sec_perfil_externo",
			"nom_perfil_externo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		$data['rol_externos'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_rol_externo',
		[
			"sec_rol_externo",
			"nom_rol_externo"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		$data['status_usuarios'] = $this->comun_model->ObtenerTablaDesdeFuncion('permisos.fn_listar_status_usuario',
		[
			"id_status",
			"nom_status"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);

		//se cambio a id_transportista la id del proveedores_transporte por temas que estaba en el excel  id_proveedor_transporte2, 
		//ojo tambien en la consulta que realize para traer todos los datos 

		$data['proveedores_transportes']  = $this->comun_model->ObtenerTablaDesdeFuncion('planificacion.fn_listar_proveedores_transporte',
		[
			"id_transportista",
			"nombre_proveedor"
		],
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario,
		null
		);
		
		$this->cargarVista('amsa/tipos_movimientos/form', 'Mantener usuario Externo', [
            "modelo" => [
                "id" => $modelo->id_usuario_externo ,
				"id_perfil_externo" => $modelo->id_perfil_externo,
				"id_rol_externo" => $modelo->id_rol_externo,
				"id_empresa_externa" => $modelo->id_empresa_externa,
				"nom_usuario" => $modelo->nom_usuario,
				"name_usu" => $modelo->name_usu,
				"lastname_usu" => $modelo->lastname_usu,
				"id_ident" => $modelo->id_ident,
				"tip_ident" => $modelo->tip_ident,
				"status_usuario" => $modelo->status_usuario,
				"fec_fin" => $modelo->fec_fin,
				"email" => $modelo->email,
				"celular" => $modelo->celular,
				"username" => $modelo->username,
				"clave" => $modelo->clave,
            ]
        ]);*/

		$data = array(
			"id" => $id,
			"id_perfil_externo" => 1,
			"id_rol_externo" => 1,
			"id_empresa_externa" => 1,
			"nom_usuario" => "prueba",
			"name_usu" => "prueba",
			"lastname_usu" => "prueba",
			"id_ident" => "prueba",
			"tip_ident" => "prueba",
			"fec_fin"=> "2018-12-31",
			"status_usuario" => 35,
			"email" => "prueba@hotmail.com",
			"celular" => "prueba",
			"username" => "prueba",
			"clave" => "prueba",
		);

		$data['perfiles_externos'] =  $this->comun_model->all_perfiles_externos();
		$data['rol_externos'] =  $this->comun_model->all_rol_externo();
		$data['status_usuarios'] =  $this->comun_model->all_estatus_usuario();
		$data['proveedores_transportes'] =  $this->comun_model->all_empresa_externa();


		$this->load->view('amsa/usuarios_externos/form',
			$data
		);

		// Aquí debería mostrarse el formulario para editar un recurso existente.
	}

	public function update($id)
	{   

		$id_usuario_externo = $id;
		$id_perfil_externo = $this->input->post('id_perfil_externo');
        $id_rol_externo = $this->input->post('id_rol_externo');
        $id_empresa_externa = $this->input->post('id_empresa_externa');
        $nom_usuario = $this->input->post('nom_usuario');
        $name_usu = $this->input->post('name_usu');
        $lastname_usu = $this->input->post('lastname_usu');
        $id_ident = $this->input->post('id_ident');
        $tip_ident = $this->input->post('tip_ident');
        $status_usuario = $this->input->post('status_usuario');
		//fecha de fin vigencia del usuario '01-01-3000' 
		$fec_fin = $this->input->post('fec_fin');
        $email = $this->input->post('email');
        $celular = $this->input->post('celular');
        $username = $this->input->post('username');
        $clave = $this->input->post('clave');

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion(
			'permisos.fn_update_usuarios_externos',
			$id_usuario_externo,
			$this->id_cliente,
			$this->id_subcliente,
			$this->id_pais,
			$id_perfil_externo,
			$id_rol_externo,
			$id_empresa_externa,
			$nom_usuario,
			$name_usu,
			$lastname_usu,
			$id_ident,
			$tip_ident,
			$status_usuario,
			$fec_fin,
			$email,
			$celular,
			$username,
			$clave,
			$this->id_usuario);
		*/
		//$this->cargarVista('amsa/usuarios_externos/exito', 'Mantener usuario externo');

		
		// Esta acción se encargará de actualizar el recurso seleccionado con el contenido enviado por el formulario que lleva a esta acción
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no actualizar el recurso.
	}

	public function delete($id)
	{   

		/*$this->comun_model->ObtenerRegistrosDesdeFuncion('permisos.fn_desactivar_usuarios_externos',
		$id,
		$this->id_cliente,
		$this->id_subcliente,
		$this->id_pais,
		$this->id_usuario);*/

		//$this->cargarVista('amsa/usuarios_externos/exito', 'Mantener usuario externo');

		// Esta acción se encargará de eliminar el recurso seleccionado.
        // Adicionalmente aquí es donde se debería imprimir una vista informando si se ha logrado o no eliminar el recurso.
	}

	public function show($id)
	{   
		// Aquí deberían mostrarse los detalles del recurso seleccionado.
	}
}