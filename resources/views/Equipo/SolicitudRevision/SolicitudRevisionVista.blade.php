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
                    <li class="active">Lista de Solicitudes de Revision</li>
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
                </div>
            </div>
        </div>

        <div id="ModalRevision" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo-400">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Generar Versión - Revisión de Tarea
                        </h5>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="frmNuevo">
                                    <input type="hidden" id="txtTAREid_revision" name="TAREid_revision">
                                    <input type="hidden" name="TAHIenlace_tareaversion" id="TAHIenlace_tareaversion_">
                                    <div class="form-group">
                                        <label class="control-label">Link de Documento</label>
                                        <div class="input-group">
                                            <input type="text" disabled class="form-control input-sm" id="txtTAHIenlace_tareaversion">
                                            <span class="input-group-addon" id="btnUrl"><a href="#" target="_blank" id="txtAbrirLink"><i class="icon-chrome"></i></a></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Observación Realizada</label>
                                        <textarea id="txtObservacion" cols="30" rows="3" disabled="disabled" style="resize: none;"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="display-block text-semibold">Estado de Solicitud</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="TAHIestado_tareaversion" class="styled" value="1">
                                            Aprobar
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="TAHIestado_tareaversion" class="styled" value="2">
                                            Desaprobar
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cross"></i> Cerrar</button>
                        <button class="btn btn-primary" id="btnGuardar"><i class="icon-check"></i> Revisar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../viewJs/SolicitudRevision/SolicitudRevisionVista.js"></script>
@endpush