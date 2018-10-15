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
                    <li class="active">Gestion de Tareas</li>
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

        </div>
    </div>
@stop
