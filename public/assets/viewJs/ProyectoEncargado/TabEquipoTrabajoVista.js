$(document).ready(function () {
    $("#TabEquipo").click(function () {
        fncListarUsuarios();
        fncListarUsuarioProyecto();
    });

    $(document).on('click','.btnAgregarEquipo',function () {
        var ListaUsuarios = $("#ListaUsuarios").val();
        var proyecto_id = $("#id_proyecto_encargado").val();
        if (ListaUsuarios == null) {
            toastr.error('Seleccione almenos un Usuario', 'Mensaje Servidor');
        } else {
            // toastr.success('Se ha registrado con éxito','Mensaje Servidor');
            $.ajax({
                type: 'POST',
                url: basepath + '/servicio/RegistrarUsuarioProyecto',
                cache:false,
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
    $(document).on('click','.img_click',function () {
        $('#warningModalAlert').appendTo("body").modal({
            backdrop: 'static',
            keyboard: false
        });
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
            $(".contenedor-lista").empty().append('<select multiple="multiple" size="10" class="Duallistbox" id="ListaUsuarios"></select>');
            if (response.estado === true) {
                $.each(resp, function (key, value) {
                    $("#ListaUsuarios").append('<option value="' + value.USUid_usuario + '">' + value.USUnombre_usuario + '</option>');
                });
                fncDuallistbox();
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
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            var resp = response.data;
            $(".contenedor-usuarios").empty();
            if (response.estado === true) {
                $.each(resp, function (key, value) {
                    $(".contenedor-usuarios").append('<div class="col-md-4">\n' +
                        '            <div class="card">\n' +
                        '                <div class="card-body">\n' +
                        '                    <div class="media">\n' +
                        '                        <div class="media-middle media-left">\n' +
                        '                      <span class="bg-white sq-64 circle">\n' +
                        '                          <a href="#">\n' +
                        '                                <img class="img-circle img_click" width="60" height="60" src="../Imagenes/' + value.USUfoto_usuario + '">\n' +
                        '                            </a>\n' +
                        '                      </span>\n' +
                        '                        </div>\n' +
                        '                        <div class="media-middle media-body">\n' +
                        '                            <h3 class="media-heading">\n' +
                        '                                <span class="fw-l">' + value.USUnombre_usuario + ' ' + value.USUapellido_usuario + '</span>\n' +
                        '                                <span class="fw-b fz-sm text-danger">\n' +
                        '                        </span>\n' +
                        '                            </h3>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>');
                });
            }
        },
        error: function (response) {

        }
    });
}