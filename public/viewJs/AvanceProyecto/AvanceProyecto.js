$(document).ready(function () {
    ListarFasesProyecto();
});

function ListarFasesProyecto() {
    const proyecto_id = $("#txtProyectoId").val();
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/ListarFasesProyecto',
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $('.contenedor_').empty();
                $.each(resp, function (key, value) {
                    var IdTabla = value.FAnombre_fase + "_";
                    var FaseId = value.FAid_fase;
                    $('.contenedor_').append('<div class="col-md-6">\n' +
                        '            <div class="panel-group panel-group-control panel-group-control-right content-group-lg"\n' +
                        '                 id="accordion-control-right">\n' +
                        '                <div class="panel">\n' +
                        '                    <div class="panel-heading bg-primary-400">\n' +
                        '                        <h6 class="panel-title">\n' +
                        '                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-control-right"\n' +
                        '                               href="#' + value.FAnombre_fase + '">' + value.FAnombre_fase + '</a>\n' +
                        '                        </h6>\n' +
                        '                    </div>\n' +
                        '                    <div id="' + value.FAnombre_fase + '" class="panel-collapse collapse">\n' +
                        '                        <div class="panel-body" id="">\n' +
                        '                            <table id="' + IdTabla + '" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%"></table>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>');

                    ListarTareas(IdTabla, FaseId);
                });
            }
        }
    })
}

function ListarTareas(TablaId, FaseId) {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ObtenerTareasAvance",
        data: {
            'PROid_proyecto': $("#txtProyectoId").val(),
            'FAid_fase': FaseId
        },
        success: function (response) {
            var resp = response.data;
            var estado = response.estado;
            var msj = response.mensaje;
            if (estado === true) {
                $("#" + TablaId).DataTable({
                    data: resp,
                    columns: [
                        {data: "TAid_tarea", title: 'Id'},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {
                            data: "TAestado_tarea", title: 'Estado',
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label bg-orange-300">En Progreso</span>';
                                } else if (value === 3) {
                                    return '<span class="label label-primary">Finalizado</span>';
                                }
                            }
                        }
                    ]
                });
            } else {
                toastr.error(msj, 'Mensaje Servidor');
            }
        }
    });
}