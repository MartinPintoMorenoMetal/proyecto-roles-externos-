var Components = {
    process_form: function(){
        
        let form = $('#form').serializeArray();
        let url = $('#form').attr('action');
        let message_error = Components.validate_form(form);
        console.log(form);
     
        if(message_error != ''){
            $('#card-error').removeAttr('hidden');
            $('#error-message>ul').html(message_error);
            return false;
        }
        else{
            $('#card-error').attr('hidden', true);
        }
            
        $.ajax({
            dataType: 'json',
            cache : true,
            method: 'post',
            data: form,
            url: url,
            error: function(xhr, textStatus, errorThrown){
                alert('Ha ocurrido un error al generar la solicitud.'); 
            },
            success: function (response) {
                if(response.status == 200){
                    $('.modal-body').html('  <div class="row"><div class="col-12 d-flex justify-content-center"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></div>');
                    $('.modal-footer>button').attr('disabled', true);
                    window.location.href = window.location.origin + '/mi-escuela/componentes';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message>ul').html(response.message);
            }
        });
    },

    validate_form(form){

        let message_error = '';

        var date = new Date();
        var fecha_actual = new Date(date.getFullYear(),date.getMonth(),date.getDate());


        var mydate = document.getElementById('caducidad').value
        var info = mydate.split('/');
        var fecha =  info[1] + '/' +  info[0]  + '/' +  info[2];
        const fecha_dacucidad = new Date(fecha);

    

       

        if($('[name="nombre"]').val() == ""){
            message_error+= '<li>El <code>Nombre</code> no puede <code> estas vacio</code>.</li>';
        }

        if($('[name="fabricante"]').val() == ""){
            message_error+= '<li>El <code>Fabricante</code> no puede <code> estas vacio</code></li>';
        }

        if($('[name="descripcion"]').val() == ""){
            message_error+= '<li>El <code>Descripcion</code> no puede <code> estas vacio</code>.</li>';
        }

        if($('[name="caducidad"]').val() == ""){
            message_error+= '<li>El <code>Caducidad</code> no puede <code> estas vacio</code> ademas debe ser una <code>Fecha</code>.</li>';
        }

        if( fecha_dacucidad < fecha_actual ){
            message_error+= '<li>La <code>Fecha de Caducidad </code> no puede ser <code> Menor a La Fecha actual </code>.</li>';
        }
        
        if($('[name="tipo_componente"]').val() == ""){
            message_error+= '<li>Debes seleccionar un <code>Tipo de Componente</code>.</li>';
        }

        if($('[name="aeronave"]').val() == ""){
            message_error+= '<li>Debes seleccionar una <code>Aeronave</code>.</li>';
        }

        if($('[name="instalacion"]').val() == ""){
            message_error+= '<li>Debes seleccionar <code>Sí</code> o <code>No</code> en la instalación.</li>';
        }

        return message_error;
    },

    process_delete : function(){

        let form = $('#process_delete').serializeArray();
        let url = $('#process_delete').attr('action');
        let confirmation_question = form[2].value;
        
        console.log(confirmation_question);

        if(confirmation_question == false){
            $('.close').click();
            return false;
        }
        
        $.ajax({
            dataType: 'json',
            cache : true,
            method: 'post',
            data: form,
            url: url,
            error: function(xhr, textStatus, errorThrown){
                alert('Ha ocurrido un error al generar la solicitud.'); 
            },
            success: function (response) {
                if(response.status == 200){
                    window.location.href = window.location.origin + '/mi-escuela/componentes';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },



    process_ermengencia : function(){

        let form = $('#process_delete').serializeArray();
        let url = $('#process_delete').attr('action');
        let confirmation_question = form[2].value;
        
        console.log(confirmation_question);

        if(confirmation_question == false){
            $('.close').click();
            return false;
        }
        
        $.ajax({
            dataType: 'json',
            cache : true,
            method: 'post',
            data: form,
            url: url,
            error: function(xhr, textStatus, errorThrown){
                alert('Ha ocurrido un error al generar la solicitud.'); 
            },
            success: function (response) {
                if(response.status == 200){
                    window.location.href = window.location.origin + '/mi-escuela/componentes';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },

    
}