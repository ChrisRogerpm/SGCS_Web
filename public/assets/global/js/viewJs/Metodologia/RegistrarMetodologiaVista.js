$(document).ready(function () {
    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/RegistrarMetodologia';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'METnombre_metodologia': $("#txt_nombre_metodologia").val(),
                'METnro_fases_metodologia': $("#txt_nro_fases").val(),
                'METestado_metodologia': $("#txt_estado").val()
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se registro satisfactoriamente', 'Mensaje Servidor');
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });
    });

    $(".btnVolver").click(function () {
        let url = basepath + '/Metodologia';
        window.location.replace(url);
    });

});