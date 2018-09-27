$(document).ready(function () {
    
});
function fncListarTareaEntregable() {
    $.ajax({
        type:'POST',
        url: basepath + '/servicio/listar',
        data:{

        },
        success:function (response) {

        }
    })
}