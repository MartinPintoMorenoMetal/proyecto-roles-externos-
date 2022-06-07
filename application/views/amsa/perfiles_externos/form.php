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

    <title>Titulo</title>
</head>

<body>
    
    <div class="col-xs-12 widget-container-col" id="widget-container-col-6">
        <form 
        <?php if($id == ""){?>
            action="<?php echo base_url();?>nuevo_perfiles_externos/guardar" 

        <?php }else{?>
            action="<?php echo base_url();?>editar_perfiles_externos/modificar/<?php echo $id?>" 

        <?php }?> method="POST">
            <div class="widget-box" id="widget-box-6">
                <div class="widget-header widget-header-small">
                    <?php if($id == ""){?>
                        <h5 class="widget-title smaller">Ingresar Perfil Externo</h5>
                    <?php }else{?>
                        <h5 class="widget-title smaller">Editar Perfil Externo</h5>
                    <?php }?>
                    </div>
                <div class="panel-body toggle-heading">
                    <div class="row">


                        <input type="hidden" name="id_perfil_externo_sec" value= "<?php echo $id?>">
                        
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Codigo del Perfil Externo</label>
                                <input type="text" name="cod_perfil_externo" value="<?php echo $cod_perfil_externo?>"
                                    class="form-control" placeholder="Codigo del Perfil Externo">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre del Perfil Externo</label>
                                <input type="text" name="nom_perfil_externo" value= "<?php echo $nom_perfil_externo?>"
                                    class="form-control" placeholder="Nombre del Perfil Externo">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">GL de Perfil Externo</label>
                                <input type="text" name="gls_perfil_externo" value= "<?php echo $gls_perfil_externo?>"
                                    class="form-control" placeholder="GL del Perfil Externo">
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">

                                <?php if($id == ""){?>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                <?php }else{?>
                                    <button type="submit" class="btn btn-primary">Guardar</button>                                
                                <?php }?>
                            
                            <a href="http://localhost/amsa/roles_externos/"
                                style="margin-left:20px" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

</html>