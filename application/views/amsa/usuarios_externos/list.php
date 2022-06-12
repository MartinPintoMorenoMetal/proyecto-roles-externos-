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
                                    <th nowrap>Nom. Usuario</th>
                                    <th nowrap>Celular</th>
                                    <th nowrap>Email</th>
                                    <th nowrap>Nom. Perfil Externo</th>
                                    <th nowrap>Nom. Rol Externo</th>
                                    <th nowrap>Nom. Empresa externa</th>
                                    <th nowrap>Nom. Estatus </th>

                                    
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  foreach ($data as $date){?>
                                <tr>
                                    
                                    <td><?php echo $date->nom_usuario; ?></td>
                                    <td><?php echo $date->celular; ?></td>
                                    <td><?php echo $date->email; ?></td>
                                    <td><?php echo $date->nom_perfil_externo; ?></td>
                                    <td><?php echo $date->nom_rol_externo; ?></td>
                                    <td><?php  if ($date->nom_empresa_externa == '' ){ ?>
                                        no posee empresa externa este usuario
                                    <?php }else{ ?>
                                        <?php echo $date->nom_empresa_externa; ?>
                                    <?php } ?> </td>

                                    <td><?php echo $date->nom_status; ?></td>
                                
                                    <td>
                                        <div class="btn-group">
                                            <a  href="<?php echo base_url();?>editar_usuarios_externos/<?php echo $date->id_usuario_externo?>" 
                                                class="btn btn-primary edit-data">
                                                Edit</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a  href="<?php echo base_url();?>eliminar_usuarios_externos/<?php echo $date->id_usuario_externo?>" 
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