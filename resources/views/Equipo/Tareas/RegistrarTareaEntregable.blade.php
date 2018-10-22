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
                    <li class="active">Registrar de Tarea Entregable</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('TareaEntregable',$PROid_proyecto)}}"
                       class="btn btn-warning btnNuevo"><i
                                class="icon-arrow-left13 position-left"></i> Volver a Lista de Tareas</a>
                    {{--<a href="{{route('TareaEntregable.Registrar',$PROid_proyecto)}}"--}}
                    {{--class="btn btn-primary btnNuevo"><i class="icon-plus-circle2 position-left"></i> Nueva Tarea</a>--}}
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="panel panel-flat">
        <div class="panel-body">
            <div class="row">
                <input type="hidden" id="id_proyecto_encargado" value="{{$PROid_proyecto}}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fase</label>
                        <select class="form-control select2" id="FaseEntregableProyecto">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Entregable</label>
                        <select class="form-control select2" id="EntregableTarea">
                            <option value="">--Seleccione--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Tarea</label>
                        <input type="text" class="form-control" id="TareaNombre">
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
                <button type="button" class="btn btn-primary btnRegistrar">Registrar Metodologia <i
                            class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/Tareas/RegistrarTareaEntregable.js"></script>
@endpush