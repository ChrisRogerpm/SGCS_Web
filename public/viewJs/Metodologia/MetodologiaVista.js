$(document).ready(function () {

    ListarMetodologias();

    $(document).on('click', '.btnEditar', function () {
        let id = $(this).data("id");
        let url = '/EditarMetodologia/' + id;
        window.location.replace(url);
    });

});

function ListarMetodologias() {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ListarMetodologias',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "METid_metodologia", title: "Id"},
                        {data: "METnombre_metodologia", title: "Metodologia"},
                        {data: "METnro_fases_metodologia", title: "Cantidad de Fases"},
                        {
                            data: "METestado_metodologia", title: "Estado",
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
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.METid_metodologia + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
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