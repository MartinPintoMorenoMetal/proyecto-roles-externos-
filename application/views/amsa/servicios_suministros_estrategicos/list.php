<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ace/ace.min.css" />

    <title>Usuarios Externos</title>
</head>

<body>
    <div class="col-xs-12 widget-container-col" id="widget-container-col-6">
        <div class="widget-box" id="widget-box-6">
            <div class="widget-header widget-header-small">
                <h5 class="widget-title smaller">
                    Usuarios Externos
                </h5>
            </div>
            <div class="btn-group">
                
                <a class="btn btn-primary" href="<?php echo base_url();?>nuevo_usuarios_externos" >
                    Crear Nueva </a>
            </div>

           
            <div class="panel-body toggle-heading">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-striped table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th nowrap>nro_solicitud </th>
                                    <th nowrap>fecha_servicio</th>
                                    <th nowrap>hora_servicio</th>
                                    <th nowrap>id_turno</th>
                                    <th nowrap>turno</th>
                                    <th nowrap>id_transportista_asignado</th>
                                    <th nowrap>nom_proveedor</th>
                                    <th nowrap>nom_conductor</th>
                                    <th nowrap>rut_conductor</th>
                                    <th nowrap>id_movil_asignado</th>
                                    <th nowrap>patente</th>
                                    <th nowrap>tipo_equipo</th>
                                    <th nowrap>id_movil_remolque</th>
                                    <th nowrap>patente_remolque</th>
                                    <th nowrap>tipo_equipo_remolque</th>
                                    <th nowrap>id_tipo_carga</th>
                                    <th nowrap>tipo_carga</th>
                                    <th nowrap>	id_tipo_producto</th>
                                    <th nowrap>tipo_producto</th>
                                    <th nowrap>id_material</th>
                                    <th nowrap>material</th>
                                    <th nowrap>id_tipo_servicio</th>
                                    <th nowrap>tipo_servicio</th>
                                    <th nowrap>id_clasificacion</th>
                                    <th nowrap>clasif_servicio</th>
                                    <th nowrap>id_tipo_movimiento</th>
                                    <th nowrap>tipo_movimiento</th>
                                    <th nowrap>poligono_retiro</th>
                                    <th nowrap>lugar_retiro</th>
                                    <th nowrap>poligono_destino</th>
                                    <th nowrap>lugar_destino</th>
                                    <th nowrap>observaciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php  foreach ($data as $date){?>
                                <tr>
                                    <th><?php echo $date->nro_solicitud ; ?></td>
                                    <th><?php echo $date->fecha_servicio; ?></td>
                                    <th><?php echo $date->hora_servicio; ?></td>
                                    <th><?php echo $date->id_turno; ?></td>
                                    <th><?php echo $date->turno; ?></td>
                                    <th><?php echo $date->id_transportista_asignado; ?></td>
                                    <th><?php echo $date->nom_proveedor; ?></td>
                                    <th><?php echo $date->nom_conductor; ?></td>
                                    <th><?php echo $date->rut_conductor; ?></td>
                                    <th><?php echo $date->id_movil_asignado; ?></td>
                                    <th><?php echo $date->patente; ?></td>
                                    <th><?php echo $date->tipo_equipo; ?></td>
                                    <th><?php echo $date->id_movil_remolque; ?></td>
                                    <th><?php echo $date->patente_remolque; ?></td>
                                    <th><?php echo $date->tipo_equipo_remolque; ?></td>
                                    <th><?php echo $date->id_tipo_carga; ?></td>
                                    <th><?php echo $date->tipo_carga; ?></td>
                                    <th><?php echo $date->	id_tipo_producto; ?></td>
                                    <th><?php echo $date->tipo_producto; ?></td>
                                    <th><?php echo $date->id_material; ?></td>
                                    <th><?php echo $date->material; ?></td>
                                    <th><?php echo $date->id_tipo_servicio; ?></td>
                                    <th><?php echo $date->tipo_servicio; ?></td>
                                    <th><?php echo $date->id_clasificacion; ?></td>
                                    <th><?php echo $date->clasif_servicio; ?></td>
                                    <th><?php echo $date->id_tipo_movimiento; ?></td>
                                    <th><?php echo $date->tipo_movimiento; ?></td>
                                    <th><?php echo $date->poligono_retiro; ?></td>
                                    <th><?php echo $date->lugar_retiro; ?></td>
                                    <th><?php echo $date->poligono_destino; ?></td>
                                    <th><?php echo $date->lugar_destino; ?></td>
                                    <th><?php echo $date->observaciones; ?></td>
                                    
                                    
                                
                                    
                                </tr>
                                <?php };?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

</html>