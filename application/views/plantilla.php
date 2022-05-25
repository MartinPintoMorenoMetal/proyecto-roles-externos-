<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/adminlte.min.css">
  <!-- SweetAlert 2 -->
  <script src="vista/plugins/sweetalert2/sweetalert2.all.js"></script>

  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <!-- Bootstrap Toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


  

</head>



<!-- jQuery -->
<script src="vista/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vista/dist/js/adminlte.min.js"></script>
<!-- script propios -->
<script src="vista/js/usuario.js"></script>
<script src="vista/js/perfil.js"></script>
<script src="vista/js/permisos.js">  </script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="vista/js/menu.js">  </script>


<script src="vista/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="vista/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vista/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vista/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vista/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vista/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vista/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vista/plugins/jszip/jszip.min.js"></script>
<script src="vista/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vista/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vista/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vista/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vista/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="vista/dist/js/adminlte.min.js"></script>
<!-- Bootstrap Switch -->
<script src="vista/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

</script>