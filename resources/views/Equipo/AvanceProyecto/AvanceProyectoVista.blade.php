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
                    <li class="active">Avance de Proyecto</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('ProyectoEncargadoMenuDetalle',$PROid_proyecto)}}"
                       class="btn btn-warning btnNuevo"><i
                                class="icon-arrow-left13 position-left"></i> Volver al Menu de Opciones</a>
                </div>
                <input type="hidden" id="txtProyectoId" value="{{$PROid_proyecto}}">
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="contenedor_">
        {{--<div class="col-md-6">--}}
            {{--<div class="panel-group panel-group-control panel-group-control-right content-group-lg"--}}
                 {{--id="accordion-control-right">--}}
                {{--<div class="panel">--}}
                    {{--<div class="panel-heading bg-primary-400">--}}
                        {{--<h6 class="panel-title">--}}
                            {{--<a class="collapsed" data-toggle="collapse" data-parent="#accordion-control-right"--}}
                               {{--href="#accordion-control-right-group2">Accordion Item #2</a>--}}
                        {{--</h6>--}}
                    {{--</div>--}}
                    {{--<div id="accordion-control-right-group2" class="panel-collapse collapse">--}}
                        {{--<div class="panel-body" id="">--}}
                            {{--<table id="tabla" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%"></table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@stop

@push('Js')
    <script src="../viewJs/AvanceProyecto/AvanceProyecto.js"></script>
@endpush