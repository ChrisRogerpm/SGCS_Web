@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Menu de Opciones</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Menu Opciones Proyecto Encargado</li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <a href="{{route('ProyectoEncargado.Informacion',$PROid_proyecto)}}">
                <div class="panel panel-body bg-indigo-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <span class="text-uppercase text-size-mini">Información del Proyecto</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-info22 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('EquipoTrabajo',$PROid_proyecto)}}">
                <div class="panel panel-body bg-info-300 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            
                            <span class="text-uppercase text-size-mini">Equipo de Trabajo</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-users4 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('EntregableProyecto',$PROid_proyecto)}}">
                <div class="panel panel-body bg-warning-600 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            
                            <span class="text-uppercase text-size-mini">Entregables</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-file-empty icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('TareaEntregable',$PROid_proyecto)}}">
                <div class="panel panel-body bg-success-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            
                            <span class="text-uppercase text-size-mini">Tareas</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-file-check2 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('ComiteCambio',$PROid_proyecto)}}">
                <div class="panel panel-body bg-primary-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <span class="text-uppercase text-size-mini">Comite de Cambios</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-users2 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('AvanceProyecto',$PROid_proyecto)}}">
                <div class="panel panel-body bg-warning-300 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            
                            <span class="text-uppercase text-size-mini">Avances del Proyecto</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-stats-bars2 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('SolicitudRevision',$PROid_proyecto)}}">
                <div class="panel panel-body bg-indigo-800 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            
                            <span class="text-uppercase text-size-mini">Solicitudes de Revisión</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-file-openoffice icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="{{route('SolicitudCambio',$PROid_proyecto)}}">
                <div class="panel panel-body bg-danger-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <span class="text-uppercase text-size-mini">Solicitudes de Cambio</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-file-locked icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
@stop