$(document).ready(function () {
    ListarSolicitudRevision();
    $(document).on('click', '.btnAprobar', function () {
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
                                return '<a href="' + value + '" class="btn btn-info btn-xs"><i class="icon-file-word"></i></a>'
                            },
                            className: "text-center"
                        },
                        {
                            data: "TAREestado_tarearevision", title: "Estado",
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-warning">En Revision</span>'
                                } else if (value === 2) {
                                    return '<span class="label label-success">Aprobado</span>'
                                }
                            },
                            className: "text-center"
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-xs btn-success btnAprobar"><i class="icon-checkmark2"></i></button>';
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