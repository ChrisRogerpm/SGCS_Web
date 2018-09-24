$(document).ready(function () {
    fncListarFasesProyecto();
    $("#EntregableProyecto").select2();
    $("#TabEntregables").click(function () {
        fncListarFasesProyecto();
    });
});

function fncListarFasesProyecto() {
    const proyecto_id = $("#id_proyecto_encargado").val();
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
                $("#EntregableProyecto").empty();
                $.each(resp, function (key, value) {
                    $("#EntregableProyecto").append('<option value="' + value.FAid_fase + '">' + value.FAnombre_fase + '</option>')
                })
            }
        }
    })
}

function fncListarEntregableProyecto() {
    const proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: basepath + "/servicio/ListarEntregableProyecto",
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            var resp = response.data;
            $(".contenedor_fase_entregable").empty().append('<label class="form-check-label">\n' +
                '                <input class="form-check-input" type="checkbox" name="ENTRid_entregable" value="' + resp.das + '">\n' +
                '                ' + resp.dqwd + '   </label>')
        }
    })
}