<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: "Roboto" !important;
    }
    </style>

    <title>Lista de usuarios</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Mantenedor de roles externos</h1>
        <div class="text-right">

            <a href="<?php echo base_url();?>nuevo_rol_externo" class="btn btn-info">
                <ion-icon name="add"></ion-icon>
            </a>
        </div>
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">id_rol_externo</th>
                    <th scope="col">cod_rol_externo</th>
                    <th scope="col">nom_rol_externo</th>
                    <th scope="col">gls_rol_externo</th>
                    <th scope="col">fec_ultmod</th>
                    <th scope="col">usu_ultmod</th>
                    <th scope="col">fec_created</th>
                    <th scope="col">usu_created </th>
                    <th scope="col">active</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach ($data as $dato){?>
                <tr>
                    <?php  if ( $dato->active == 1 ){ ?>

                    <td width="10%"><?php echo $dato->sec_rol_externo ; ?></td>
                    <td width="15%"><?php echo $dato->id_rol_externo; ?></td>
                    <td width="10%"><?php echo $dato->cod_rol_externo; ?></td>
                    <td width="15%"><?php echo $dato->nom_rol_externo; ?></td>
                    <td width="10%"><?php echo $dato->gls_rol_externo; ?></td>
                    <td width="15%"><?php echo $dato->fec_ultmod; ?></td>
                    <td width="10%"><?php echo $dato->usu_ultmod; ?></td>
                    <td width="15%"><?php echo $dato->fec_created; ?></td>
                    <td width="10%"><?php echo $dato->usu_created; ?></td>
                    <td width="10%"><?php echo $dato->active; ?></td>
                    <td>
                        <a  href="<?php echo base_url();?>rol_externo/<?php echo $dato->sec_rol_externo ?>"  class="btn btn-primary">
                            <ion-icon name="pencil"></ion-icon>
                        </a>
                        <a href="<?php echo base_url();?>rol_externo/delete/<?php echo $dato->sec_rol_externo ?>" class="btn btn-danger">
                            <ion-icon name="remove"></ion-icon>
                        </a>
                    </td>

                    <?php } ?>

                </tr>
                <?php };?>

            </tbody>
        </table>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <script>
    <?php if($this->session->flashdata("success")) :?>
        
        var mensaje = "<?php echo $this->session->flashdata("success");?>";
        console.log(mensaje);
        Swal.fire({
            icon: 'success',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
        });

    <?php endif;?>
    </script>
</body>

</html>