<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: "Roboto" !important;
    }
    </style>

    <title>Mantenedor roles externos</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Ingresar rol externo</h1>
        <form action="<?php echo base_url();?>nuevo_rol_externo/save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Codigo del rol externo</label>
                        <input type="text" name="codRolExterno" class="form-control"
                            placeholder="Codigo del rol externo">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de Rol externo</label>
                        <input type="text" name="nomRolExterno" class="form-control"
                            placeholder="Nombre de Rol externo">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">GL de rol externo</label>
                        <input type="text" name="glRolExterno" class="form-control" placeholder="GL de rol externo">
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">

                    <a href="<?php echo base_url();?>rol_externos" type="submit" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <script>
    <?php if($this->session->flashdata("success")) :?>

    var mensaje = "<?php echo $this->session->flashdata("success");?>";
        console.log(mensaje);
        Swal.fire({
            icon: 'error',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
        });

    <?php endif;?>
    </script>

</body>

</html>