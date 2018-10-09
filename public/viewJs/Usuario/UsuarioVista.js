$(document).ready(function () {

    ListarProyectos();

    $(document).on('click', '.btnEditar', function () {
        let id = $(this).data("id");
        let url = '/EditarUsuario/' + id;
        window.location.replace(url);
    });

});

function ListarProyectos() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ListarUsuarios',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "USUid_usuario", title: "Id"},
                        {
                            data: null, title: "Nombre Completo", render: function (value) {
                                return value.USUnombre_usuario + ' ' + value.USUapellido_usuario;
                            }
                        },
                        {data: "USUemail_usuario", title: "Email"},
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.USUid_usuario + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
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