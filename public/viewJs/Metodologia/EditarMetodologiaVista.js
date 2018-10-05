$(document).ready(function () {
    ObtenerMetodologia();
    $("#txt_estado").select2();
    $(".btnModificar").click(function () {
        var url = basepath + '/servicio/ModificarMetodologia';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'METid_metodologia': $("#txt_id_metodologia").val(),
                'METnombre_metodologia': $("#txt_nombre_metodologia").val(),
                'METnro_fases_metodologia': $("#txt_nro_fases").val(),
                'METestado_metodologia': $("#txt_estado").val()
            },
            success: function (response) {
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se modifico satisfactoriamente', 'Mensaje Servidor');
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

function ObtenerMetodologia() {
    var url = basepath + '/servicio/EditarMetodologia';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'METid_metodologia': $("#txt_id_metodologia").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_nombre_metodologia").val(resp.METnombre_metodologia);
                $("#txt_nro_fases").val(resp.METnro_fases_metodologia);
                $("#txt_estado").val(resp.METestado_metodologia).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}