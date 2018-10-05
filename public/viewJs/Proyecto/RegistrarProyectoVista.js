$(document).ready(function () {
    $("#txt_usuario").select2();
    $("#txt_estado").select2();
    ListarUsuarios();
    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/RegistrarProyecto';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'PROnombre_proyecto': $("#txt_nombre_proyecto").val(),
                'USUid_usuario': $("#txt_usuario").val(),
                'PROfecha_inicio_proyecto': $("#txt_fecha_inicio").val(),
                'PROfecha_fin_proyecto': $("#txt_fecha_fin").val(),
                'PROestado_proyecto': $("#txt_estado").val()
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se registro satisfactoriamente', 'Mensaje Servidor');
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            },
            error:function (data) {
                // debugger
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

function ListarUsuarios() {
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
                $("#txt_usuario").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}