var Maintenance = {
    process_form: function () {

        let form = $('#form').serializeArray();
        let url = $('#form').attr('action');
        let message_error = Maintenance.validate_form(form);
        console.log(form);

        if (message_error != '') {
            $('#card-error').removeAttr('hidden');
            $('#error-message>ul').html(message_error);
            return false;
        }
        else {
            $('#card-error').attr('hidden', true);
        }

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'post',
            data: form,
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                if (response.status == 200) {
                    $('.modal-body').html('  <div class="row"><div class="col-12 d-flex justify-content-center"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></div>');
                    $('.modal-footer>button').attr('disabled', true);
                    window.location.href = window.location.origin + '/mi-escuela/mantenimientos';
                    return false;
                }

                $('#card-error').removeAttr('hidden');
                $('#error-message>ul').html(response.message);
            }
        });
    },


    validate_form(form) {
        let message_error = '';

        var date = new Date();
        var fecha_actual = new Date(date.getFullYear(), date.getMonth(), date.getDate());


        var mydate_inicio = document.getElementById('fc_inicio').value
        var info_inicio = mydate_inicio.split('/');
        var fecha_inicio = info_inicio[1] + '/' + info_inicio[0] + '/' + info_inicio[2];
        const fc_inicio = new Date(fecha_inicio);

        var mydate_termino = document.getElementById('fc_termino').value
        var info_termino = mydate_termino.split('/');
        var fecha_termino = info_termino[1] + '/' + info_termino[0] + '/' + info_termino[2];
        const fc_termino = new Date(fecha_termino)
        
        
        if ($('[name="fc_inicio"]').val() == "") {
            message_error += '<li>El campo <code> Fecha Inicio Del Mantenimiento </code> no puede <code> estar vacio </code> y debe ser <code> una Fecha </code> .</li>';
        }

        if (fc_inicio < fecha_actual) {
            message_error += '<li>La <code>Fecha de inicio del mantenimiento </code> no puede ser <code> Anterior a La Fecha actual </code>.</li>';
        }

        if (fc_termino < fecha_actual) {
            message_error += '<li>La <code>Fecha de termino del mantenimiento </code> no puede ser <code> Anterior a La Fecha actual </code>.</li>';
        }


        if (fc_inicio > fc_termino){
            message_error += '<li>La <code>Fecha de termino del mantenimiento </code> no puede ser <code> anterior a La Fecha de inicio </code>.</li>';
        }


        if ($('[name="fc_termino"]').val() == "") {
            message_error += '<li>El campo <code> Fecha de inicio</code> no puede <code> estar vacio </code> y debe ser <code> una Fecha </code> .</li>';
        }

        if ($('[name="id_tipo_mantenimieneto"]').val() == "") {
            message_error += '<li>Debes seleccionar un <code> Tipo De Mantenimiento</code>.</li>';
        }

        if ($('[name="id_aeronave"]').val() == "") {
            message_error += '<li>Debes seleccionar una <code> Aeronave </code>.</li>';
        }
        return message_error;

    },

    process_delete: function () {

        let form = $('#process_delete').serializeArray();
        let url = $('#process_delete').attr('action');
        let confirmation_question = form[2].value;

        console.log(confirmation_question);

        if (confirmation_question == false) {
            $('.close').click();
            return false;
        }

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'post',
            data: form,
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                if (response.status == 200) {
                    window.location.href = window.location.origin + '/mi-escuela/mantenimientos';
                    return false;
                }

                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });
    },



    process_end: function () {


        let form = $('#process_end').serializeArray();
        let url = $('#process_end').attr('action');
        let confirmation_question = form[2].value;

        console.log(confirmation_question);

        if (confirmation_question == false) {
            $('.close').click();
            return false;
        }

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'post',
            data: form,
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                if (response.status == 200) {
                    window.location.href = window.location.origin + '/mi-escuela/mantenimientos';
                    return false;
                }

                $('#card-error').removeAttr('hidden');
                $('#error-message').html(response.message);
            }
        });







    }










    

}