$(document).ready(function () {
    $("#TabEquipo").click(function () {
        fncListarUsuarios();
        fncListarUsuarioProyecto();
    });
    $(document).on('click', '.btnAgregarEquipo', function () {
        var ListaUsuarios = $("#ListaUsuarios").val();
        var proyecto_id = $("#id_proyecto_encargado").val();
        if (ListaUsuarios == null) {
            toastr.error('Seleccione almenos un Usuario', 'Mensaje Servidor');
        } else {
            $.ajax({
                type: 'POST',
                url: basepath + '/servicio/RegistrarUsuarioProyecto',
                cache: false,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'PROid_proyecto': proyecto_id,
                    'USUid_usuario': ListaUsuarios
                },
                success: function (response) {
                    if (response.estado === true) {
                        fncListarUsuarios();
                        fncListarUsuarioProyecto();
                        toastr.success('Se ha registrado la Metodologia exitosamente', 'Mensaje Servidor');
                    }
                }
            })
        }

    });
    $(document).on('click', '.img_click', function () {
        $('#ModalDeshabilitarUsuario').appendTo("body").modal({
            backdrop: 'static',
            keyboard: false
        });
        var id_usuario_proyecto = $(this).data("id");
        $("#txt_id_usuario_proyecto").val(id_usuario_proyecto);
    });
    $('.btnSiModalUsuarioProyecto').click(function () {
        var id_usuario_proyecto = $("#txt_id_usuario_proyecto").val();
        $.ajax({
            type: 'POST',
            url: basepath + "/servicio/DeshabilitarUsuarioProyecto",
            cache: false,
            data: {
                '_token': $('input[name=_token]').val(),
                'USUPROid_usuarioproyecto': id_usuario_proyecto
            },
            success: function (response) {
                var resp = response.estado;
                if (resp === true) {
                    toastr.success('Se ha deshabilitado al usuario satisfactoriamente', 'Mensaje Servidor');
                    fncListarUsuarioProyecto();
                    $('#ModalDeshabilitarUsuario').modal('hide');
                } else {
                    toastr.error('Error no se ha podido deshabilitar al usuario', 'Mensaje Servidor');
                }
            }
        });
    });

    $(document).on('change', '.check_change', function () {
        if ($(this).is(':checked')) {
            var SubTipoServicioClausulaId = $(this).val();
            var Estado = true;
            CambiarEstadoSubTipoServicioClausula(SubTipoServicioClausulaId, Estado);
        } else {
            var SubTipoServicioClausulaId = $(this).val();
            var Estado = false;
            CambiarEstadoSubTipoServicioClausula(SubTipoServicioClausulaId, Estado);
        }
    });

});

function fncListarUsuarios() {
    const url = basepath + "/servicio/ListarUsuarios";
    $.ajax({
        type: 'GET',
        url: url,
        cache: false,
        success: function (response) {
            var resp = response.data;
            $(".contenedor-lista").empty().append('<select multiple="multiple" size="10" class="listbox" id="ListaUsuarios"></select>');
            if (response.estado === true) {
                $.each(resp, function (key, value) {
                    $("#ListaUsuarios").append('<option value="' + value.USUid_usuario + '">' + value.USUnombre_usuario + '</option>');
                });
                //fncDuallistbox();
                $(".listbox").bootstrapDualListbox();
            }
        }
    });
}

function fncListarUsuarioProyecto() {
    const url = basepath + "/servicio/ListarUsuarioProyecto";
    const proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            var resp = response.data;
            $(".contenedor-usuarios").empty();
            if (response.estado === true) {
                $(".contenedor-usuarios").append('<table class="table table-bordered" id="tabla_usuarios_equipo"></table>');
                $("#tabla_usuarios_equipo").DataTable({
                    "bDestroy": true,
                    "bSort": false,
                    "scrollCollapse": true,
                    "scrollX": false,
                    "paging": true,
                    "autoWidth": false,
                    "bProcessing": true,
                    "bDeferRender": true,
                    data: resp,
                    columns: [
                        {data: "USUPROid_usuarioproyecto", title: "Id"},
                        {
                            data: null, title: "Integrante",
                            render: function (value) {
                                return value.USUnombre_usuario + ' ' + value.USUapellido_usuario;
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<input type="checkbox" class="switch check_change" data-on-text="On" data-off-text="Off" data-on-color="success"  checked="checked" va>';
                            }
                        }
                    ],
                    "drawCallback": function( settings ) {
                        $(".switch").bootstrapSwitch();
                    }
                });
            }

        }
    });
}