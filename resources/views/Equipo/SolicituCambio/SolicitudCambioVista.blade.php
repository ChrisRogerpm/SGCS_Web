@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Mis Proyectos</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Lista de Solicitudes de Cambio</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('ProyectoEncargadoMenuDetalle',$PROid_proyecto)}}"
                       class="btn btn-warning btnNuevo"><i
                                class="icon-arrow-left13 position-left"></i> Volver al Menu de Opciones</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <input type="hidden" id="txtPROid_proyecto" value="{{$PROid_proyecto}}">
        <div class="col-xs-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <table class="table table-bordered" id="tabla"></table>
                </div>
            </div>
        </div>
    </div>

    <div id="ModalRevisionSolicitudCambio" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-indigo-400">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Detalles de Solicitud de Cambio</h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-info alert-styled-left text-indigo-800 content-group">
                        <span class="text-semibold">La aprobación de una solicitd de cambio puede o tiene repercusiones, tome en cuenta la magnitud del cambio.</span>
                    </div>
                    <div class="row">
                        <input type="hidden" id="txtIdSolicitudCambio">
                        <input type="hidden" id="txtTareaId">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtCodigo">Codigo</label>
                                <input type="text" class="form-control input-sm" id="txtCodigo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtSolicitante">Solicitante</label>
                                <input type="text" class="form-control input-sm" id="txtSolicitante">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtTarea">Tarea</label>

                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" id="txtTarea">
                                    <span class="input-group-btn">
                                        <button class="btn bg-teal btn-sm" id="btnTareaRelacion" type="button"><i class="icon-info22"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtObjetivo">Objetivo</label>
                                <textarea id="txtObjetivo" cols="30" rows="1" style="resize: none;" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtDescripcion">Descripcion</label>
                                <textarea id="txtDescripcion" cols="30" rows="1" style="resize: none;" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="display-block text-semibold">Estado de Solicitud</label>
                                <label class="radio-inline">
                                    <input type="radio" name="EstadoSolicitudCambio" class="styled" value="2">
                                    Aprobar
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="EstadoSolicitudCambio" class="styled" value="3">
                                    Desaprobar
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="EstadoSolicitudCambio" class="styled" value="4">
                                    Comite de Cambio
                                </label>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cross"></i> Cerrar</button>
                    <button class="btn btn-primary" id="btnEvaluarSolicitudCambio"><i class="icon-check"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_theme_success" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Tareas Involucradas</h6>
                </div>

                <div class="modal-body contenedor_relacion">
                    <table class="table table-bordered" id="tablarelacion"></table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../viewJs/SolicitudCambio/SolicitudCambioVista.js"></script>
@endpush
