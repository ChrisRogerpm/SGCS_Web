$(document).ready(function () {
    ListarSolicitudRevision();
    $(document).on('click', '.btnAprobar', function () {
        $("input[name='TAHIestado_tareaversion']:checked").prop('checked', false).uniform('refresh');
        $("#frmNuevo")[0].reset();
        $("#ModalRevision").modal();
        var Link = $(this).data("link");
        var Obs = $(this).data("obs");
        var Id = $(this).data("id");
        $("#txtenlace").val(Link);
        $("#TAHIenlace_tareaversion_").val(Link);
        $("#txtTAREid_revision").val(Id);
        $("#txtObservacion").val(Obs);
        $("#txtAbrirLink").attr("href", basepath + "/assets/Archivos/" + Link);
    });
    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });
    $("#btnUrl").tooltip({
        title: 'Abrir'
    });

    $("#btnGuardar").click(function () {

        var Estado = $("input[name='TAHIestado_tareaversion']:checked").val();
        console.log(Estado);
        if (Estado === 'undefined') {
            toastr.error('Seleccione un estado', 'Mensaje Servidor');
        } else {
            fncGenerarRevision();
        }
    });
});

function fncGenerarRevision() {
    var url = basepath + "/servicio/RegistrarTareaEntregableHistorial";
    var dataForm = $('#frmNuevo').serializeFormJSON();
    $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify(dataForm),
        success: function (response) {
            debugger
            var respuesta = response.respuesta;
            if (respuesta === true) {
                toastr.success("Se reviso Correctamente", "Mensaje Servidor");
                $("#frmNuevo")[0].reset();
                ListarSolicitudRevision();
                $("#ModalRevision").modal("hide");
            } else {
                toastr.error(response.mensaje, "Mensaje Servidor");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    });
}

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
                                return '<a href="' + value + '" target="_blank" class="btn btn-info btn-xs"><i class="icon-file-word"></i></a>'
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
                                } else if (value === 3) {
                                    return '<span class="label label-danger">Desaprobado</span>'
                                }
                            },
                            className: "text-center"
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                var EstadoRevision = value.TAREestado_tarearevision;
                                if (EstadoRevision !== 1) {
                                    return '<button type="button" class="btn btn-xs btn-info" disabled><i class="icon-checkmark2"></i></button>';
                                } else {
                                    return '<button type="button" class="btn btn-xs btn-default btnAprobar" data-obs="' + value.TAREobservacion_tarearevision + '" data-id="' + value.TAREid_tarearevision + '" data-link="' + value.TAREurl_tarearevision + '"><i class="icon-checkmark2"></i></button>';
                                }

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