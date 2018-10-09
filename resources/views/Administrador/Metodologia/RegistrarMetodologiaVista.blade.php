@extends('Shared.layout')


@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Metodologias</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Metodologias</a></li>
                    <li class="active">Nueva Metodologia</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Metodologia')}}" class="btn bg-warning-300 btnVolver"><i class="icon-plus-circle2 position-left"></i> Volver</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <div class="panel panel-flat">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nombre de Metodología</label>
                                    <input type="text" class="form-control" id="txt_nombre_metodologia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Cantidad de Fases</label>
                                    <input type="number" class="form-control" id="txt_nro_fases">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Estado:</label>
                                    <select id="txt_estado" class="form-control select2">
                                        <option value="1">Habilitado</option>
                                        <option value="0">Deshabilitado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary btnRegistrar">Registrar Metodologia <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection

@push('Js')
    <script src="../viewJs/Metodologia/RegistrarMetodologiaVista.js"></script>
@endpush