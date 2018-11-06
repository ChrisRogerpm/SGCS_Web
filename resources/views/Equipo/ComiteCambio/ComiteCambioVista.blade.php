@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Comite de Cambio de Proyecto</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Comite de Cambios de Trabajo</li>
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
            <div class="row">
                <input type="hidden" id="id_proyecto_encargado" value="{{$PROid_proyecto}}">
                <div class="col-md-6">
                    <div class="col-md-12 contenedor-lista"></div>
                    <div class="col-md-4 col-md-offset-8">
                        <button type="button" class="btn btn-primary btn-sm pull-right btn-block btnAgregarEquipo"
                                style="margin-top:10px; margin-bottom: 10px;">Agregar
                        </button>
                    </div>
                </div>
                <div class="col-md-6 contenedor-usuarios">
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/ComiteCambio/ComiteCambioVista.js"></script>
@endpush