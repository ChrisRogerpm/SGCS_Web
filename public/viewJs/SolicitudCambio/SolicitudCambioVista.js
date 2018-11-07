$(document).ready(function () {
    ListarSolicitudesCambio();
});

function ListarSolicitudesCambio() {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarSolicitudesCambio",
        data:{
            'PROid_proyecto': $("#txtPROid_proyecto").val()
        },
        success: function (response) {
            var resp = response.data;
            var estado = response.estado;
            var msj = response.mensaje;
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
                                return '<span class="label label-primary">Habilitado</span>';
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-xs btn-success btnRevisar" data-id="' + value.SOLICAMid_solicitudcambio + '"><i class="icon-eye-plus"></i></button>';
                            }
                        }
                    ],
                    "drawCallback": function () {
                        $('.btnRevisar').tooltip({
                            title: "Revisar"
                        });

                        $('.btnRevisar').click(function () {
                            $("#ModalRevisionSolicitudCambio").modal({
                                backdrop: 'static',
                                keyboard: false
                            });


                        });
                    }
                });
            } else {
                toastr.error(msj, 'Mensaje Servidor');
            }
        }
    });
}