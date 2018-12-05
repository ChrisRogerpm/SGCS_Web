$(function () {

    // drawChart();
    // MostrarData();
    fncListarProyectosEncargadosJs();
    fncMostrarDataUsuario();

    $("#cboProyectos").change(function () {
        var ProyectoId = $(this).val();
        ListarFasesProyecto(ProyectoId);
    });
});


function MostrarData(data) {

    $("#container").empty();
    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        tooltip: {
// <<<<<<< HEAD
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
// =======
//             pointFormat: '{series.name}: {point.y}'
// >>>>>>> e8c33043712e2ef727fb974c4d43b426bd92fd67
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Tareas Finalizadas',
            data: data
        }]
    });
}

function fncMostrarDataUsuario() {
    $.ajax({
        type: 'GET',
        url: basepath + "/servicio/ListarDataReporteDashboard",
        success: function (response) {
            var resp = response.data;
            $("#ProyectosEncargados").html(resp[0].CantidadProyectos);
            $("#TareasDesignadas").html(resp[0].TareasDesignadas);
            $("#SolicitudesCambioEnviadas").html(resp[0].SolicitudesRealizadas);
            $("#TareasFinalizadas").html(resp[0].TareasFinalizadas);
        }
    });
}

function ListarFasesProyecto(ProyectoId) {
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/ListarFasesProyecto',
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': ProyectoId
        },
        success: function (response) {
            debugger
            let resp = response.data;
            var data = [];
            $.each(resp, function (key, value) {

                var ProyectoId = 0;
                var FaseId = 0;
                var TareasTotales = 0;
                ProyectoId = $("#cboProyectos").val();
                FaseId = value.FAid_fase;
                TareasTotales = fncObtenerTotalTareasFinalizadas(ProyectoId,FaseId);
                data.push({
                    name: value.FAnombre_fase,
                    y: TareasTotales
                });
            });


            MostrarData(data);
        }
    })
}

function fncListarProyectosEncargadosJs() {
    $.ajax({
        type: 'GET',
        url: basepath + '/servicio/ProyectosEncargados',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            let resp = response.data;
            $("#cboProyectos").empty();
            $("#cboProyectos").append('<option value="">--Seleccione una Proyecto--</option>');
            $.each(resp, function (key, value) {
                $("#cboProyectos").append('<option value="' + value.PROid_proyecto + '">' + value.PROnombre_proyecto + '</option>')
            });
            $("#cboProyectos").select2();
        },
    });
}

function fncObtenerTotalTareasFinalizadas(ProyectoId, FaseId) {
    //var tareas;
    $.ajax({
        type: 'POST',
        async: false,
        url: basepath+ '/servicio/ObtenerTotalTareasFinalizadas',
        // contentType: "application/json; charset=utf-8",
        // dataType: "json",
        data: {
            'PROid_proyecto': ProyectoId,
            'FAid_fase': FaseId
        },
        success: function (response) {
            var resp = response.data;
            tareas = resp[0].TotalTareas;
        },
    });
    return tareas;
}