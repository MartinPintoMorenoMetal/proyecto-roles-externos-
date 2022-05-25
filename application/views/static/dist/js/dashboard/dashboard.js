var Dashboard = {
    user_indicators: function () {

        let dv = $('#user-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_active_users = Dashboard.percent(response.USUARIOS_ACTIVOS, response.TOTAL_USUARIOS);
                let percent_disabled_users = Dashboard.percent(response.USUARIOS_DESHABILITADOS, response.TOTAL_USUARIOS);

                // Set Indicators
                dv.find('#total-users').html(
                    `<span class="description-percentage text-primary">
                       <i class="fas fa-caret-right mr-04"></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_USUARIOS}</h5>
                    <span class="description-text">Total de Usuarios</span>`
                );

                dv.find('#active-users').html(
                    `<span class="description-percentage ${percent_active_users.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_active_users.result} %
                    </span>
                    <h5 class="description-header">${response.USUARIOS_ACTIVOS}</h5>
                    <span class="description-text">Usuarios Activos</span>`
                );

                dv.find('#disabled-users').html(
                    `<span class="description-percentage ${percent_disabled_users.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_disabled_users.result} %
                    </span>
                    <h5 class="description-header">${response.USUARIOS_DESHABILITADOS}</h5>
                    <span class="description-text">Usuarios Deshabilitados</span>`
                );

                // Set Pie Chart
                var dom = document.getElementById("user-indicators-pie");
                var myChart = echarts.init(dom);

                var option = {
                    series: [
                        {
                            name: 'Indicadores de Usuarios',
                            type: 'pie',
                            radius: [30, 70],
                            center: ['50%', '50%'],
                            roseType: 'area',
                            label: {
                                formatter: '{name|{b}}\n{value|{c}}',
                                rich: {
                                    value: {
                                        fontSize: 12,
                                        color: '#999'
                                    }
                                }
                            },
                            data: [
                                { value: response.ADMINISTRADORES, name: 'Administradores' },
                                { value: response.OPERADORES, name: 'Operadores' },
                                { value: response.PILOTOS, name: 'Pilotos' },
                                { value: response.MANTENEDORES, name: 'Mantenedores' },
                                { value: response.CONSULTORES, name: 'Consultores' },
                            ]
                        }
                    ],
                };

                if (option && typeof option === 'object') {
                    myChart.setOption(option);
                }
            }
        });
    },


    component_indicators: function () {

        let dv = $('#component-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_install_users = Dashboard.percent(response.COMPONENTES_INSTALADOS, response.TOTAL_COMPONENTES);
                let percent_desinstall_users = Dashboard.percent(response.COMPONENTES_NO_INSTALADOS, response.TOTAL_COMPONENTES);

                // Set Indicators
                dv.find('#total-components').html(
                    `<span class="description-percentage text-primary">
                       <i class="fas fa-caret-right mr-04"></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_COMPONENTES}</h5>
                    <span class="description-text">Total de Componentes</span>`
                );

                dv.find('#install-components').html(
                    `<span class="description-percentage ${percent_install_users.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_install_users.result} %
                    </span>
                    <h5 class="description-header">${response.COMPONENTES_INSTALADOS}</h5>
                    <span class="description-text">Componentes Instalados</span>`
                );

                dv.find('#desinstall-components').html(
                    `<span class="description-percentage ${percent_desinstall_users.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_desinstall_users.result} %
                    </span>
                    <h5 class="description-header">${response.COMPONENTES_NO_INSTALADOS}</h5>
                    <span class="description-text">Componentes No Instalados</span>`
                );

                // Set Pie Chart
                var dom = document.getElementById("component-indicators-pie");
                var myChart = echarts.init(dom);

                var option = {
                    series: [
                        {
                            name: 'Indicador de tipos de componentes',
                            type: 'pie',
                            radius: [30, 70],
                            center: ['50%', '50%'],
                            roseType: 'area',
                            label: {
                                formatter: '{name|{b}}\n{value|{c}}',
                                rich: {
                                    value: {
                                        fontSize: 12,
                                        color: '#999'
                                    }
                                }
                            },
                            data: [
                                { value: response.MOTOR_DE_HELICOPTERO, name: 'Motor de Helicóptero' },
                                { value: response.PALAS_DE_HELICOPTERO, name: 'Palas de helicóptero' },
                                { value: response.ESTABILIZADORES, name: 'estabilizadores ' },
                                { value: response.CAMARAS_DE_COMBUSTION, name: 'Cámaras de combustión' },
                                { value: response.ENGRANAJES, name: 'Engranajes' },
                                { value: response.EJE_PRINCIPAL, name: 'Eje principal' },
                                { value: response.TOBERAS, name: 'Toberas' },
                                { value: response.TREN_DE_ATERRIZAJE, name: 'tren de aterrizaje' },
                                { value: response.FUSELAJE, name: 'Fuselaje' },
                                { value: response.CABINA, name: 'cabina' },
                                { value: response.ALAS, name: 'alas' },
                                { value: response.ALERONES, name: 'alerones' },
                            ]
                        }
                    ],
                };

                if (option && typeof option === 'object') {
                    myChart.setOption(option);
                }
            }
        });
    },

    vuelos_indicators: function () {

        let dv = $('#vuelos-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_vuelos_finalizados = Dashboard.percent(response.FINALIZADO, response.TOTAL_VUELOS);
                let percent_vuelos_agendados = Dashboard.percent(response.AGENDADO, response.TOTAL_VUELOS);

                // Set Indicators
                dv.find('#total-vuelos').html(
                    `<span class="description-percentage text-primary">
                       <i class="fas fa-caret-right mr-04"></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_VUELOS}</h5>
                    <span class="description-text">Total de vuelos</span>`
                );

                dv.find('#vuelos-finalizados').html(
                    `<span class="description-percentage ${percent_vuelos_finalizados.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_vuelos_finalizados.result} %
                    </span>
                    <h5 class="description-header">${response.FINALIZADO}</h5>
                    <span class="description-text">Vuelos Finalizados</span>`
                );

                dv.find('#vuelos-agendados').html(
                    `<span class="description-percentage ${percent_vuelos_agendados.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_vuelos_agendados.result} %
                    </span>
                    <h5 class="description-header">${response.AGENDADO}</h5>
                    <span class="description-text">Vuelos Agendados</span>`
                );

                // Set Pie Chart
                var dom = document.getElementById("vuelos-indicators-pie");
                var myChart = echarts.init(dom);

                var option = {
                    series: [
                        {
                            name: 'Indicador de condiciones de vuelo',
                            type: 'pie',
                            radius: [30, 70],
                            center: ['50%', '50%'],
                            roseType: 'area',
                            label: {
                                formatter: '{name|{b}}\n{value|{c}}',
                                rich: {
                                    value: {
                                        fontSize: 12,
                                        color: '#999'
                                    }
                                }
                            },
                            data: [
                                { value: response.MVFR, name: 'MVFR' },
                                { value: response.LIFR, name: 'LIFR' },
                                { value: response.VFR, name: 'VFR' },
                                { value: response.IFR, name: 'IFR' },
                            ]
                        }
                    ],
                };

                if (option && typeof option === 'object') {
                    myChart.setOption(option);
                }
            }
        });
    },


    aeronaves_indicators: function () {

        let dv = $('#aeronaves-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_aeronaves = Dashboard.percent(response.AERONAVES, response.TOTAL_AERONAVES);
                let percent_helicopteros = Dashboard.percent(response.HELICOPTEROS, response.TOTAL_AERONAVES);

                // Set Indicators
                dv.find('#total-aeronaves').html(
                    `<span class="description-percentage text-primary">
                       <i class="fas fa-caret-right mr-04"></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_AERONAVES}</h5>
                    <span class="description-text">Total de Aeronaves</span>`
                );

                dv.find('#aeronaves').html(
                    `<span class="description-percentage ${percent_aeronaves.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_aeronaves.result} %
                    </span>
                    <h5 class="description-header">${response.AERONAVES}</h5>
                    <span class="description-text">Aviones</span>`
                );

                dv.find('#helicopteros').html(
                    `<span class="description-percentage ${percent_helicopteros.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_helicopteros.result} %
                    </span>
                    <h5 class="description-header">${response.HELICOPTEROS}</h5>
                    <span class="description-text">Helicopteros</span>`
                );

                // Set Pie Chart
                var dom = document.getElementById("estados-aeronave-pie");
                var myChart = echarts.init(dom);

                var option = {
                    series: [
                        {
                            name: 'Indicador de estados de aeronaves',
                            type: 'pie',
                            radius: [30, 70],
                            center: ['50%', '50%'],
                            roseType: 'area',
                            label: {
                                formatter: '{name|{b}}\n{value|{c}}',
                                rich: {
                                    value: {
                                        fontSize: 12,
                                        color: '#999'
                                    }
                                }
                            },
                            data: [
                                { value: response.EN_MANTENCION, name: 'En mantencion' },
                                { value: response.INSTALACION_COMPONENTES, name: 'Sin omponentes' },
                                { value: response.AGENDADA, name: 'Agendado' },
                                { value: response.FUERA_SERVICIO, name: 'Fuera de servicio' },
                                { value: response.EN_SERVICIO, name: 'En Servicio' },

                            ]
                        }
                    ],
                };

                if (option && typeof option === 'object') {
                    myChart.setOption(option);
                }
            }
        });
    },


    mantenimientos_indicators: function () {

        let dv = $('#mantenimientos-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_mantenimientos_programados = Dashboard.percent(response.PROGRAMADOS, response.TOTAL_MANTENIMIENTOS);
                let percent_mantenimientos_finalizados = Dashboard.percent(response.TERMINADOS, response.TOTAL_MANTENIMIENTOS);

                // Set Indicators
                dv.find('#total-mantenimientos').html(
                    `<span class="description-percentage text-primary">
                       <i class="fas fa-caret-right mr-04"></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_MANTENIMIENTOS}</h5>
                    <span class="description-text">Total de mantenimientos</span>`
                );

                dv.find('#programado').html(
                    `<span class="description-percentage ${percent_mantenimientos_programados.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_mantenimientos_programados.result} %
                    </span>
                    <h5 class="description-header">${response.PROGRAMADOS}</h5>
                    <span class="description-text">Mantenimientos Programados</span>`
                );

                dv.find('#finalizados').html(
                    `<span class="description-percentage ${percent_mantenimientos_finalizados.color}">
                        <i class="fas fa-caret-right mr-04"></i> ${percent_mantenimientos_finalizados.result} %
                    </span>
                    <h5 class="description-header">${response.TERMINADOS}</h5>
                    <span class="description-text">Mantenimientos Terminados</span>`
                );

                // Set Pie Chart
                var dom = document.getElementById("tipos-mantenimiento-pie");
                var myChart = echarts.init(dom);

                var option = {
                    series: [
                        {
                            name: 'Indicador de tipos de mantenimientosCORRECTIVO',
                            type: 'pie',
                            radius: [30, 70],
                            center: ['50%', '50%'],
                            roseType: 'area',
                            label: {
                                formatter: '{name|{b}}\n{value|{c}}',
                                rich: {
                                    value: {
                                        fontSize: 12,
                                        color: '#999'
                                    }
                                }
                            },
                            data: [
                                { value: response.CORRECTIVO, name: 'Correctivo' },
                                { value: response.PREVENTIVO, name: 'Preventivo' },
                                { value: response.PREVENTIVO_DIARIO, name: 'Preventivo Diario' },
                                { value: response.PREVENTIVO_TIEMPO_LÍMITE, name: 'Preventivo, tiempo limitado' },
                                { value: response.PREVENTIVO_REVISIONES_CICLO, name: 'preventivo, revisiones en ciclo' },
                                { value: response.PREVENTIVO_REVISIÓN_CARTAS, name: 'preventivo, revision de cartas' },

                            ]
                        }
                    ],
                };

                if (option && typeof option === 'object') {
                    myChart.setOption(option);
                }
            }
        });
    },


    //    total_vuelos_indicators: function () {

    //        let dv = $('#total-vuelos');
    //         let url = dv.attr('data-url');

    //         $.ajax({
    //             dataType: 'json',
    //             cache: true,
    //             method: 'get',
    //             data: {},
    //             url: url,
    //             error: function (xhr, textStatus, errorThrown) {
    //                 alert('Ha ocurrido un error al generar la solicitud.');
    //             },
    //             success: function (response) {
    //                 // console.log(response);

    //                 // let percent_vuelos_finalizados = Dashboard.percent(response.TOTAL_VUELOS);
    //                 // let percent_vuelos_agendados = Dashboard.percent( response.TOTAL_VUELOS);

    //                 // Set Indicators
    //                 dv.find('#total-vuelos').html(
    //                     `<span class="description-percentage text-primary">
    //                        <i class="fas fa-caret-right mr-04"></i> 100 %
    //                     </span>
    //                     <h5 class="description-header">${response.TOTAL_VUELOS}</h5>
    //                     <span class="description-text">Total de vuelos</span>`
    //                 );

    //                 // Set Pie Chart

    //                 if (option && typeof option === 'object') {
    //                     myChart.setOption(option);
    //                 }
    //             }
    //         });
    //     },




    total_vuelos_indicators: function () {

        let dv = $('#total-vuelos-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_vuelos_finalizados = Dashboard.percent(response.FINALIZADO, response.TOTAL_VUELOS);
                let percent_vuelos_agendados = Dashboard.percent(response.AGENDADO, response.TOTAL_VUELOS);

                // Set Indicators
                dv.find('#total-vuelos').html(
                    `<span class="description-header"  class="Azul">
                       <i ></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_VUELOS}</h5>
                    <span class="description-text">Total de vuelos</span>`
                );

            }
        });
    },
    total_aeronaves_indicators: function () {

        let dv = $('#total-aeronaves-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_aeronaves = Dashboard.percent(response.AERONAVES, response.TOTAL_AERONAVES);
                let percent_helicopteros = Dashboard.percent(response.HELICOPTEROS, response.TOTAL_AERONAVES);

                // Set Indicators
                dv.find('#total-aeronaves').html(
                    `<span class="description-header"  class="Azul">
                       <i ></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_AERONAVES}</h5>
                    <span class="description-text">Total de Aeronaves</span>`
                );
            }
        });
    },
    total_mantenimientos_indicators: function () {

        let dv = $('#total-mantenimientos-indicators');
        let url = dv.attr('data-url');

        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_mantenimientos_programados = Dashboard.percent(response.PROGRAMADOS, response.TOTAL_MANTENIMIENTOS);
                let percent_mantenimientos_finalizados = Dashboard.percent(response.TERMINADOS, response.TOTAL_MANTENIMIENTOS);

                // Set Indicators
                dv.find('#total-mantenimientos').html(
                    `<span class="description-header"  class="Azul">
                       <i ></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_MANTENIMIENTOS}</h5>
                    <span class="description-text">Total de Mantenimientos</span>`
                );
            }
        });
    },


    aeronaves_no_disponibles_indicators: function () {

        let dv = $('#aeronaves-no-disponibles-indicators');
        let url = dv.attr('data-url');


        $.ajax({
            dataType: 'json',
            cache: true,
            method: 'get',
            data: {},
            url: url,
            error: function (xhr, textStatus, errorThrown) {
                alert('Ha ocurrido un error al generar la solicitud.');
            },
            success: function (response) {
                console.log(response);

                let percent_aeronaves = Dashboard.percent(response.TOTAL_NO_DISPONIBLES, response.INSTALACION_COMPONENTES,response.FUERA_SERVICIO);
                let percent_helicopteros = Dashboard.percent(response.HELICOPTEROS, response.TOTAL_AERONAVES);

                // Set Indicators
                dv.find('#no-disponibles').html(
                    `<span class="description-header"  class="Azul">
                       <i ></i> 100 %
                    </span>
                    <h5 class="description-header">${response.TOTAL_NO_DISPONIBLES}</h5>
                    <span class="description-text">Total Aeronaves no disponibles</span>`
                );

                // data: [
                //     { value: response.EN_MANTENCION, name: 'En mantencion' },
                //     { value: response.INSTALACION_COMPONENTES, name: 'Sin componentes' },
                //     { value: response.AGENDADA, name: 'Agendado' },
                //     { value: response.FUERA_SERVICIO, name: 'Fuera de servicio' },
                //     { value: response.EN_SERVICIO, name: 'En Servicio' },

                // ]
              
            }
        });
    },






    percent: function (value, total) {

        let result = Math.round((value * 100) / total);
        let color = 'text-muted';

        if (result <= 29) color = 'text-danger';
        if (result >= 30 && result <= 60) color = 'text-warning';
        if (result >= 61 && result <= 100) color = 'text-success';

        return {
            'result': result,
            'color': color
        }
    },

}

$(function () {
    //  User Indicators
    Dashboard.user_indicators();
    Dashboard.component_indicators();
    Dashboard.vuelos_indicators();
    Dashboard.aeronaves_indicators();
    Dashboard.mantenimientos_indicators();
    Dashboard.total_vuelos_indicators();
    Dashboard.total_aeronaves_indicators();
    Dashboard.total_mantenimientos_indicators();
    Dashboard.aeronaves_no_disponibles_indicators();

});