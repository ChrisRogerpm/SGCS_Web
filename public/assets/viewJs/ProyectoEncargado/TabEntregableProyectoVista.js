$(document).ready(function () {
    fncListarFasesProyecto();
    $("#FaseEntregableProyecto").select2();
    $("#TabEntregables").click(function () {
        fncListarFasesProyecto();
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
                    $("#tablaentregableproyecto tbody").empty();
                    $.each(resp, function (key, value) {
                        $("#tablaentregableproyecto tbody").append('<tr>\n' +
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
        $("#tablaentregableproyecto input:checkbox:checked").map(function () {
            entregable_id.push($(this).val());
        });

        if (entregable_id.length > 0) {
            $.ajax({
                type: 'POST',
                url: basepath + '/servicio/RegistrarEntregableProyecto',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'PROid_proyecto': proyecto_id,
                    'ENTRid_entregable':entregable_id
                },
                success: function (response) {
                    var est = response.estado;
                    if (est === true){
                        toastr.success('Se ha registrado exitosamente','Mensaje Servidor');
                    } else{
                        toastr.error('Error','Mensaje Servidor');
                    }
                }
            });
        } else {
            toastr.error('Seleccione un Entregable','Mensaje Servidor');
        }
    });

});


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
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            var resp = response.data;
            $(".contenedor_fase_entregable").empty().append('<label class="form-check-label">\n' +
                '                <input class="form-check-input" type="checkbox" name="ENTRid_entregable" value="' + resp.das + '">\n' +
                '                ' + resp.dqwd + '   </label>')
        }
    })
}