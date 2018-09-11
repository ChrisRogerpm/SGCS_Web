$(document).ready(function () {
    ListarMetodologias();
    $("#txt_estado").select2();
    $("#txt_metodologia").select2();
    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/RegistrarFase';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'METid_metodologia': $("#txt_metodologia").val(),
                'FAnombre_fase': $("#txt_nombre_fase").val(),
                'FAdescripcion_fase': $("#txt_descripcion").val(),
                'FAestado_fase': $("#txt_estado").val()
            },
            success: function (response) {
                debugger
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
        let url = basepath + '/Fase';
        window.location.replace(url);
    });

});


function ListarMetodologias() {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ListarMetodologias',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_metodologia").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#txt_metodologia").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
                $("#txt_metodologia").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}