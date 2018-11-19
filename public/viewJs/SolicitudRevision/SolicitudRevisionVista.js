$(document).ready(function () {
    ListarSolicitudRevision();
    $(document).on('click','.btnAprobar',function () {
        $("#ModalRevision").modal();
    })
});

function ListarSolicitudRevision() {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarSolicitudRevision",
        data: {
            'PROid_proyecto': $("#txtPROid_proyecto").val()
        },
        success: function (response) {
            var resp = response.data;
            var estado = response.respuesta;
            var msj = response.mensaje;
            $(".panel-body").empty().append('<table class="table table-bordered" id="tabla"></table>');
            if (estado === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "TAREid_tarearevision", title: 'Id'},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {
                            data: "TAREurl_tarearevision", title: "Documento",
                            render: function (value) {
                                return '<a href="' + value + '">Documento</a>'
                            }
                        },
                        {
                            data: "TAREestado_tarearevision", title: "Estado",
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-info">En Revision</span>'
                                } else if (value === 2) {
                                    return '<span class="label label-success">Aprobado</span>'
                                }
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                // if (value.TAREestado_tarearevision === 2) {
                                //     return '<button type="button" class="btn btn-xs btn-success btnVersion" data-id="' + value.TAREid_tarearevision + '"><i class="icon-calendar2"></i></button>';
                                // } else {
                                //     return '<button type="button" class="btn btn-xs btn-success btnAprobar" disabled><i class="icon-eye-plus"></i></button>';
                                // }
                                return '<button type="button" class="btn btn-xs btn-success btnAprobar"><i class="glyphicon glyphicon-hand-right"></i></button>';
                            },
                            className: "text-center"
                        }
                    ],
                    "drawCallback": function () {

                    }
                });
            } else {
                toastr.error(msj, 'Mensaje Servidor');
            }
        }
    });
}