$(document).ready(function () {
    fncMostrarRegistrarTareaVista();
    fncListarFasesProyecto();
    $(document).on('click','.btnAgregarTarea',function () {
        console.log('funciono');
        console.log($("#tareaentregableform").val());
    });
    $(document).on('change','#FaseEntregableTarea',function () {
       console.log('1');
       $("#EntregableTarea").append('<option value="1">qdwqwd</option>');
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
                $("#FaseEntregableTarea").empty();
                $("#FaseEntregableTarea").append('<option value="">--Seleccione una Fase--</option>')
                $.each(resp, function (key, value) {
                    $("#FaseEntregableTarea").append('<option value="' + value.FAid_fase + '">' + value.FAnombre_fase + '</option>')
                });
            }
        }
    })
}

function fncMostrarRegistrarTareaVista() {
    $.ajax({
        type:'GET',
        url: basepath + "/servicio/MostrarRegistrarTareaVista",
        success:function (response) {
            $(".cotenendor_tareas_entregable").empty().html(response);
        }
    });
}
function fncMostrarEditarTareaVista() {
    $.ajax({
        type:'GET',
        url: basepath + "/servicio/MostrarEditarTareaVista",
        success:function (response) {
            $(".cotenendor_tareas_entregable").empty().html(response);
        }
    });
}

// function fncListarTareaEntregable() {
//     $.ajax({
//         type:'POST',
//         url: basepath + '/servicio/listar',
//         data:{
//
//         },
//         success:function (response) {
//
//         }
//     })
// }