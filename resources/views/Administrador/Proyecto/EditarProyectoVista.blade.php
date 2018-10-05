@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Proyecto</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Proyecto</a></li>
                    <li class="active">Editar Proyecto</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Proyecto')}}" class="btn bg-warning-300 btnNuevo"><i
                                class="icon-arrow-left52 position-left"></i> Volver</a>
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
                            <input type="hidden" id="txt_id_proyecto" value="{{$id_proyecto}}">
                            <div class="col-lg-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Nombre de Proyecto</label>
                                    <input type="text" class="form-control" id="txt_nombre_proyecto">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Jefe de Proyecto</label>
                                    <select id="txt_usuario" class="form-control" style="width: 100%;"></select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Fecha de Inicio</label>
                                    <div class="prepend-icon">
                                        <input type="date" id="txt_fecha_inicio"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Fecha de Fin</label>
                                    <div class="prepend-icon">
                                        <input type="date" id="txt_fecha_fin"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Estado:</label>
                                    <select id="txt_estado" class="form-control" style="width: 100%;">
                                        <option value="1">Habilitado</option>
                                        <option value="0">Deshabilitado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn bg-warning btnModificar">Modificar Proyecto <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection

@push('Js')
    <script src="../viewJs/Proyecto/EditarProyectoVista.js"></script>
@endpush