$(document).ready(function () {
    fncListarSolicitudCambioUsuario();
    $.when(llenarSelect(basepath + "/servicio/ListarProyectosTareaAsignada", {
        '_token': $('input[name=_token]').val()
    }, "cboProyecto", "PROid_proyecto", "PROnombre_proyecto", "")).then(function (response, textStatus) {
        $("#cboProyecto").select2();
    });

    $("#cboProyecto").change(function () {
        if ($(this).val() === "") {
            $('.CodigoSolicitud').val("");
        } else {
            $.when(llenarSelect(basepath + "/servicio/ListarTareaAsignadaProyecto", {
                '_token': $('input[name=_token]').val(),
                'PROid_proyecto': $(this).val()
            }, "cboTareas", "TAid_tarea", "TAnombre_tarea", "")).then(function (response, textStatus) {
                $("#cboTareas").select2();
            });
            var Codigo = fncGenerarCodigo('cboProyecto');
            $('.CodigoSolicitud').val(Codigo);

        }
    });

    $(".btnRegistrar").click(function () {
        var url = basepath + "/servicio/RegistrarSolicitudCambio";
        var dataForm = $('#frmNuevo').serializeFormJSON();
        $.ajax({
            url: url,
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify(dataForm),
            success: function (response) {
                var respuesta = response.respuesta;
                if (respuesta === true) {
                    toastr.success("Se Registro Correctamente", "Mensaje Servidor");
                    $("#frmNuevo")[0].reset();
                    fncListarSolicitudCambioUsuario();
                } else {
                    toastr.error(response.mensaje, "Mensaje Servidor");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
});

function fncGenerarCodigo(Proyecto) {
    var seleccion = document.getElementById(Proyecto);
    var texto = seleccion.options[seleccion.selectedIndex].text;
    array = texto.split(" ");
    total = array.length;
    resultado = "";
    for (var i = 0; i < total; resultado += array[i][0], i++) ;
    var codigo = Math.random().toString(36).substring(7).toUpperCase();
    var generate_codigo = resultado + '-' + codigo;
    return generate_codigo;
}

function fncListarSolicitudCambioUsuario() {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarSolicitudCambioUsuario",
        success: function (response) {
            $(".contenedor").empty().append('<table class="table table-bordered" id="tabla"></table>');
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "SOLICAMid_solicitudcambio", title: "Id"},
                        {data: "PROnombre_proyecto", title: "Proyecto"},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {
                            data: "SOLICAMestado_solicitudcambio", title: 'Estado',
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-warning">Pendiente</span>';
                                } else if (value === 2) {
                                    return '<span class="label label-success">Aprobado</span>';
                                } else if (value === 3) {
                                    return '<span class="label label-danger">Rechazado</span>';
                                } else if (value === 4) {
                                    return '<span class="label bg-slate-300">Comite de Cambios</span>';
                                }
                            }
                        }
                    ]
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}
