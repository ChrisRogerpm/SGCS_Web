$(document).ready(function () {
    $("#TabEstructura").click(function () {
        fncListarEstructuraProyecto();
    });
    $(document).on('click', '.btnGuardar', function () {
        var Metodologia_id = $('#metodologia_id').val();
        var proyecto_id = $("#id_proyecto_encargado").val();
        if (Metodologia_id === '') {
            toastr.error('Seleccione una Metodologia', 'Mensaje Servidor');
        } else {
            fncRegistrarMetodologiaProyecto(proyecto_id, Metodologia_id)
        }
    });
});

function fncListarMetodologias() {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ListarMetodologiasPro',
        cache: false,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#metodologia_id").append('<option value="">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#metodologia_id").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function fncRegistrarMetodologiaProyecto(proyecto_id, Metodologia_id) {
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/RegistrarMetodologiaProyecto',
        cache:false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id,
            'METid_metodologia': Metodologia_id
        },
        success: function (response) {
            debugger
            if (response.estado === true) {
                fncListarEstructuraProyecto();
                toastr.success('Se ha registrado la Metodologia exitosamente', 'Mensaje Servidor');
            }
        }
    })
}