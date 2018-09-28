$(document).ready(function () {
    fncMostrarRegistrarTareaVista();
    $(document).on('click','.btnAgregarTarea',function () {
        console.log('funciono');
        console.log($("#tareaentregableform").val());
    });
});

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