var Myschool = {
    load_sidebar_menu : function(){
        let url = window.location.origin + '/mi-escuela/commons/sidebar-menu';
        
        $.ajax({
            dataType: 'text',
            cache : true,
            method: 'get',
            data: {},
            url: url,
            error: function(xhr, textStatus, errorThrown){
                alert('Ha ocurrido un error al generar la solicitud.'); 
            },
            success: function (response) {
                $('#sidebar-menu').html(response);
            }
        });
    },
}

$(function(){
    /**
     * Pushmenu
     */
    $('[data-widget="pushmenu"]').click();
    /**
     * Load async sidebar-menu from ajax
     */
    Myschool.load_sidebar_menu();

    /**
     * listener to modal or pop-up window
     */
    $('[data-modal]').click(function(event) {
        
        let url = $(this).attr('data-modal');
        let data_val = $(this).attr('data-val') != undefined ? JSON.parse($(this).attr('data-val')) : {};
      
        if (url == undefined) return false;
       
        $.ajax({
            dataType: 'text',
            cache : true,
            method: 'get',
            data: {},
            url: url + '?' + $.param(data_val),
            error: function(xhr, textStatus, errorThrown){
                alert('Ha ocurrido un error al generar la solicitud.'); 
            },
            success: function (response) {
                $('.modal-dialog').html(response);
                $('#dv-modal').modal('show');
            }
        });
    });

});