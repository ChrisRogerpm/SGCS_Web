$(document).ready(function () {

    ListarProyectos();

    $(document).on('click', '.btnEditar', function () {
        let id = $(this).data("id");
        let url = '/EditarProyecto/' + id;
        window.location.replace(url);
    });

});

function ListarProyectos() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ListarProyectos',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "PROid_proyecto", title: "Id"},
                        {data: "PROnombre_proyecto", title: "Proyecto"},
                        {data: "PROfecha_inicio_proyecto", title: "Inicio de Proyecto"},
                        {data: "PROfecha_fin_proyecto", title: "Fin de Proyecto"},
                        {
                            data: null, title: "Duración", render: function (value) {
                                var start = moment(value.PROfecha_inicio_proyecto, "YYYY-MM-DD");
                                var end = moment(value.PROfecha_fin_proyecto, "YYYY-MM-DD");
                                return moment.duration(end.diff(start)).asDays() + ' día(s)';
                            }
                        },
                        {
                            data: "PROestado_proyecto", title: "Estado",
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
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.PROid_proyecto + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
                            }
                        }

                    ]
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}