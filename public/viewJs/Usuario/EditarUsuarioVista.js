$(document).ready(function () {
    ObtenerUsuario();
    $("#txt_tipo_usuario").select2();
    $("#frmNuevo").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: basepath + '/servicio/ModificarUsuario',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
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
    $(".btnVolver").click(function () {
        let url = basepath + '/Usuario';
        window.location.replace(url);
    });

});

function ObtenerUsuario() {
    var url = basepath + '/servicio/EditarUsuario';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'USUid_usuario': $("#txt_id_usuario").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_nombre_usuario").val(resp.USUnombre_usuario);
                $("#txt_apellido_usuario").val(resp.USUapellido_usuario);
                $("#txt_dni_usuario").val(resp.USUdni_usuario);
                $("#txt_celular_usuario").val(resp.USUcelular_usuario);
                $("#txt_email_usuario").val(resp.USUemail_usuario);
                $("#txt_tipo_usuario").val(resp.USUtipo_usuario).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}
