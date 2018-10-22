$(document).ready(function () {
    $.when(llenarSelect(basepath + "/servicio/ListarFasesProyecto", {
        '_token': $('input[name=_token]').val(),
        'PROid_proyecto': $("#id_proyecto_encargado").val()
    }, "FaseEntregableProyecto", "FAid_fase", "FAnombre_fase", "")).then(function (response, textStatus) {
        $("#FaseEntregableProyecto").select2();
    });    
    $("#FaseEntregableProyecto").change(function () {
        var fase_id = $(this).val();
        var proyecto_id = $("#id_proyecto_encargado").val();
        $.when(llenarSelect(basepath + "/servicio/ListarEntregableFaseProyecto", {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id,
            'FAid_fase':fase_id
        }, "EntregableTarea", "ENTRPROid_entregableproyecto", "ENTRnombre_entregable", "")).then(function (response, textStatus) {
            $("#EntregableTarea").select2();
        });
    });
    
    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/RegistrarTareaEntregable';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'FAid_fase': $("#FaseEntregableProyecto").val(),
                'ENTPROid_entregableproyecto': $("#EntregableTarea").val(),
                'TAnombre_tarea': $("#TareaNombre").val(),
                'TAdescripcion_tarea': $("#TareaDescripcion").val()
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se registro satisfactoriamente', 'Mensaje Servidor');
                    $('.form-control').val('');

                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });
    });
});

