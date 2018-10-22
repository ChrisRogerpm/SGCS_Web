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
                    <li class="active">Editar de Tarea Entregable</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group volver">

                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="panel panel-flat">
        <div class="panel-body">
            <div class="row">
                <input type="hidden" id="id_proyecto_encargado">
                <input type="hidden" id="id_tarea_entregable" value="{{$TAid_tarea}}">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Fase</label>
                        <select class="form-control select2" id="FaseEntregableProyecto">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Entregable</label>
                        <select class="form-control select2" id="EntregableTarea">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tarea</label>
                        <input type="text" class="form-control" id="TareaNombre">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Estado</label>
                        <select id="TareaEstado" class="form-control">
                            <option value="">--Seleccione--</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <textarea class="form-control" id="TareaDescripcion" cols="30" rows="5" style="resize: none;"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-success btnRegistrar">Modificar Tarea <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/Tareas/EditarTareaEntregable.js"></script>
@endpush