$(document).ready(function () {
    $("#txt_usuario").select2();
    $("#txt_estado").select2();
    ObtenerProyecto();
    $(".btnModificar").click(function () {
        var url = basepath + '/servicio/ModificarProyecto';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'PROid_proyecto': $("#txt_id_proyecto").val(),
                'PROnombre_proyecto': $("#txt_nombre_proyecto").val(),
                'USUid_usuario': $("#txt_usuario").val(),
                'PROfecha_inicio_proyecto': $("#txt_fecha_inicio").val(),
                'PROfecha_fin_proyecto': $("#txt_fecha_fin").val(),
                'PROestado_proyecto': $("#txt_estado").val()
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se modifico satisfactoriamente', 'Mensaje Servidor');
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            },
            error:function (data) {
                var validar = data.responseJSON;
                var errors = validar.errors;
                console.log(errors.PROnombre_proyecto[0]);
            }
        });
    });
    $(".btnVolver").click(function () {
        let url = basepath + '/Proyecto';
        window.location.replace(url);
    });
});

function ListarUsuarios(id_usuario) {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ListarUsuarios',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_usuario").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#txt_usuario").append('<option value="' + dat.USUid_usuario + '">' + dat.USUnombre_usuario + ' ' + dat.USUapellido_usuario + '</option>');
                });
                $("#txt_usuario").val(id_usuario).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function ObtenerProyecto() {
    var url = basepath + '/servicio/EditarProyecto';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': $("#txt_id_proyecto").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_nombre_proyecto").val(resp.PROnombre_proyecto);
                $("#txt_fecha_inicio").val(resp.PROfecha_inicio_proyecto);
                $("#txt_fecha_fin").val(resp.PROfecha_fin_proyecto);
                $("#txt_estado").val(resp.PROestado_proyecto).change();
                ListarUsuarios(resp.USUid_usuario);

            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}