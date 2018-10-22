$(document).ready(function () {
    fncListarTareasEntregables();
});

function fncListarTareasEntregables() {
    var proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/TareaEntregable',
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $(".contenedor_tabla").empty().append('<table class="table table-bordered" id="tabla"></table>');
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "TAid_tarea", title: "Id"},
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {
                            data: "TAestado_tarea", title: "Estado",
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-primary">Habilitado</span>';

                                } else {
                                    return '<span class="label label-danger">Deshabilitado</span>';
                                }
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.TAid_tarea + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
                            }
                        }
                    ]
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    });
}