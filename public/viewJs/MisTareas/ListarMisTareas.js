$(document).ready(function () {
    fncListarMisTareasJson();
    $(document).on('click', '.btnRevisar', function () {
        var ATPid_asignartareaproyecto = $(this).data("id");
        $("#ModalRevision").modal({
            backdrop: 'static',
            keyboard: false
        });
        $("#frmNuevo")[0].reset();
        $("#txtATPid_asignartareaproyecto").val(ATPid_asignartareaproyecto);
    });

    $("#btnGuardar").click(function () {
        // var url = basepath + "/servicio/RegistrarRevisionTareEntregable";
        // var dataForm = $('#frmNuevo').serializeFormJSON();
        // $.ajax({
        //     url: url,
        //     type: "POST",
        //     contentType: "application/json",
        //     data: JSON.stringify(dataForm),
        //     success: function (response) {
        //         var respuesta = response.respuesta;
        //         if (respuesta === true) {
        //             toastr.success("Se Registro Correctamente", "Mensaje Servidor");
        //             $("#frmNuevo")[0].reset();
        //             $("#ModalRevision").modal("hide");
        //             fncListarMisTareasJson();
        //         } else {
        //             toastr.error(response.mensaje, "Mensaje Servidor");
        //         }
        //     },
        //     error: function (jqXHR, textStatus, errorThrown) {
        //     }
        // });
        var url = basepath + "/servicio/RegistrarRevisionTareEntregable";
        var dataForm = new FormData($("#frmNuevo")[0]);
        $.ajax({
            async: false,
            type: 'POST',
            url: url,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            data: dataForm,
            dataType: "json",
            success: function (response) {
                var respuesta = response.respuesta;
                if (respuesta === true) {
                    toastr.success("Se Registro Correctamente", "Mensaje Servidor");
                    $("#frmNuevo")[0].reset();
                    $("#ModalRevision").modal("hide");
                } else {
                    toastr.error(response.mensaje, "Mensaje Servidor");
                }
            },
        });
    });
});

function fncListarMisTareasJson() {
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/ListarTareaEquipo',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            $(".contenedor").empty().append('<table class="table table-bordered" id="tabla"></table>');
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "ATEid_asignartareaproyecto", title: "Id"},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {data: "ATEfecha_inicio_tareaproyecto", title: "Inicio de Tarea"},
                        {data: "ATEfecha_fin_tareaproyecto", title: "Fin de Tarea"},
                        {
                            data: null, title: "Duración", render: function (value) {
                                var start = moment(value.ATEfecha_inicio_tareaproyecto, "YYYY-MM-DD");
                                var end = moment(value.ATEfecha_fin_tareaproyecto, "YYYY-MM-DD");
                                return moment.duration(end.diff(start)).asDays() + ' día(s)';
                            }
                        },
                        {
                            data: "ATEestado_tareaproyecto", title: "Estado",
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-warning">En progreso</span>'
                                } else if (value === 2) {
                                    return '<span class="label label-info">En Revision</span>'
                                } else if (value === 3) {
                                    return '<span class="label label-success">Aprobado</span>'
                                }
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {

                                var EstadoId = value.ATEestado_tareaproyecto;
                                if (EstadoId !== 1) {
                                    return '<button type="button" class="btn btn-xs btn-success" disabled><i class="glyphicon glyphicon-eye-open"></i></button> ' +
                                        '<button type="button" class="btn btn-xs btn-info btnHistorial" data-id="' + value.ATEid_asignartareaproyecto + '"><i class="glyphicon glyphicon-calendar"></i></button>';
                                } else {
                                    return '<button type="button" class="btn btn-xs btn-success btnRevisar" data-id="' + value.ATEid_asignartareaproyecto + '"><i class="glyphicon glyphicon-eye-open"></i></button> ' +
                                        '<button type="button" class="btn btn-xs btn-info btnHistorial" data-id="' + value.ATEid_asignartareaproyecto + '"><i class="glyphicon glyphicon-calendar"></i></button>';
                                }
                            }
                        }

                    ],
                    "drawCallback": function () {
                        $('.btnRevisar').tooltip({
                            title: 'Revisar Tarea'
                        });
                        $('.btnHistorial').tooltip({
                            title: 'Versiones'
                        })
                    }
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function SubirArchivoRevision() {
    var url = basepath + "/servicio/RegistrarRevisionTareEntregable";
    var dataForm = new FormData($("#frmNuevo")[0]);
    $.ajax({
        async: false,
        type: 'POST',
        url: url,
        mimeType: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        data: dataForm,
        dataType: "json",
        success: function (response) {
            var respuesta = response.respuesta;
            if (respuesta === true) {
                toastr.success("Se Registro Correctamente", "Mensaje Servidor");
            } else {
                toastr.error(response.mensaje, "Mensaje Servidor");
            }
        },
    });
}