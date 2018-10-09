@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Entregables</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Entregables</a></li>
                    <li class="active">Nuevo Entregable</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Entregable')}}" class="btn bg-warning-300 btnVolver"><i class="icon-plus-circle2 position-left"></i> Volver</a>
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
                            <div class="col-md-3">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Metodologia</label>
                                    <select id="txt_metodologia" class="form-control select2"></select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Fase</label>
                                    <select id="txt_fase" class="form-control select2"></select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Nombre de Entregable</label>
                                    <input type="text" class="form-control" id="txt_nombre_entregable">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Estado:</label>
                                    <select id="txt_estado" class="form-control select2">
                                        <option value="1">Habilitado</option>
                                        <option value="0">Deshabilitado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Descripcion</label>
                                    <textarea id="txt_descripcion" cols="30" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary btnRegistrar">Registrar Entregable <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

@push('Js')
    <script src="../viewJs/Entregable/RegistrarEntregableVista.js"></script>
@endpush