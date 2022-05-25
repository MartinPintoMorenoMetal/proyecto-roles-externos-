var Licences = {
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
                    window.location.href = window.location.origin + '/mi-escuela/licencias';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message>ul').html(response.message);
            }
        });

    },

    validate_form(form){
        let message_error = '';
        
        $.each(form, function(i, field){
            if(field.value == '') message_error = '<li>Verificar <code>datos ingresados</code> y los <code>campos que son obligatorios</code> para el registro.</li>';
        });

        return message_error;
    },
    

    
}

