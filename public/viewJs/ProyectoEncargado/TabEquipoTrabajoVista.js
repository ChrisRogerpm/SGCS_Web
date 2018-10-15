$(document).ready(function () {
    fncListarUsuarios();
    fncListarUsuarioProyecto();
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
                    debugger
                    if (response.estado === true) {
                        fncListarUsuarios();
                        fncListarUsuarioProyecto();
                        toastr.success('Se ha registrado la Metodologia exitosamente', 'Mensaje Servidor');
                    }
                }
            })
        }

    });
});

function fncCambiarEstadoUsuarioProyecto(IdUsuarioProyecto, Estado) {
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/CambiarEstadoUsuarioProyecto",
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'USUPROid_usuarioproyecto': IdUsuarioProyecto,
            'USUPROestado_usuarioproyecto': Estado
        },
        success: function (response) {
            var resp = response.estado;
            if (resp === true) {
                toastr.success('Se ha actualizado el usuario satisfactoriamente', 'Mensaje Servidor');
            } else {
                toastr.error('Error no se ha podido deshabilitar al usuario', 'Mensaje Servidor');
            }
        }
    });
}

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
                            data: null, title: "Estado",
                            render: function (value) {
                                if (value.USUPROestado_usuarioproyecto === 1) {
                                    return '<input type="checkbox" class="switch" data-on-text="Activo" data-off-text="Inactivo" data-on-color="primary" data-off-color="success" checked="checked" value="' + value.USUPROid_usuarioproyecto + '">';
                                } else {
                                    return '<input type="checkbox" class="switch" data-on-text="Activo" data-off-text="Inactivo" data-on-color="primary" data-off-color="success" value="' + value.USUPROid_usuarioproyecto + '">';
                                }
                            }
                        }
                    ],
                    "drawCallback": function (settings) {
                        $(".switch").bootstrapSwitch();
                        $('.switch').on('switchChange.bootstrapSwitch', function (event, state) {
                            if (state) {
                                var Id_UsuarioProyecto = $(this).val();
                                var Estado = 1;
                                fncCambiarEstadoUsuarioProyecto(Id_UsuarioProyecto, Estado);
                            } else {
                                var Id_UsuarioProyecto = $(this).val();
                                var Estado = 0;
                                fncCambiarEstadoUsuarioProyecto(Id_UsuarioProyecto, Estado);
                            }
                        });
                    }
                });
            }

        }
    });
}