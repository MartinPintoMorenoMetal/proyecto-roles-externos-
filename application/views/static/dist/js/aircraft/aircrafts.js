var Aircrafts = {
    process_form : function(){  

        let form = $('#form').serializeArray();
        let url = $('#form').attr('action');
        let message_error = Aircrafts.validate_form(form);
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
                    window.location.href = window.location.origin + '/mi-escuela/aeronaves';
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
        var fecha_actual = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        var mydate = document.getElementById('fc_anio_fab').value
        var info = mydate.split('/');
        var fecha = info[1] + '/' + info[0] + '/' + info[2];
        const fc_anio_fab = new Date(fecha);

        var mydate_inspeccion_anual = document.getElementById('inspeccion_anual').value
        var info_inspeccion_anual = mydate_inspeccion_anual.split('/')
        var fecha_inspeccion_anual = info_inspeccion_anual[1] + '/' + info_inspeccion_anual[0] + '/' + info_inspeccion_anual[2];
        const fc_inspeccion_anual = new Date(fecha_inspeccion_anual);


        var mydate_aeronavegabilidad = document.getElementById('aeronavegabilidad').value
        var info_aeronavegabilidad = mydate_aeronavegabilidad.split('/')
        var fecha_aeronavegabilidad = info_aeronavegabilidad[1] + '/' + info_aeronavegabilidad[0] + '/' + info_aeronavegabilidad[2];
        const fc_aeronavegabilidad = new Date(fecha_aeronavegabilidad);

        
        $.each(form, function(i, field){
            if(field.value == '') message_error = '<li>Verificar <code>datos ingresados</code> y rellenar <code> todos los campos </code> para el registro.</li>';
        });

        
        if (fecha_actual > fc_inspeccion_anual) {
            message_error += '<li>La <code>Fecha de Insepccion anual</code> no puede  ser <code> anterior </code> a la <code>Fecha actual </code>.</li>';
        }

        if (fecha_actual > fc_aeronavegabilidad) {
            message_error += '<li>La <code>Fecha de Aeronavegabilidad</code> no puede  ser <code> anterior </code> a la <code>Fecha actual </code>.</li>';
        }

        if (fc_anio_fab > fecha_actual) {
            message_error += '<li>La <code>Fecha Fabricación</code> no puede  ser <code> posterior </code> a la <code>Fecha actual </code>.</li>';
        }






        
        if($('[name="fc_anio_fab"]').val() == ""){
            message_error+= '<li>La <code>Fecha Fabricación</code> no puede <code> estar vacía</code> ademas debe ser una <code>Fecha</code>.</li>';
        }
        
        
        
    
        if($('[name="fc_inspeccion_anual"]').val() == ""){
            message_error+= '<li>La <code>Fecha inspección anual</code> no puede <code> estar vacía</code> ademas debe ser una <code>Fecha</code>.</li>';
        }

        if($('[name="fc_aeronavegabilidad"]').val() == ""){
            message_error+= '<li>La <code>Fecha Aeronavegabilidad</code> no puede <code> estar vacía</code> ademas debe ser una <code>Fecha</code>.</li>';
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
                    window.location.href = window.location.origin + '/mi-escuela/aeronaves';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },
    
    process_emergencia : function(){

        let form = $('#process_emergencia').serializeArray();
        let url = $('#process_emergencia').attr('action');
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
                    window.location.href = window.location.origin + '/mi-escuela/aeronaves';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },
}

