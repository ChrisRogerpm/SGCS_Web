$(document).ready(function () {
    $("#frmNuevo").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: basepath + '/servicio/RegistrarUsuario',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se Registro satisfactoriamente', 'Mensaje Servidor');
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
