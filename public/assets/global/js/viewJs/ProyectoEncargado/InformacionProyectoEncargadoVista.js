$(document).ready(function () {
    $("#metodologia_id").select2();
    $(".btnTab").click(function () {
        var href = ''+$(this).attr('href');
        console.log(href);
    });
});

function fncListarVistasProyectos(id) {

}