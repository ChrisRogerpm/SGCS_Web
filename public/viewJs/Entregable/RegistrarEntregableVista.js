$(document).ready(function () {
    fncListarMetodologias();
    $("#txt_metodologia").change(function () {
        const METid_metodologia = $("#txt_metodologia").val();
        fncListarFasesFiltro(METid_metodologia);
    });
    $(".btnVolver").click(function () {
        let url = basepath + '/Entregable';
        window.location.replace(url);
    });
    $("#txt_metodologia").select2();
    $("#txt_fase").select2();
    $("#txt_estado").select2();
    
    $(".btnRegistrar").click(function () {
        var url = basepath + '/servicio/RegistrarEntregable';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'METid_metodologia': $("#txt_metodologia").val(),
                'FAid_fase': $("#txt_fase").val(),
                'ENTRnombre_entregable': $("#txt_nombre_entregable").val(),
                'ENTRdescripcion_entregable': $("#txt_descripcion").val(),
                'ENTRestado_entregable':$("#txt_estado").val()
            },
            success: function (response) {
                
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se registro satisfactoriamente', 'Mensaje Servidor');
                    $("#txt_metodologia").val(0).change();
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });
    });
});

function fncListarMetodologias() {
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
function fncListarFasesFiltro(METid_metodologia) {
    $.ajax({
        type: 'POST',
        url: 'servicio/ListarFasesFiltro',
        data: {
            '_token': $('input[name=_token]').val(),
            'METid_metodologia': METid_metodologia
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                var contenedor = $("#txt_fase");
                $(contenedor).empty();
                $(contenedor).append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, data) {
                    $(contenedor).append('<option value="' + data.FAid_fase + '">' + data.FAnombre_fase + '</option>');
                });
                $("#txt_fase").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}