@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Equipo de Trabajo</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Entregables de Trabajo</li>
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
    <div class="panel panel-flat">
        <div class="panel-body">
            <input type="hidden" id="id_proyecto_encargado" value="{{$PROid_proyecto}}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fases</label>
                        <select class="form-control" id="FaseEntregableProyecto"></select>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong>Entregables Disponibles</strong>
                        </div>
                        <div class="card-body TablaEntregableDisponible">
                            <table id="TablaEntregableDisponible" class="table table-hover table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-left">Entregable</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <button class="btn btn-primary btn-sm btn-block btnAgregarEntregableProyecto">Agregar</button>
                </div>
                <div class="col-md-8">
                    <label for="">Lista de Entregables - Proyecto</label>
                    <div class="ListaEntregableProyecto"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/ProyectoEncargado/TabEntregableProyectoVista.js"></script>
@endpush