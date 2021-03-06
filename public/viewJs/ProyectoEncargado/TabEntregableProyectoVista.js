$(document).ready(function () {
    ListarFasesProyecto();
    fncListarEntregableProyecto();

    $("#TabEntregables").click(function () {
        ListarFasesProyecto();
        fncListarEntregableProyecto();
        $("#TablaEntregableDisponible tbody").empty();
    });

    $("#FaseEntregableProyecto").select2();

    $("#FaseEntregableProyecto").change(function () {
        var id_fase = $("#FaseEntregableProyecto").val();
        $.ajax({
            type: 'POST',
            url: basepath + '/servicio/ListarEntregablesFaseFiltro',
            data: {
                '_token': $('input[name=_token]').val(),
                'FAid_fase': id_fase
            },
            success: function (response) {
                let est = response.estado;
                let resp = response.data;
                if (est === true) {
                    $("#TablaEntregableDisponible tbody").empty();
                    $.each(resp, function (key, value) {
                        $("#TablaEntregableDisponible tbody").append('<tr>\n' +
                            '                        <td class="text-left">' + value.ENTRnombre_entregable + '</td>\n' +
                            '                        <td class="text-center">\n' +
                            '                            <input type="checkbox" class="styled" value="' + value.ENTRid_entregable + '">\n' +
                            '                        </td>\n' +
                            '                    </tr>');
                    });
                    $(".styled, .multiselect-container input").uniform({
                        radioClass: 'choice'
                    });
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });

    });
    $(".btnAgregarEntregableProyecto").click(function () {
        var entregable_id = [];
        var proyecto_id = $("#id_proyecto_encargado").val();
        var fase_id = $("#FaseEntregableProyecto").val();
        $("#TablaEntregableDisponible input:checkbox:checked").map(function () {
            entregable_id.push($(this).val());
        });

        if (entregable_id.length > 0) {
            $.ajax({
                type: 'POST',
                url: basepath + '/servicio/RegistrarEntregableProyecto',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'PROid_proyecto': proyecto_id,
                    'FAid_fase': fase_id,
                    'ENTRid_entregable': entregable_id
                },
                success: function (response) {
                    debugger
                    var est = response.estado;
                    if (est === true) {
                        toastr.success('Se ha registrado exitosamente', 'Mensaje Servidor');
                        fncListarEntregableProyecto();
                        $("#TablaEntregableDisponible tbody").empty();
                    } else {
                        toastr.error('Error', 'Mensaje Servidor');
                    }
                }
            });
        } else {
            toastr.error('Seleccione un Entregable', 'Mensaje Servidor');
        }
    });
});
function fncCambiarEstadoEntregableProyecto(EntregableProyectoId,Estado) {
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/CambiarEstadoEntregableProyecto',
        data: {
            '_token': $('input[name=_token]').val(),
            'ENTRPROid_entregableproyecto': EntregableProyectoId,
            'ENTRPROestado_entregable_proyecto': Estado
        },
        success: function (response) {
            var est = response.estado;
            if (est===true){
                toastr.success('Se ha actualizado exitosamente','Mensaje Servidor');
            }else{
                toastr.error('Servicio no encontrado','Mensaje Servidor');
            }
        }
    });
}
function ListarFasesProyecto() {
    const proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/ListarFasesProyecto',
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#FaseEntregableProyecto").empty();
                $("#FaseEntregableProyecto").append('<option value="">--Seleccione una Fase--</option>');
                $.each(resp, function (key, value) {
                    $("#FaseEntregableProyecto").append('<option value="' + value.FAid_fase + '">' + value.FAnombre_fase + '</option>')
                });

            }
        }
    })
}
function fncListarEntregableProyecto() {
    debugger
    const proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarEntregableProyecto",
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            
            var resp = response.data;
            var est = response.estado;
            if (est === true) {
                $(".ListaEntregableProyecto").empty().append('<table id="TablaEntregableProyecto" class="table table-striped  table-bordered table-nowrap dataTable" cellspacing="0" width="100%">\n' +
                    '        </table>');
                $("#TablaEntregableProyecto").DataTable({
                    data: resp,
                    columns: [
                        {data: "ENTRPROid_entregableproyecto", title: "Id"},
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {
                            data: null, title: "Estado",
                            render: function (value) {
                                if (value.ENTRPROestado_entregable_proyecto === 1) {
                                    // return '<label class="switch switch-primary">\n' +
                                    //     '            <input class="switch-input CheckEstadoEntregable" type="checkbox" value="' + value.ENTRPROid_entregableproyecto + '" checked="checked">\n' +
                                    //     '            <span class="switch-track"></span>\n' +
                                    //     '            <span class="switch-thumb"></span>\n' +
                                    //     '        </label>';
                                    return '<input type="checkbox" class="switch" data-on-text="Activo" data-off-text="Inactivo" data-on-color="primary" data-off-color="success" checked value="' + value.ENTRPROid_entregableproyecto + '">';
                                } else {
                                    // return '<label class="switch switch-primary">\n' +
                                    //     '            <input class="switch-input CheckEstadoEntregable" type="checkbox" value="' + value.ENTRPROid_entregableproyecto + '">\n' +
                                    //     '            <span class="switch-track"></span>\n' +
                                    //     '            <span class="switch-thumb"></span>\n' +
                                    //     '        </label>';
                                    return '<input type="checkbox" class="switch" data-on-text="Activo" data-off-text="Inactivo" data-on-color="primary" data-off-color="success" value="' + value.ENTRPROid_entregableproyecto + '">';
                                }
                            }
                        }
                    ],
                    "drawCallback": function (settings) {
                        $(".switch").bootstrapSwitch();
                        $('.switch').on('switchChange.bootstrapSwitch', function (event, state) {
                            if (state) {
                                var EntregableProyectoId = $(this).val();
                                var Estado = 1;
                                fncCambiarEstadoEntregableProyecto(EntregableProyectoId,Estado);
                            } else {
                                var EntregableProyectoId = $(this).val();
                                var Estado = 0;
                                fncCambiarEstadoEntregableProyecto(EntregableProyectoId,Estado);
                            }
                        });
                    }
                });
            }
        }
    })
}