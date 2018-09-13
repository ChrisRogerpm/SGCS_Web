$(document).ready(function () {

    fncListarEstructuraProyecto();
    fncListarMiembrosEquipo();
    $("#TabEstructura").click(function () {
        fncListarEstructuraProyecto();
        fncListarMiembrosEquipo();
    });
});

function fncListarEstructuraProyecto() {
    const proyecto_id = $("#id_proyecto_encargado").val();
    const url = basepath + "/servicio/InformacionProyectosEncargado";
    $.ajax({
        type: 'POST',
        url: url,
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {

            var resp = response.data;
            var mepro = response.metodologia_proyecto;

            if (mepro === true) {
                $(".contenedor-metodologia-proyecto").empty();
                if (response.estado === true) {
                    $("#nombre_proyecto").val(resp.PROnombre_proyecto);
                    $("#jefe_proyecto").val(resp.USUnombre_usuario);
                    $("#fecha_inicio").val(resp.PROfecha_inicio_proyecto);
                    $("#fecha_fin").val(resp.PROfecha_fin_proyecto);
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            } else {
                $(".contenedor-metodologia-proyecto").empty().append('<div class="col-lg-12">\n' +
                    '                                                            <div class="form-group">\n' +
                    '                                                                <label>Metodologia</label>\n' +
                    '                                                                <select id="metodologia_id"\n' +
                    '                                                                        class="form-control form-white select2">\n' +
                    '                                                                    <option value="">Seleccione</option>\n' +
                    '                                                                </select>\n' +
                    '                                                            </div>\n' +
                    '                                                        </div>\n' +
                    '                                                        <div class="col-lg-12">\n' +
                    '                                                            <button type="button" class="btn btn-primary btn-sm btn-block">\n' +
                    '                                                                Seleccionar Metodologia\n' +
                    '                                                            </button>\n' +
                    '                                                        </div>');
                if (response.estado === true) {
                    $("#nombre_proyecto").val(resp.PROnombre_proyecto);
                    $("#jefe_proyecto").val(resp.USUnombre_usuario);
                    $("#fecha_inicio").val(resp.PROfecha_inicio_proyecto);
                    $("#fecha_fin").val(resp.PROfecha_fin_proyecto);
                    fncListarMetodologias();
                    $("#metodologia_id").select2();
                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            }
        },
        error: function (response) {
            toastr.error('Servicio no encontrado', 'Mensaje Servidor');
        }
    });
}

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
                $("#metodologia_id").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#metodologia_id").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
                $("#metodologia_id").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function fncListarMiembrosEquipo() {
    const url = basepath + "/servicio/ListarUsuarioProyecto";
    const proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: url,
        cache:false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            debugger
            var resp = response.data;
            var cantidad = resp.length;
            if (response.estado === true) {
                if (cantidad > 0){
                    var registro = "";
                    $.each(resp, function (ind, value) {
                        registro += '<tr>';
                        registro += '<td>' + value.USUnombre_usuario + ' ' + value.USUapellido_usuario + '</td>';
                        registro += '</tr>';
                    });
                    $(".tablaMiembrosEquipo").empty().append(registro);
                }else{
                    var registro = "<tr><td>No se ha registrado ningun miembro</td></tr>";
                    $(".tablaMiembrosEquipo").empty().append(registro);
                }
            }
        },
        error: function (response) {

        }
    });
}