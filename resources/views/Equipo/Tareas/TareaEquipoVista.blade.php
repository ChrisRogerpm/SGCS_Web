@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Mis Tareas</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Tareas</a></li>
                    <li class="active">Lista de Mis tareas</li>
                </ul>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-flat">
                <div class="panel-body contenedor">
                </div>
            </div>
        </div>

        {{--Modal Revision--}}
        <div id="ModalRevision" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-indigo-400">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Generar Revision Tarea</h5>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <form id="frmNuevo" autocomplete="off">
                                <div class="col-md-12">
                                    <input type="hidden" name="ATPid_asignartareaproyecto"
                                           id="txtATPid_asignartareaproyecto">
                                    <div class="form-group">
                                        <label for="">Documento</label>
                                        <input type="file" name="TAREurl_tarearevision" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Observación</label>
                                        <textarea name="TAREobservacion_tarearevision" style="resize: none" cols="30" rows="3"
                                                  class="form-control"></textarea>
                                    </div>
                                    <span class="help-block">(*) Campo Obligatorio</span>
                                </div>
                            </form>
                        </div>
                        <hr>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cross"></i> Cerrar</button>
                        <button class="btn btn-primary" id="btnGuardar"><i class="icon-check"></i> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{--Modal Historial--}}

    </div>
@endsection


@push('Js')
    <script src="../viewJs/MisTareas/ListarMisTareas.js"></script>
@endpush
