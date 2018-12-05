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
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                var ProyectoId = ProyectoId;
                var FaseId = value.FAestado_fase;
                data.push({
                    name: value.FAnombre_fase,
                    y : 2
                });
            });
            MostrarData(data);
        }
    })
}

function fncListarProyectosEncargadosJs() {
    $.ajax({
        type: 'GET',
        url: 'servicio/ProyectosEncargados',
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

function fncObtenerTotalTareasFinalizadas(ProyectoId,FaseId) {
    
}