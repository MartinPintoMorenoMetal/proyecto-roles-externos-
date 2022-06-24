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
            action="<?php echo base_url();?>nuevo_turnos/guardar" 

        <?php }else{?>
            action="<?php echo base_url();?>editar_turnos/modificar/<?php echo $id?>" 

        <?php }?> method="POST">
            <div class="widget-box" id="widget-box-6">
                <div class="widget-header widget-header-small">
                    <?php if($id == ""){?>
                        <h5 class="widget-title smaller">Ingresar Turno</h5>
                    <?php }else{?>
                        <h5 class="widget-title smaller">Editar Turno</h5>
                    <?php }?>
                    </div>
                <div class="panel-body toggle-heading">
                    <div class="row">


                        <input type="hidden" name="id_turnos_sec" value= "<?php echo $id?>">

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Codigo del Turno</label>
                                <input type="text" name="cod_turno" value= "<?php echo $cod_turno?>"
                                    class="form-control" placeholder="Codigo del Turno">
                            </div>
                        </div>
                        
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion del Turno</label>
                                <input type="text" name="des_turno" value= "<?php echo $des_turno?>"
                                    class="form-control" placeholder="Nombre del Turno">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">GL del Turno</label>
                                <input type="text" name="gls_turno" value= "<?php echo $gls_turno?>"
                                    class="form-control" placeholder="GL del Turno">
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-top: 20px;">

                                <?php if($id == ""){?>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                <?php }else{?>
                                    <button type="submit" class="btn btn-primary">Modificar</button>                                
                                <?php }?>
                            
                            <a onClick="history.go(-1);"
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