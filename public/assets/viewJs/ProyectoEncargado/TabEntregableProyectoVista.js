$(document).ready(function () {
    fncListarFasesProyecto();
    fncListarEntregableProyecto();
    $("#FaseEntregableProyecto").select2();
    $("#TabEntregables").click(function () {
        fncListarFasesProyecto();
        fncListarEntregableProyecto();
        $("#TablaEntregableDisponible tbody").empty();
    });
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
                            '                            <input type="checkbox" class="entregablechk" value="' + value.ENTRid_entregable + '">\n' +
                            '                        </td>\n' +
                            '                    </tr>');
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
                    
                    var est = response.estado;
                    if (est === true) {
                        toastr.success('Se ha registrado exitosamente', 'Mensaje Servidor');
                        fncListarEntregableProyecto();
                        $("#TablaEntregableDisponible input:checkbox").attr('checked', false);
                    } else {
                        toastr.error('Error', 'Mensaje Servidor');
                    }
                }
            });
        } else {
            toastr.error('Seleccione un Entregable', 'Mensaje Servidor');
        }
    });

    $(document).on('change', '.CheckEstadoEntregable', function () {
        if ($(this).is(':checked')) {
            var EntregableProyectoId = $(this).val();
            var Estado = 1;
            fncCambiarEstadoEntregableProyecto(EntregableProyectoId,Estado);
        } else {
            var EntregableProyectoId = $(this).val();
            var Estado = 0;
            fncCambiarEstadoEntregableProyecto(EntregableProyectoId,Estado);
        }
    })

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
function fncListarFasesProyecto() {
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
                $("#FaseEntregableProyecto").append('<option value="">--Seleccione una Fase--</option>')
                $.each(resp, function (key, value) {
                    $("#FaseEntregableProyecto").append('<option value="' + value.FAid_fase + '">' + value.FAnombre_fase + '</option>')
                })
            }
        }
    })
}

function fncListarEntregableProyecto() {
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
                                    return '<label class="switch switch-primary">\n' +
                                        '            <input class="switch-input CheckEstadoEntregable" type="checkbox" value="' + value.ENTRPROid_entregableproyecto + '" checked="checked">\n' +
                                        '            <span class="switch-track"></span>\n' +
                                        '            <span class="switch-thumb"></span>\n' +
                                        '        </label>';
                                } else {
                                    return '<label class="switch switch-primary">\n' +
                                        '            <input class="switch-input CheckEstadoEntregable" type="checkbox" value="' + value.ENTRPROid_entregableproyecto + '">\n' +
                                        '            <span class="switch-track"></span>\n' +
                                        '            <span class="switch-thumb"></span>\n' +
                                        '        </label>';
                                }
                            }
                        }
                    ]
                });
            }
        }
    })
}