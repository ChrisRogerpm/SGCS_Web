$(document).ready(function () {

    fncListarMetodologiasJs();
    $(document).on('click', '.btnInfo', function () {
        let id = $(this).data("id");
        let url = '/InformacionProyectoEncargado/' + id;
        window.location.replace(url);
    });

});

function fncListarMetodologiasJs() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ProyectosEncargados',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "PROnombre_proyecto", title: "Proyecto"},
                        {data: "PROfecha_inicio_proyecto", title: "Fecha de Inicio"},
                        {data: "PROfecha_inicio_proyecto", title: "Fecha de Finalización"},
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-sm btn-success btnInfo" data-id="' + value.PROid_proyecto + '"><i class="icon icon-plus-circle"></i> Información</button>';
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
