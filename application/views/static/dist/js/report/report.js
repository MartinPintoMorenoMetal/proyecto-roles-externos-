$(function () {
    $("#example3").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print"],
        "oLanguage": {
            "sSearch": "Búsqueda",
            "sInfo": "Mostrando _START_ de _END_ de _TOTAL_ registros",
            "oPaginate": {
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },

        },
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
});

$(function () {
    $("#example2").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print"],
        "oLanguage": {
            "sSearch": "Búsqueda",
            "sInfo": "Mostrando _START_ de _END_ de _TOTAL_ registros",
            "oPaginate": {
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },

        },
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
});
