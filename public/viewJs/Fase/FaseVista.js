$(document).ready(function () {
    ListarFases();
    ListarMetodologias();
    $("#txt_metodologia").select2();
    $(document).on('click', '.btnEditar', function () {
        let id = $(this).data("id");
        let url = '/EditarFase/' + id;
        window.location.replace(url);
    });
    $(".btnTodo").click(function () {
        ListarFases();
    });
    $("#txt_metodologia").change(function () {
        var id_metodologia = $(this).val();
        ListarFasesFiltro(id_metodologia);
    });

});

function ListarFases() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ListarFases',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                var contenedor = $(".container-table");
                $(contenedor).empty();
                $(contenedor).append('<table class="table table-bordered" id="tabla"></table>');
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "FAid_fase", title: "Id"},
                        {data: "METnombre_metodologia", title: "Metodología"},
                        {data: "FAnombre_fase", title: "Fase"},
                        {
                            data: "FAestado_fase", title: "Estado",
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
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.FAid_fase + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
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
                $("#txt_metodologia").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#txt_metodologia").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function ListarFasesFiltro(id_metodologia) {
    $.ajax({
        type: 'POST',
        url: 'servicio/ListarFasesFiltro',
        destroy: true,
        data: {
            '_token': $('input[name=_token]').val(),
            'METid_metodologia': id_metodologia
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                var contenedor = $(".container-table");
                $(contenedor).empty();
                $(contenedor).append('<table class="table table-bordered" id="tabla"></table>');
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "FAid_fase", title: "Id"},
                        {data: "METnombre_metodologia", title: "Metodología"},
                        {data: "FAnombre_fase", title: "Fase"},
                        {
                            data: "FAestado_fase", title: "Estado",
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
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.FAid_fase + '"><i class="glyphicon glyphicon-edit"></i> Editar</button>';
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