$(document).ready(function () {
    $(".btnIniciarSesion").click(function () {
        let basepath = window.location.origin;
        fncValidarLoginJs(basepath);
    });

    $( "#Codigo" ).keypress(function(e) {
        if(e.which == 13) {
            let basepath = window.location.origin;
            fncValidarLoginJs(basepath)
        }
    });
    $("#password").keypress(function (e) {
        if (e.which == 13){
            let basepath = window.location.origin;
            fncValidarLoginJs(basepath)
        }
    })
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
            toastr.success('Bienvenido ' + response + '!', 'Mensaje Servidor');
            window.location.replace(basepath + '/' + response);
        },
        error: function () {
            toastr.error('Usuario no encontrado', 'Mensaje Servidor');
        }
    });
}