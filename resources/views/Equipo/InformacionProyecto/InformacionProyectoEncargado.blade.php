@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Información de Proyecto</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Proyectos</a></li>
                    <li class="active">Información Proyecto</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('ProyectoEncargadoMenuDetalle',$proyecto_id)}}" class="btn btn-warning btnNuevo"><i
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
                <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre de Proyecto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon icon-info22"></i></span>
                                    <input class="form-control" disabled type="text" id="NombreProyecto" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Jefe de Proyecto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon icon-user"></i></span>
                                    <input class="form-control" disabled type="text" id="JefeProyecto">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Fecha de Inicio de Proyecto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon icon-calendar"></i></span>
                                    <input class="form-control" disabled type="text" id="InicioProyecto">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Fecha deFin de Proyecto</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon icon-calendar"></i></span>
                                    <input class="form-control" disabled type="text" id="FinProyecto">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Días Restantes</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon icon-calendar"></i></span>
                                    <input class="form-control" disabled type="text" id="DiasRestantes">
                                </div>
                            </div>
                        </div>
                        <div class="contenedor-metodologia-proyecto">

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-body bg-danger-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin EquipoTrabajo"> - </h3>
                                <span class="text-uppercase text-size-mini">Miembros de Equipo</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-user icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-body bg-success-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin EquipoTrabajo"> - </h3>
                                <span class="text-uppercase text-size-mini">Tareas</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-file-empty icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-body bg-indigo-300 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin EquipoTrabajo"> - </h3>
                                <span class="text-uppercase text-size-mini">Miembros Comite</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-user-check icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-body bg-warning-300 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin EquipoTrabajo"> - </h3>
                                <span class="text-uppercase text-size-mini">Solicitudes</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-file-eye icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('Js')
    <script src="../viewJs/ProyectoEncargado/InformacionProyectoEncargadoVista.js"></script>
    <script src="../viewJs/ProyectoEncargado/TabEstructuraVista.js"></script>


    {{--<script src="../viewJs/ProyectoEncargado/TabGestionarTareaEntregableVista.js"></script>--}}
@endpush
