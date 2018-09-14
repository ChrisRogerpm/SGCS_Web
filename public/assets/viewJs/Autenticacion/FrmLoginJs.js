$(document).ready(function () {
    $(".btnIniciarSesion").click(function () {
        let basepath = window.location.origin;
        fncValidarLoginJs(basepath);
    });
});

function fncValidarLoginJs(basepath) {
    $.ajax({
        type: 'POST',
        url: basepath + '/Autenticacion/ValidarLogin',
        data: {
            '_token': $('input[name=_token]').val(),
            'USUemail_usuario': $("#Codigo").val(),
            'password': $("#password").val(),
        },
        success: function (response) {
            toastr.success('Bienvenido ' + response + '!', 'Mensaje Servidor', {timeOut: 2000});
            setTimeout(function () {
                window.location.replace(basepath + '/' + response);
            }, 2200);
        },
        error: function () {
            toastr.error('Usuario no encontrado', 'Mensaje Servidor');
        }
    });
}