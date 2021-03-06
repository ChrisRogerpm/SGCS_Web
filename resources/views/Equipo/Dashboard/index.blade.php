@extends('Shared.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-flat border-grey-800">
                <div class="panel-heading">
                    <h5 class="panel-title">Estados de Proyectos</h5>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">Seleccione Proyecto</label>
                        <select name="" id="cboProyectos" class="form-control"></select>
                    </div>
                    <div id="container"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-right: 0px; padding-left: 0px;">
            <div class="col-md-6">
                <div class="panel panel-body bg-blue-400 has-bg-image border-grey-800">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin" id="ProyectosEncargados">-</h3>
                            <span class="text-uppercase text-size-mini">Proyectos Encargados</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-bubbles4 icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-body bg-danger-400 has-bg-image border-grey-800">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin" id="TareasDesignadas">-</h3>
                            <span class="text-uppercase text-size-mini">Tareas Designadas</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="icon-bag icon-3x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-body bg-success-400 has-bg-image border-grey-800">
                    <div class="media no-margin">
                        <div class="media-left media-middle">
                            <i class="icon-pointer icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="no-margin" id="SolicitudesCambioEnviadas">-</h3>
                            <span class="text-uppercase text-size-mini">Solicitudes de Cambio Enviadas</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-body bg-indigo-400 has-bg-image border-grey-800">
                    <div class="media no-margin">
                        <div class="media-left media-middle">
                            <i class="icon-enter6 icon-3x opacity-75"></i>
                        </div>

                        <div class="media-body text-right">
                            <h3 class="no-margin" id="TareasFinalizadas">-</h3>
                            <span class="text-uppercase text-size-mini">Tareas Finalizadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script type="text/javascript" src="../viewJs/Equipo/Dashboard.js"></script>
    {{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>--}}
    {{--<script src="https://code.highcharts.com/highcharts.js"></script>--}}
@endpush
