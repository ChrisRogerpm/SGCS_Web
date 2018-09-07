$(document).ready(function () {
    ListarEntregables();
    ListarMetodologias();

    $("#txt_metodologia").select2();
    $("#txt_fase").select2();

    $("#txt_metodologia").change(function () {
        if ($("#txt_metodologia").val() != 0) {
            const id_metodologia = $("#txt_metodologia").val();
            ListarFasesMetodologia(id_metodologia);
        } else {
            $("#txt_fase").empty();
        }
    });

    $(".btnTodo").click(function () {
       ListarEntregables();
    });

    $(".btnBuscar").click(function () {
        ListarEntregablesFase();
    });

    $(document).on('click', '.btnEditar', function () {
        let id = $(this).data("id");
        let url = '/EditarEntregable/' + id;
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
                $("#txt_metodologia").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#txt_metodologia").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
                $("#txt_metodologia").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}

function ListarEntregablesFase() {
    $.ajax({
        type: 'POST',
        url: 'servicio/ListarEntregablesFaseFiltro',
        data: {
            '_token': $('input[name=_token]').val(),
            'FAid_fase': $("#txt_fase").val()
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
                        {data: "ENTRid_entregable", title: "Id"},
                        {data: "METnombre_metodologia", title: "Metodología"},
                        {data: "FAnombre_fase", title: "Fase"},
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {
                            data: "ENTRestado_entregable", title: "Estado",
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

function ListarEntregables() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ListarEntregables',
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
                        {data: "ENTRid_entregable", title: "Id"},
                        {data: "METnombre_metodologia", title: "Metodología"},
                        {data: "FAnombre_fase", title: "Fase"},
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {
                            data: "ENTRestado_entregable", title: "Estado",
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

function ListarFasesMetodologia(id_metodologia) {
    $.ajax({
        type: 'POST',
        url: 'servicio/ListarFasesFiltro',
        data: {
            '_token': $('input[name=_token]').val(),
            'METid_metodologia': $("#txt_metodologia").val()
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                var contenedor = $("#txt_fase");
                $(contenedor).empty();
                $(contenedor).append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, data) {
                    $(contenedor).append('<option value="' + data.FAid_fase + '">' + data.FAnombre_fase + '</option>');
                });
                $("#txt_fase").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}