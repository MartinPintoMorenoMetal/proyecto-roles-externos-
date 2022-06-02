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

    <title>Tipos de Equipos</title>
</head>

<body>
    <div class="col-xs-12 widget-container-col" id="widget-container-col-6">
        <div class="widget-box" id="widget-box-6">
            <div class="widget-header widget-header-small">
                <h5 class="widget-title smaller">
                    Tipos de Equipos
                </h5>
            </div>
            <div class="btn-group">
                
                <a class="btn btn-primary" href="<?php echo base_url();?>nuevo_tipos_equipos" >
                    Crear Nueva </a>
            </div>
            <div class="panel-body toggle-heading">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-striped table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th nowrap>Cod. Tipo_equipo </th>
                                    <th nowrap>Desc. Tipo Equipo</th>
                                    <th nowrap>Gls Tipo equipo</th>
                                    <th nowrap>Activo</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  foreach ($data as $tipo_equipo){?>
                                <tr>

                                    <td><?php echo $tipo_equipo->id_tipo_equipo_sec; ?></td>
                                    <td><?php echo $tipo_equipo->cod_tipo_equipo; ?></td>
                                    <td><?php echo $tipo_equipo->gls_tipo_equipo; ?></td>
                                    <td><?php echo $tipo_equipo->gls_tipo_equipo; ?></td>
                                    <td><?php echo $tipo_equipo->usu_created; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a  href="<?php echo base_url();?>editar_tipos_equipos/<?php echo $tipo_equipo->id_tipo_equipo_sec?>" 
                                                class="btn btn-primary edit-data">
                                                Edit</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a  href="<?php echo base_url();?>eliminar_tipos_equipos/<?php echo $tipo_equipo->id_tipo_equipo_sec?>" 
                                            class="btn btn-danger edit-data" >
                                                </i>Delete</a>
                                        </div>
                                    </td>
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