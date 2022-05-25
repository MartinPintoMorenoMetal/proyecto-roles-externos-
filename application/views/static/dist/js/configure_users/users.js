var Users = {
    process_form : function(){
        
        let form = $('#form').serializeArray();
        let url = $('#form').attr('action');
        let message_error = Users.validate_form(form);
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
                    window.location.href = window.location.origin + '/mi-escuela/configurar-usuarios/usuarios';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message>ul').html(response.message);
            }
        });
    },

    validate_form(form){
        let message_error = '';
        let bo_update = $('[name="id"]').length;
        let groups = $('[name="groups"]').val();

        $.each(form, function(i, field){
            if(bo_update && field.name == 'password') return true;
            if(groups.indexOf('3') == -1 && field.name == 'fc_expiration_medicine' && field.value == '') return true;
            
            if(field.value == '') message_error = '<li>Verificar <code>datos ingresados</code> y los <code>campos que son obligatorios</code> para el registro.</li>';
        });
        
        if($('[name="groups"]').val().length == 0){
            message_error+= '<li>Debe seleccionar al menos un <code>grupo</code>.</li>';
        }

        if(Users.validate_email($('[name="email"]').val()) == false && $('[name="email"]').val() != ''){
            message_error+= '<li>El formato del <code>correo electrónico</code> es invalido.</li>';
        }

        if($('[name="username"]').val().length < 8){
            message_error+= '<li>El <code>usuario</code> debe tener al menos <code> 8 caracteres</code>.</li>';
        }

        if($('[name="password"]').val().length < 8 &&
            bo_update == false){
            message_error+= '<li>La <code>contraseña</code> debe tener al menos <code> 8 caracteres</code>.</li>';
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
                    window.location.href = window.location.origin + '/mi-escuela/configurar-usuarios/usuarios';
                    return false;
                }
                
                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },

    validate_email(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    },

    view_password : function(){
        let password = $('[name="password"]');
        
        if(password.prop('type') === 'password'){
            password.prop('type', 'text');
            $('#view_password>i').removeClass("fa fa-eye").addClass("fas fa-eye-slash");
        }
        else{
            password.prop('type', 'password');
            $('#view_password>i').removeClass("fas fa-eye-slash").addClass("fa fa-eye");
        }
    },

    display_pilot_information : function(){
        let groups = $('[name="groups"]').val();

        if(groups.indexOf('3') != -1){
            $('#pilot_information').removeAttr('hidden');
        }
        else{
            $('#pilot_information').attr('hidden', true);
        }
    },

    display_groups : function (_this){
        let collapse = $(_this.attr('href'));

        if(collapse.hasClass('show')){
            _this.html('Desplegar grupos +');
        }
        else{
            _this.html('Ocultar grupos -');
        }
    }
}

