var iniciador;
$(document).ready(function () {
    fncObtenerEntregable();
    $(".btnModificar").click(function () {
        var url = basepath + '/servicio/ModificarEntregable';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                '_token': $('input[name=_token]').val(),
                'ENTRid_entregable': $("#txt_id_entregable").val(),
                'METid_metodologia': $("#txt_metodologia").val(),
                'FAid_fase': $("#txt_fase").val(),
                'ENTRnombre_entregable': $("#txt_nombre_entregable").val(),
                'ENTRdescripcion_entregable': $("#txt_descripcion").val(),
                'ENTRestado_entregable':$("#txt_estado").val()
            },
            success: function (response) {
                
                let est = response.estado;
                if (est === true) {
                    toastr.success('Se actualizo satisfactoriamente', 'Mensaje Servidor');
                    // $('form[id="frmnuevo"]')[0].reset();
                    // $("#txt_metodologia").val(0).change();
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        });
    });

    $(".btnVolver").click(function () {
        let url = basepath + '/Entregable';
        window.location.replace(url);
    });

    $("#txt_metodologia").change(function () {
        var METid_metodologia = $("#txt_metodologia").val();
        fncListarFasesFiltro(METid_metodologia);
    });
});

function fncObtenerEntregable() {
    var url = basepath + '/servicio/EditarEntregable';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'ENTRid_entregable': $("#txt_id_entregable").val()
        },
        success: function (response) {
            
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                // $("#txt_fase").val(resp.FAid_fase).change();
                $("#txt_nombre_entregable").val(resp.ENTRnombre_entregable);
                $("#txt_descripcion").val(resp.ENTRdescripcion_entregable);
                $("#txt_estado").val(resp.ENTRestado_entregable).change();


                fncListarMetodologias(resp.METid_metodologia);
                ListarFasesFiltro(resp.METid_metodologia,resp.FAid_fase);
                $("#txt_estado").select2();
                $("#txt_fase").select2();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}

function fncListarMetodologias(METid_metodologia) {
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
                //$("#txt_metodologia").val(METid_metodologia).change();
                $("#txt_metodologia").val(METid_metodologia);
                $("#txt_metodologia").select2();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function fncListarFasesFiltro(METid_metodologia) {
    $.ajax({
        type: 'POST',
        url: basepath +'/servicio/ListarFasesFiltro',
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
function ListarFasesFiltro(METid_metodologia,FAid_fase) {
    
    var dq = $.ajax({
        type: 'POST',
        url: basepath + '/servicio/ListarFasesFiltro',
        data: {
            '_token': $('input[name=_token]').val(),
            'METid_metodologia': METid_metodologia
        },
        success: function (response) {
            
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#txt_fase").empty();
                $("#txt_fase").append('<option value="">--Seleccione--</option>');
                $.each(resp, function (ind, value) {
                    $("#txt_fase").append('<option value="' + value.FAid_fase + '">' + value.FAnombre_fase + '</option>');
                });
                $("#txt_fase").val(FAid_fase).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}
