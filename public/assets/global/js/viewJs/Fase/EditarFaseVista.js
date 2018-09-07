$(document).ready(function () {
    ObtenerFase();
    $("#txt_estado").select2();
    $("#txt_metodologia").select2();
    $(".btnModificar").click(function () {
        var url = basepath + '/servicio/ModificarFase';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'FAid_fase': $("#txt_id_fase").val(),
                'METid_metodologia': $("#txt_metodologia").val(),
                'FAnombre_fase': $("#txt_nombre_fase").val(),
                'FAdescripcion_fase': $("#txt_descripcion").val(),
                'FAestado_fase': $("#txt_estado").val()
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
        let url = basepath + '/Fase';
        window.location.replace(url);
    });

});

function ObtenerFase() {
    var url = basepath + '/servicio/EditarFase';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'FAid_fase': $("#txt_id_fase").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_nombre_fase").val(resp.FAnombre_fase);
                $("#txt_descripcion").val(resp.FAdescripcion_fase);
                $("#txt_estado").val(resp.FAestado_fase).change();
                ListarMetodologias(resp.METid_metodologia);
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}

function ListarMetodologias(id_metodologia) {
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
                $("#txt_metodologia").val(id_metodologia).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}