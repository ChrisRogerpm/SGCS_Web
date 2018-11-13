$(document).ready(function () {

    ListarSolicitudesCambio();
    $("#btnTareaRelacion").click(function () {
        var TareaId = $("#txtTareaId").val();
        $("#modal_theme_success").modal({
            backdrop: 'static',
            keyboard: false
        });
    });

    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });

    $(document).on('click', '#btnEvaluarSolicitudCambio', function () {

        var CodigoId = $("#txtIdSolicitudCambio").val();
        var EstadoSoli = $(".EstadoSolicitudCambio").val();
        $.ajax({
            type: 'POST',
            url: basepath + "/servicio/EvaluarSolicitudCambio",
            data: {
                'SOLICAMid_solicitudcambio': CodigoId,
                'SOLICAMestado_solicitudcambio': EstadoSoli
            },
            success: function (response) {
                var resp = response.respuesta;
                var msj = response.mensaje;
                if (resp === true) {
                    toastr.success('Se ha evaluado satisfactoriamente', 'Mensaje Servidor');
                    $("#ModalRevisionSolicitudCambio").modal('hide');
                    ListarSolicitudesCambio();
                } else {
                    toastr.error(msj, 'Mensaje Servidor');
                }
            }
        });
    });

    $(document).on('click', '#btnTareaRelacion', function () {
        debugger
        var TareaId = $("#txtTareaId").val();
        $.ajax({
            type: 'POST',
            url: basepath + "/servicio/ListarTareaRelacion",
            data: {
                'TAid_tarea1': TareaId
            },
            success: function (response) {
                var resp = response.data;
                $(".modal-body").empty().append('<table class="table table-bordered" id="tablarelacion"></table>');
                $("#tablarelacion").DataTable({
                    data: resp,
                    columns: [
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {data: "TAnombre_tarea", title: 'Tarea'},
                    ]
                });
            }
        });
    })
});

function ListarSolicitudesCambio() {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarSolicitudesCambio",
        data: {
            'PROid_proyecto': $("#txtPROid_proyecto").val()
        },
        success: function (response) {
            var resp = response.data;
            var estado = response.estado;
            var msj = response.mensaje;
            $(".panel-body").empty().append('<table class="table table-bordered" id="tabla"></table>');
            if (estado === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "SOLICAMid_solicitudcambio", title: 'Id'},
                        {data: "SOLICAMcodigo_solicitudcambio", title: "Código"},
                        {data: "SOLICAMfecha_solicitud_solicitudcambio", title: "Fecha de Emision"},
                        {
                            data: null, title: "Solicitante",
                            render: function (value) {
                                return value.USUnombre_usuario + ' ' + value.USUapellido_usuario;
                            }
                        },
                        {
                            data: "SOLICAMestado_solicitudcambio", title: 'Estado',
                            render: function (value) {
                                return '<span class="label label-primary">Pendiente</span>';
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-xs btn-success btnRevisar" data-id="' + value.SOLICAMid_solicitudcambio + '" data-tareaid="' + value.TAid_tarea + '"><i class="icon-eye-plus"></i></button>';
                            },
                            className: "text-center"
                        }
                    ],
                    "drawCallback": function () {
                        $('.btnRevisar').tooltip({
                            title: "Revisar"
                        });

                        $('.btnRevisar').click(function () {
                            var SolicitudId = $(this).data("id");
                            var TareaId = $(this).data("tareaid");
                            $("#ModalRevisionSolicitudCambio").modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                            $(this).tooltip('hide');

                            $("#txtIdSolicitudCambio").val(SolicitudId);
                            ObtenerInfoSolicitudCambio(SolicitudId);
                        });
                    }
                });
            } else {
                toastr.error(msj, 'Mensaje Servidor');
            }
        }
    });
}

function ObtenerInfoSolicitudCambio(SOLICAMid_solicitudcambio) {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ObtenerSolicitudCambio",
        data: {
            'SOLICAMid_solicitudcambio': SOLICAMid_solicitudcambio
        },
        success: function (response) {
            var resp = response.data;
            $("#txtCodigo").val(resp.SOLICAMcodigo_solicitudcambio);
            $("#txtSolicitante").val(resp.USUnombre_usuario + ' ' + resp.USUapellido_usuario);
            $("#txtTarea").val(resp.TAnombre_tarea);
            $("#txtObjetivo").val(resp.SOLICAMobjetivo_solicitudcambio);
            $("#txtDescripcion").val(resp.SOLICAMdescripcion_solicitudcambio);
            // $("#txtCodigo").val();
        }
    });
}