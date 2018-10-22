@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Tarea Entregable de Proyecto</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Lista de Tareas Entregables</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('ProyectoEncargadoMenuDetalle',$PROid_proyecto)}}"
                       class="btn btn-warning btnNuevo"><i
                                class="icon-arrow-left13 position-left"></i> Volver al Menu de Opciones</a>
                    <a href="{{route('TareaEntregable.Registrar',$PROid_proyecto)}}"
                       class="btn btn-primary btnNuevo"><i class="icon-plus-circle2 position-left"></i> Nueva Tarea</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <input type="hidden" id="id_proyecto_encargado" value="{{$PROid_proyecto}}">
        <div class="col-xs-12">
            <div class="panel panel-flat">
                <div class="panel-body contenedor_tabla">
                </div>
            </div>
        </div>
    </div>
    <div id="ModalRelacionTarea" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-indigo-400">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Relacionar Tarea Entregable</h5>
                </div>

                <div class="modal-body">
                    <div class="alert alert-info alert-styled-left text-indigo-800 content-group">
                        <span class="text-semibold">La relación entre tareas ayuda a evidenciar la magnitud de posibles cambios.</span>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" id="id_tarea_modal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Fases</label>
                                    <select id="FaseModal" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Entregable</label>
                                    <select id="EntregableModal" class="form-control">
                                        <option value="">--Seleccione--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 contenedor_tareas_entregable">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cross"></i> Cerrar</button>
                    <button class="btn btn-primary" id="sweet_combine"><i class="icon-check"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/Tareas/ListarTareaEntregable.js"></script>
@endpush
