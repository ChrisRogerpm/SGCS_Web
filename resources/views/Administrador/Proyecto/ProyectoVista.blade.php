@extends('Shared.layout')
@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Proyectos</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li class="active">Lista de Proyectos</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Proyecto.Registrar')}}" class="btn btn-primary btnNuevo"><i class="icon-plus-circle2 position-left"></i> Nuevo Proyecto</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-flat">
                <table class="table table-bordered" id="tabla"></table>
            </div>
        </div>
    </div>
@endsection
@push('Js')
    <script src="../viewJs/Proyecto/ProyectoVista.js"></script>
@endpush
