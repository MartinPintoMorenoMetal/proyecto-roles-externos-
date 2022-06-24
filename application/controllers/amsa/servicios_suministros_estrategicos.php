<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class servicios_suministros_estrategicos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('comun_model');
	}


	public function index()
	{    
		/*$data = array($this->comun_model->all_tipos_equipos('permisos.fn_select_tipos_equipos',
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

		$data = array("data" => $this->comun_model->all_ser_sum_estr());

	    $this->load->view('amsa/servicios_suministros_estrategicos/list.php', $data);
		// Aquí debería mostrarse el listado de recursos disponibles.
	}

    


    /*

    public function aexceltotalflodedicada($fec='', $fecfin = '', $toperacion ='',$cfinal = ''){

    ini_set('max_execution_time', 900);
    ini_set('memory_limit', '384M');

    $this->load->model('Entrega_model');
    $this->load->library('Classes/PHPExcel.php');

    //Inicio de Excel
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()->setCreator("Log Solution")->setLastModifiedBy("Log Solution");

    //Encabezado del excel
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Fecha');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Patente');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Cantidad conductores');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Conductores participantes ');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Número de traslados (APP)');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'Número de traslados (GPS)');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'Porcentaje');




    $id_cliente_p = $this->session->userdata('id_cliente');
    $id_subcliente_p = $this->session->userdata('id_subcliente');
    $id_pais_p = $this->session->userdata('id_pais');
    $usu_created_p = $this->session->userdata('id_usuario');
    $token_p = $this->session->userdata('token');

    /*
    $id_cliente_p = 5;
    $id_subcliente_p = 5;
    $id_pais_p = 1; 
    $usu_created_p = 1;
    $token_p = 'null'; 

    if($fec == '')
    {
        $fec = date('Y-m-d');
        $data['hoy'] = date('Y-m-d');
    }
    else
    {
        $fec = $this->encrypt->decode(base64_decode($fec));
        $data['hoy'] = $fec;
    }

    if($fecfin == '')
    {
        $fecfin = date('Y-m-d');
    }
    else
    {
        $fecfin = $this->encrypt->decode(base64_decode($fecfin));
    }

    if($toperacion == '')
    {
        $toperacion = 0;
    }else
    {
        $toperacion = $this->encrypt->decode(base64_decode($toperacion));
    }

    if($cfinal == '')
    {
        $cfinal = 0;
    }else
    {
        $cfinal = $this->encrypt->decode(base64_decode($cfinal));
    }

    $fecha1= new DateTime($fec);
    $fecha2= new DateTime($fecfin);
    $diff = $fecha1->diff($fecha2);
    $cantidad_dias_rango = $diff->format('%a');


    $count_indice_rotacion_camion_dia_detalle = $this->Entrega_model->count_get_datos_tbl_hechos_entregas_flota_distic_traslados_camiones_cantidad_traslados_detallados_patente($id_cliente_p, $id_subcliente_p , $id_pais_p, $fec,$fecfin,$toperacion,$cfinal );
        

    if($count_indice_rotacion_camion_dia_detalle != FALSE)
    {
        $z=0;
        $h=2;
        foreach($count_indice_rotacion_camion_dia_detalle as $val1)
        {
        
        $fecha_concat = strtotime($val1->año.'-'.$val1->mes.'-'.$val1->dia);
        $fecha_concat = date ( 'Y-m-d' , $fecha_concat);
        
        $cantidad_camiones_por_dia = $this->Entrega_model->count_get_datos_tbl_hechos_entregas_flota_distic_traslados_camiones_cantidad_traslados_detallados_patente_por_dia_camion($id_cliente_p, $id_subcliente_p , $id_pais_p, $fecha_concat,$fecha_concat,$toperacion,$cfinal,$val1->año,$val1->mes,$val1->dia);
        $datos_traslados_gps = $this->Entrega_model->get_datos_indicadores_traslados_cd_destinos_orignes_patentes($id_cliente_p, $id_subcliente_p , $id_pais_p, $toperacion,$cfinal,$fecha_concat,$fecha_concat,$val1->patente );
        $cantidad_camiones_por_dia_gps = $this->Entrega_model->couunt_datos_indicadores_traslados_cd_destinos_orignes_patentes($id_cliente_p, $id_subcliente_p , $id_pais_p, $toperacion,$cfinal,$fecha_concat,$fecha_concat);
        
        if($val1->cantidad_traslados > $datos_traslados_gps->count)
        {
            $cantida_tras = $val1->cantidad_traslados;
            $cantida_gps = $val1->cantidad_traslados;
        

        }else
        {
            $cantida_tras = $val1->cantidad_traslados;
            $cantida_gps = $datos_traslados_gps->count;

        

        }



        $datos_patentes = $this->Entrega_model->row_personas_pantente_get_datos_tbl_hechos_entregas_flota_distic_personas_total111($id_cliente_p, $id_subcliente_p , $id_pais_p, $fec,$fecfin,$toperacion,$cfinal, $val1->patente );

        $cantidad_conduc = count($datos_patentes);
        $conductores_utilizados = '';

        $k1 = 0;
        $conc = '';
        foreach($datos_patentes as $va_pat)
        {
            if($k1 > 0)
            {
            $conc = ', ';
            }

            $conductores_utilizados .= $conc.''.$va_pat->nom_completo;
            $k1++;
        }

        
        
        if( $cantida_tras != 0 && $cantida_gps != 0)
        {
            $porcentaje        =(($cantida_tras)/$cantida_gps);

        }
        else
        {
            $porcentaje        = 0;

        }


        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'. $h, $fecha_concat);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'. $h, $val1->patente);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'. $h, $cantidad_conduc);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'. $h, $conductores_utilizados);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'. $h, $val1->cantidad_traslados);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'. $h, $cantida_gps);
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'. $h, $porcentaje);

        $z++;
        $h++;
        }


    }

    

    $objPHPExcel->setActiveSheetIndex(0);

    header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="Exportar Flota dedicada - Conductores desde '.$fec.' hasta '.$fecfin.'.xls"');
            header('Cache-Control: max-age=0');
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
    //return $result;

    }*/

}