$(document).ready(function () {
    fncListarTareasEntregables();
    $(document).on('click', '.btnEditar', function () {
        var TareaEntregable_id = $(this).data('id');
        var url = '/EditarTareaEntregable/' + TareaEntregable_id;
        window.location.replace(url);
    });
});

function fncListarTareasEntregables() {
    var proyecto_id = $("#id_proyecto_encargado").val();
    $.ajax({
        type: 'POST',
        url: basepath + '/servicio/TareaEntregable',
        cache: false,
        data: {
            '_token': $('input[name=_token]').val(),
            'PROid_proyecto': proyecto_id
        },
        success: function (response) {
            let est = response.estado;
            let resp = response.data;
            if (est === true) {
                $(".contenedor_tabla").empty().append('<table class="table table-bordered" id="tabla"></table>');
                $("#tabla").DataTable({
                    data: resp,
                    columns: [
                        {data: "TAid_tarea", title: "Id"},
                        {data: "ENTRnombre_entregable", title: "Entregable"},
                        {data: "TAnombre_tarea", title: "Tarea"},
                        {
                            data: "TAestado_tarea", title: "Estado",
                            render: function (value) {
                                if (value === 1) {
                                    return '<span class="label label-primary">Habilitado</span>';

                                } else {
                                    return '<span class="label label-danger">Deshabilitado</span>';
                                }
                            }
                        },
                        {
                            data: null, title: "Acción",
                            render: function (value) {
                                return '<button type="button" class="btn btn-sm btn-success btnEditar" data-id="' + value.TAid_tarea + '"><i class="glyphicon glyphicon-edit"></i></button> ' +
                                    '<button type="button" class="btn btn-sm btn-info btnRelacionar" data-id="' + value.TAid_tarea + '"><i class="icon  icon-spinner9"></i></button> ' +
                                    '<button type="button" class="btn btn-sm btn-primary btnAsignar" data-id="' + value.TAid_tarea + '"><i class="icon icon-user-check"></i></button>';
                            }
                        }
                    ],
                    "drawCallback": function () {
                        $('.btnEditar').tooltip({
                            title: "Editar"
                        });
                        $('.btnRelacionar').tooltip({
                            title: "Relacionar Tarea"
                        });
                        $('.btnAsignar').tooltip({
                            title: "Asignar Tarea"
                        });
                        $('.btnRelacionar').click(function () {
                            var id_tarea_modal = $(this).data('id');
                            $('#id_tarea_modal').val(id_tarea_modal);
                            $(this).tooltip("hide");
                            $("#ModalRelacionTarea").modal({
                                backdrop: 'static',
                                keyboard: false
                            });

                            $.when(llenarSelect(basepath + "/servicio/ListarFasesProyecto", {
                                '_token': $('input[name=_token]').val(),
                                'PROid_proyecto': $("#id_proyecto_encargado").val()
                            }, "FaseModal", "FAid_fase", "FAnombre_fase", "")).then(function (response, textStatus) {
                                $("#FaseModal").select2();
                            });
                            $("#EntregableModal").empty().append('<option value="">--Seleccione--</option>');
                            $("#EntregableModal").select2();
                            $(".contenedor_tareas_entregable").empty();
                        });

                        $('.btnAsignar').click(function () {
                            // var id_tarea_modal = $(this).data('id');
                            // $('#id_tarea_modal').val(id_tarea_modal);
                            $(this).tooltip("hide");
                            $("#ModalAsignarTarea").modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                            $.when(llenarSelect(basepath + "/servicio/ListarUsuarioProyecto", {
                                '_token': $('input[name=_token]').val(),
                                'PROid_proyecto': $("#id_proyecto_encargado").val()
                            }, "txtResponsable", "USUPROid_usuarioproyecto", "USUnombre_usuario", "")).then(function (response, textStatus) {
                                $("#txtResponsable").select2();
                            });

                        });
                        
                        $("#BtnAsignarTarea").click(function () {
                            var Responsable = $("#txtResponsable").val();
                            var FechaIni = $("#txtFechaInicioTarea").val();
                            var FechaFin = $("#txtFechaFinTarea").val();
                            if (Responsable === ""){
                                toastr.error('Seleccione un Responsable','Mensaje Servidor');
                                return false;
                            } if (FechaIni === ""){
                                toastr.error('Seleccione una Fecha de Inicio','Mensaje Servidor');
                                return false;
                            } if (FechaFin === ""){
                                toastr.error('Seleccione una Fecha de Fin','Mensaje Servidor');
                                return false;
                            }
                        });

                        $("#FaseModal").change(function () {
                            var fase_modal_id = $(this).val();
                            var proyecto_id = $("#id_proyecto_encargado").val();
                            $.when(llenarSelect(basepath + "/servicio/ListarEntregableFaseProyecto", {
                                '_token': $('input[name=_token]').val(),
                                'PROid_proyecto': proyecto_id,
                                'FAid_fase':fase_modal_id
                            }, "EntregableModal", "ENTRPROid_entregableproyecto", "ENTRnombre_entregable", "")).then(function (response, textStatus) {
                                $("#EntregableModal").select2('destroy');
                                $("#EntregableModal").select2();
                            });
                            $(".contenedor_tareas_entregable").empty();
                        });

                        $("#EntregableModal").change(function () {
                            var entregable_modal_id = $(this).val();
                            $(".contenedor_tareas_entregable").empty().append('<div class="form-group">\n' +
                                '                                    <label class="control-label">Tarea</label>\n' +
                                '                                    <select class="select" multiple="multiple" id="TareaModal">\n' +
                                '                                    </select>\n' +
                                '                                </div>');

                            $.when(llenarSelectwithoutSelection(basepath + "/servicio/ListarTareaFiltroEntregble", {
                                '_token': $('input[name=_token]').val(),
                                'ENTPROid_entregableproyecto': entregable_modal_id
                            }, "TareaModal", "TAid_tarea", "TAnombre_tarea", "")).then(function (response, textStatus) {
                                $("#TareaModal").select2({
                                    minimumResultsForSearch: Infinity,
                                    containerCssClass: 'text-primary-700 select-xs',
                                });
                            });

                        });

                        $('#GuardarRelacionTarea').on('click', function() {
                            var TareaModal = document.getElementById('TareaModal');
                            var EntregableModal = $("#EntregableModal").val();
                            var FaseModal = $("#FaseModal").val();

                            if( FaseModal === ""){
                                toastr.error('Seleccione una Fase','Mensaje Servidor');
                                return false;
                            }if( EntregableModal === ""){
                                toastr.error('Seleccione un Entregable','Mensaje Servidor');
                                return false;
                            }if( TareaModal.value === ""){
                                toastr.error('Seleccione una Tarea','Mensaje Servidor');
                                return false;
                            }
                            swal({
                                    title: "Esta Seguro de Continuar?",
                                    text: "La tarea seleccionada tendra relación con las tareas filtradas",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#283593",
                                    allowOutsideClick: false,
                                    confirmButtonText: "Si, Relacionar!",
                                    cancelButtonText: "No, Cancelar!",
                                    closeOnConfirm: false,
                                    closeOnCancel: true
                                },
                                function(isConfirm){
                                    if (isConfirm) {
                                        swal({
                                            title: "Se ah registrado con éxito!",
                                            text: "Tu tarea se ha relacionado con las demas Tareas.",
                                            confirmButtonColor: "#66BB6A",
                                            type: "success"
                                        },function () {
                                            $('#ModalRelacionTarea').modal('hide');
                                            fncRegistrarRelacionTarea();
                                        });
                                    }
                                });
                        });
                    }
                });
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        },
    });
}

function fncRegistrarRelacionTarea() {
    var Tarea2 = $("#TareaModal").val();
    var url = basepath + '/servicio/RegistrarRelacionTareaEntregable';
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': $('input[name=_token]').val(),
            'TAid_tarea1': $("#id_tarea_modal").val(),
            'TAid_tarea2': Tarea2
        },
        success: function (response) {
            debugger
            let est = response.estado;
            if (est === true) {
                toastr.success('Se registro satisfactoriamente', 'Mensaje Servidor');
            } else {
                toastr.error('Servicio no encontrado', 'Mensaje Servidor');
            }
        }
    });
}