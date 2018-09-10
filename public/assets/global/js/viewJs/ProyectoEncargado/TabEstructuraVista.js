$(document).ready(function () {
    fncListarEstructuraProyecto();
    $("#metodologia_id").select2();
});
function fncListarEstructuraProyecto() {
    const proyecto_id = $("#id_proyecto_encargado").val();
    const url = basepath + "/servicio/InformacionProyectosEncargado";
    $.ajax({
        type:'POST',
        url:url,
        data:{
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto':proyecto_id
        },
        success:function (response) {
            debugger
            var resp = response.data;
            if (response.estado === true){
                $("#nombre_proyecto").val(resp.PROnombre_proyecto);
                $("#jefe_proyecto").val(resp.USUnombre_usuario);
                $("#fecha_inicio").val(resp.PROfecha_inicio_proyecto);
                $("#fecha_fin").val(resp.PROfecha_fin_proyecto);
                fncListarMetodologias();
            } else{
                toastr.error('Servicio no encontrado','Mensaje Servidor');
            }
        },
        error:function (response) {
            toastr.error('Servicio no encontrado','Mensaje Servidor');
        }
    });
}

function fncListarMetodologias() {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ListarMetodologiasPro',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $("#metodologia_id").append('<option value="0">--Seleccione--</option>');
                $.each(resp, function (ind, dat) {
                    $("#metodologia_id").append('<option value="' + dat.METid_metodologia + '">' + dat.METnombre_metodologia + '</option>');
                });
                $("#metodologia_id").val(0).change();
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    })
}