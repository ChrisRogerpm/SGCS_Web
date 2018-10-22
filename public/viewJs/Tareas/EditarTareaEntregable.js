$(document).ready(function () {
    $("#TareaEstado").select2();
    fncObtenerTareaEntregable();
    $("#FaseEntregableProyecto").change(function () {
        var fase_id = $(this).val();
        var proyecto_id = $("#id_proyecto_encargado").val();
        $.when(llenarSelect(basepath + "/servicio/ListarEntregableFaseProyecto", {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id,
            'FAid_fase': fase_id
        }, "EntregableTarea", "ENTRPROid_entregableproyecto", "ENTRnombre_entregable", "")).then(function (response, textStatus) {
            $("#EntregableTarea").select2();
        });
    });

    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/ModificarTareaEntregable';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'TAid_tarea':$("#id_tarea_entregable").val(),
                'FAid_fase': $("#FaseEntregableProyecto").val(),
                'ENTPROid_entregableproyecto': $("#EntregableTarea").val(),
                'TAnombre_tarea': $("#TareaNombre").val(),
                'TAdescripcion_tarea': $("#TareaDescripcion").val(),
                'TAestado_tarea': $("#TareaEstado").val(),
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se actualizo satisfactoriamente', 'Mensaje Servidor');
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });
    });

});

function fncObtenerTareaEntregable() {
    var url = basepath + '/servicio/ObtenerTareaEntregable';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'TAid_tarea': $("#id_tarea_entregable").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {

                $.when(llenarSelect(basepath + "/servicio/ListarFasesProyecto", {
                    '_token': $('input[name=_token]').val(),
                    'PROid_proyecto': resp.PROid_proyecto,
                }, "FaseEntregableProyecto", "FAid_fase", "FAnombre_fase", resp.FAid_fase)).then(function (response, textStatus) {
                    $("#FaseEntregableProyecto").select2();
                });
                $.when(llenarSelect(basepath + "/servicio/ListarEntregableFaseProyecto", {
                    '_token': $('input[name=_token]').val(),
                    'PROid_proyecto': resp.PROid_proyecto,
                    'FAid_fase': resp.FAid_fase
                }, "EntregableTarea", "ENTRPROid_entregableproyecto", "ENTRnombre_entregable", resp.ENTPROid_entregableproyecto)).then(function (response, textStatus) {
                    $("#EntregableTarea").select2();
                });
                $("#id_proyecto_encargado").val(resp.PROid_proyecto);
                $("#TareaNombre").val(resp.TAnombre_tarea);
                $("#TareaDescripcion").val(resp.TAnombre_tarea);
                $("#TareaEstado").val(resp.TAestado_tarea).change();
                $(".volver").append('<a href="' + basepath + '/TareaEntregable/' + resp.PROid_proyecto + '"\n' +
                    '                       class="btn btn-warning btnNuevo"><i\n' +
                    '                                class="icon-arrow-left13 position-left"></i> Volver a Lista de Tareas</a>')

            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}