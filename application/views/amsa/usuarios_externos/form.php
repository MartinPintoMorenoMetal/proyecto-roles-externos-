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

    <?php if($id == ""){?>
        <title class="widget-title smaller">Ingresar Usuario Externo</title>
    <?php }else{?>
        <title class="widget-title smaller">Editar Usuario Externo</title>
    <?php }?>
</head>

<body>

    <div class="col-xs-12 widget-container-col" id="widget-container-col-6">
        <form <?php if($id == ""){?> action="<?php echo base_url();?>nuevo_usuarios_externos/guardar" <?php }else{?>
            action="<?php echo base_url();?>editar_usuarios_externos/modificar/<?php echo $id?>" <?php }?>
            method="POST">
            <div class="widget-box" id="widget-box-6">
                <div class="widget-header widget-header-small">
                    <?php if($id == ""){?>
                    <h5 class="widget-title smaller">Ingresar Usuario Externo</h5>
                    <?php }else{?>
                    <h5 class="widget-title smaller">Editar Usuario Externo</h5>
                    <?php }?>
                </div>
           
                <div class="panel-body toggle-heading">
                    <div class="row">
                        <input type="hidden" name="id_usuario_externo" value="<?php echo $id?>">
                        
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Perfil externo </label>
                                <select name="id_perfil_externo"  class="form-control" >
                                <option value="" > Seleccione Perfil externo </option>
                                <?php  foreach ($perfiles_externos as $perfil_externo){?>
                                    <option value="<?php echo $perfil_externo->sec_perfil_externo; ?>" 
                                    <?php if ($id_perfil_externo ==  $perfil_externo->sec_perfil_externo ) {?>
                                        selected
                                    <?php }?>>  
                                    <?php echo $perfil_externo->nom_perfil_externo; ?></option>
                                <?php };?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rol externo </label>
                                <select name="id_rol_externo"  class="form-control" >
                                <option value=""> Seleccione Rol externo</option>
                                <?php  foreach ($rol_externos as $rol_externo){?>
                                    <option value="<?php echo $rol_externo->sec_rol_externo ; ?>"
                                    <?php if ($id_rol_externo ==  $rol_externo->sec_rol_externo ) {?>
                                        selected
                                    <?php }?>>  
                                    <?php echo $rol_externo->nom_rol_externo; ?></option>
                                <?php };?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Proveedor externo</label>
                                <select name="id_empresa_externa"  class="form-control" >
                                <option value=""> Seleccione Proveedor externo</option>
                                <?php  foreach ($proveedores_transportes as $proveedor_transporte){?>
                                    <option value="<?php echo $proveedor_transporte->id_transportista ; ?>"
                                    <?php if ($id_empresa_externa ==  $proveedor_transporte->id_transportista  ) {?>
                                        selected
                                    <?php }?>>  
                                    <?php echo $proveedor_transporte->nombre_proveedor; ?></option>
                                <?php };?>
                                </select>
                            </div>
                        </div>
                        


                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Nombre Completo Del Usuario Externo</label>
                                <input type="text" name="nom_usuario" value="<?php echo $nom_usuario?>"
                                    class="form-control" placeholder="Nombre Completo del Usuario">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Del Usuario Externo</label>
                                <input type="text" name="name_usu" value="<?php echo $name_usu?>"
                                    class="form-control" placeholder="Nombres Del Usuario Externo">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Apellidos Del Usuario Extern </label>
                                <input type="text" name="lastname_usu" value="<?php echo $lastname_usu?>"
                                    class="form-control" placeholder="Apellidos Del Usuario Extern">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nº de Identificacion</label>
                                <input type="text" name="id_ident" value="<?php echo $id_ident?>"
                                    class="form-control" placeholder="Nº de Identificacion">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo de Identificacion </label>
                                <select name="tip_ident"  class="form-control" >
                                    <option value="" 
                                    <?php if ($tip_ident == "" ) {?>
                                        selected
                                    <?php }?>
                                    > Seleccione Tipo de Identificacion</option>
                                    <option value="1"
                                    <?php if ($tip_ident == 1 ) {?>
                                        selected
                                    <?php }?>
                                    > RUT </option>  
                                    <option value="2"
                                    <?php if ($tip_ident == 2 ) {?>
                                        selected
                                    <?php }?>> PASAPORTE </option>  
                                    <option value="3"
                                    <?php if ($tip_ident == 3 ) {?>
                                        selected
                                    <?php }?>> PERMISO TEMPORAL </option>  
                                </select>
                            </div>
                        </div>



                        <?php if($id != ""){?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha De Fin Vigencia Del Usuario</label>
                                    <input type="date" name="fec_fin" value="<?php echo $fec_fin?>"
                                        class="form-control" placeholder="Fecha De Fin Vigencia Del Usuario">
                                </div>
                            </div>
                        <?php }?>



                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Estatus del Usuario Externo </label>
                                <select name="status_usuario"  class="form-control" >
                                <option value=""> Seleccione Estatus del Usuario Externo</option>
                                <?php  foreach ($status_usuarios as $status_usuario){?>
                                    <option value="<?php echo $status_usuario->id_status ; ?>"
                                    <?php if ($status_usuario ==  $status_usuario->id_status  ) {?>
                                        selected
                                    <?php }?>>  
                                    <?php echo $status_usuario->nom_status; ?></option>
                                <?php };?>
                                </select>
                            </div>
                        </div>


                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="<?php echo $email?>"
                                    class="form-control" placeholder="Email Del Usuario Externo">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Celular</label>
                                <input type="text" name="celular" value="<?php echo $celular?>"
                                    class="form-control" placeholder="Celular Del Usuario Extern">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" value="<?php echo $username?>"
                                    class="form-control" placeholder="Username Del Usuario Externo">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Clave</label>
                                <input type="password" name="clave" value="<?php echo $clave?>"
                                    class="form-control" placeholder="clave Del Usuario Externo">
                            </div>
                        </div>

                        <div class="col-xs-12" style="margin-top: 20px;">

                            <button type="submit" class="btn btn-primary">Guardar</button>

                            <a href="http://localhost/crudmysqlcodeigniter/usuarios_externos" style="margin-left:20px"
                                class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

</html>