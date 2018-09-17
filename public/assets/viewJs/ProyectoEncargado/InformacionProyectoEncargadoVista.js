$(document).ready(function () {
    fncListarEstructuraProyecto();
    // fncListarMiembrosEquipo();
    $("#TabEstructura").click(function () {
        fncListarEstructuraProyecto();
    });
    $("#TabEquipo").click(function () {
        fncListarUsuarios();
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
            var usu_total = response.usuario_proyecto_total;
            var tareas = response.tareas;
            var comite = response.miembros_comite;
            var solicitudes = response.solicitudes;

            if (mepro === true) {
                $(".contenedor-metodologia-proyecto").empty();
                if (response.estado === true) {
                    $("#NombreProyecto").val(resp.PROnombre_proyecto);
                    $("#JefeProyecto").val(resp.USUnombre_usuario);
                    $("#InicioProyecto").val(resp.PROfecha_inicio_proyecto);
                    $("#FinProyecto").val(resp.PROfecha_fin_proyecto);
                    var start = moment(resp.PROfecha_inicio_proyecto, "YYYY-MM-DD");
                    var end = moment(resp.PROfecha_fin_proyecto, "YYYY-MM-DD");
                    $("#DiasRestantes").val(moment.duration(end.diff(start)).asDays() + ' día(s)');
                    $(".EquipoTrabajo").text(usu_total);

                } else {
                    toastr.error('Servicio no encontrado', 'Mensaje Servidor');
                }
            } else {
                $(".contenedor-metodologia-proyecto").empty().append('<div class="col-md-12">\n' +
                    '                <div class="form-group">\n' +
                    '                    <label for="metodologia_id">Metodologia</label>\n' +
                    '                    <div class="input-group">\n' +
                    '                        <span class="input-group-addon"><i class="icon icon-calendar"></i></span>\n' +
                    '                        <select class="form-control select2" id="metodologia_id"></select>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '            <div class="col-md-12">\n' +
                    '                <div class="form-group">\n' +
                    '                    <button type="button" class="btn btn-primary btn-block btn-sm">Seleccionar</button>\n' +
                    '                </div>\n' +
                    '            </div>');
                if (response.estado === true) {

                    $("#NombreProyecto").val(resp.PROnombre_proyecto);
                    $("#JefeProyecto").val(resp.USUnombre_usuario);
                    $("#InicioProyecto").val(resp.PROfecha_inicio_proyecto);
                    $("#FinProyecto").val(resp.PROfecha_fin_proyecto);
                    var start = moment(resp.PROfecha_inicio_proyecto, "YYYY-MM-DD");
                    var end = moment(resp.PROfecha_fin_proyecto, "YYYY-MM-DD");
                    $("#DiasRestantes").val(moment.duration(end.diff(start)).asDays() + ' día(s)');
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
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {

            var resp = response.data;
            var cantidad = resp.length;
            if (response.estado === true) {
                if (cantidad > 0) {
                    var registro = "";
                    $.each(resp, function (ind, value) {
                        registro += '<tr>';
                        registro += '<td>' + value.USUnombre_usuario + ' ' + value.USUapellido_usuario + '</td>';
                        registro += '</tr>';
                    });
                    $(".tablaMiembrosEquipo").empty().append(registro);
                } else {
                    var registro = "<tr><td>No se ha registrado ningun miembro</td></tr>";
                    $(".tablaMiembrosEquipo").empty().append(registro);
                }
            }
        },
        error: function (response) {

        }
    });
}

function fncListarUsuarios() {
    const url = basepath + "/servicio/ListarUsuarios";
    $.ajax({
        type: 'GET',
        url: url,
        cache: false,
        success: function (response) {
            // debugger
            var resp = response.data;
            $("#USUid_usuario").empty();
            if (response.estado === true) {
                $.each(resp, function (key, value) {
                    $("#USUid_usuario").append('<option value="' + value.USUid_usuario + '">' + value.USUnombre_usuario + '"< /option>');
                });
                // $(".Duallistbox").bootstrapDualListbox();
            }
        },
        error: function (response) {

        }
    });
}