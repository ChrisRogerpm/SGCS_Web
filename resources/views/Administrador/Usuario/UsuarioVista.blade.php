@extends('Shared.layout')

@push('Css')
    <link href="../assets/global/plugins/datatables/dataTables.min.css" rel="stylesheet">
@endpush


@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Usuarios</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li class="active">Lista de Usuarios</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Usuario.Registrar')}}" class="btn btn-primary btnNuevo"><i class="icon-plus-circle2 position-left"></i> Nuevo Usuario</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <table class="table table-bordered" id="tabla"></table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../viewJs/Usuario/UsuarioVista.js"></script>
@endpush
