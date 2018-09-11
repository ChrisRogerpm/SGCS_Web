$(document).ready(function () {
    ObtenerUsuario();
    handleiCheck();
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

function handleiCheck() {

    if (!$().iCheck)  return;
    $(':checkbox:not(.js-switch, .switch-input, .switch-iphone, .onoffswitch-checkbox, .ios-checkbox, .md-checkbox), :radio:not(.md-radio)').each(function() {

        var checkboxClass = $(this).attr('data-checkbox') ? $(this).attr('data-checkbox') : 'icheckbox_minimal-grey';
        var radioClass = $(this).attr('data-radio') ? $(this).attr('data-radio') : 'iradio_minimal-grey';

        if (checkboxClass.indexOf('_line') > -1 || radioClass.indexOf('_line') > -1) {
            $(this).iCheck({
                checkboxClass: checkboxClass,
                radioClass: radioClass,
                insert: '<div class="icheck_line-icon"></div>' + $(this).attr("data-label")
            });
        } else {
            $(this).iCheck({
                checkboxClass: checkboxClass,
                radioClass: radioClass
            });
        }
    });
}