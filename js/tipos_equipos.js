$(document).ready(function() {

    var path = $('#path').val();
      $("#datatable").DataTable({  
        "processing": false,
        "serverSide": true,        
        "ajax": path + 'tipocarga/api',
          columns: [
        {data:'id_tipo_equipo_sec', "orderable": false},
        {data:'cod_tipo_equipo', "orderable": false},
        {data:'id_cliente', "orderable": false},
        {data:'id_subcliente', "orderable": false},
        {data:'id_pais', "orderable": false},
        {data:'des_tipo_equipo', "orderable": false},
        {data:'gls_tipo_equipo', "orderable": false},
        {data:'fec_created', "orderable": false},
        {data:'usu_created', "orderable": false},
        {data:'fec_ultmod', "orderable": false},
        {data:'usu_ultmod', "orderable": false},
        {data:'active', "orderable": false}
          ],
      order: [[0, 'asc']], 
      searching: false,
          columnDefs: [
              {
                targets: 7,
                orderable: false,
                render: function (data, type, full, meta) {
                  return (
                    '<div class="btn-group">' +
                      '<a class="btn btn-primary edit-data" data-id="' + full["id_tipo_equipo_sec"] + '" data-toggle="modal" data-target="#modal-win"><i class="fa-solid fa-user" style="margin-right:10px"></i>Edit</a>' +
                    '</div>'
                  )
                }
              },
              {
                targets: 8,
                orderable: false,
                render: function (data, type, full, meta) {
                  return (
                    '<div class="btn-group">' +
                    '<a class="btn btn-secondary del-data" data-id="' + full["id_tipo_equipo_sec"] + '"><i class="fa-solid fa-user" style="margin-right:10px"></i>Delete</a>' +
                    '</div>'
                  )
                }
              }			          
            ], 
      }) 
  })