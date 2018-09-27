$(document).ready(function () {
    $(document).on('click','.btAdd',function () {
        $.ajax({
            type:'GET',
            url: basepath + "/servicio/MostrarRegistrarTareaVista",
            success:function (response) {
                $(".cotenendor_tareas_entregable").empty().html(response);
            }
        });
    });
    $(".btEdt").click(function () {
        $.ajax({
            type:'GET',
            url: basepath + "/servicio/MostrarEditarTareaVista",
            success:function (response) {
                $(".cotenendor_tareas_entregable").empty().html(response);
            }
        });
    });

    $(document).on('click','.btnAgregarTarea',function () {
        console.log('funciono');
        console.log($("#tareaentregableform").val());
    });
});
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