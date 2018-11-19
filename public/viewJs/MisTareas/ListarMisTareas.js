$(document).ready(function () {
    fncListarMisTareasJson();
    $(document).on('click','.btnRevisar',function () {
        $("#ModalRevision").modal();
    })
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
                                    return '<span class="label label-primary">Habilitado</span>'

                                } else {
                                    return '<span class="label label-danger">Deshabilitado</span>'
                                }
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-xs btn-success btnRevisar" data-id="' + value.ATEid_asignartareaproyecto + '"><i class="glyphicon glyphicon-eye-open"></i></button> ' +
                                    '<button type="button" class="btn btn-xs btn-info btnHistorial" data-id="' + value.ATEid_asignartareaproyecto + '"><i class="glyphicon glyphicon-calendar"></i></button>';
                            }
                        }

                    ],
                    "drawCallback": function () {
                        $('.btnRevisar').tooltip({
                            title:'Revisar Tarea'
                        });
                        $('.btnHistorial').tooltip({
                            title:'Versiones'
                        })
                    }
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}