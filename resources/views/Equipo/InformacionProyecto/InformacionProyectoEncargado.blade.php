@extends('Shared.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat border-slate-800">
                <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
                <div class="panel-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-tabs-bottom bottom-divided nav-justified nav-tabs-icon">
                            <li class="active"><a href="#Tab1" id="TabEstructura" data-toggle="tab"><i class="icon-menu7"></i> Estructura</a></li>
                            <li><a href="#Tab2" id="TabEquipo" data-toggle="tab"><i class="icon-menu7"></i> Equipo de Trabajo</a></li>
                            <li><a href="#Tab3" id="TabEntregables" data-toggle="tab"><i class="icon-menu7"></i> Entregables</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> Tareas</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#TabRegistroTarea" tabindex="-1" data-toggle="tab">Registrar Tarea</a></li>
                                    <li><a href="#TabRelacionTarea" tabindex="-1" data-toggle="tab">Relacionar Tarea</a></li>
                                    <li><a href="#TabAsignarTarea" tabindex="-1" data-toggle="tab">Asignar Tarea</a></li>
                                </ul>
                            </li>
                            <li><a href="#Tab5" id="TabComite" data-toggle="tab"><i class="icon-menu7"></i> Comite de Cambio</a></li>
                            <li><a href="#Tab6" id="TabAvance" data-toggle="tab"><i class="icon-menu7"></i> Avance de Proyecto</a></li>
                            <li><a href="#Tab7" id="TabSolicitudesRevision" data-toggle="tab"><i class="icon-menu7"></i> Solicitudes Revision</a></li>
                            <li><a href="#Tab8" id="TabSolicitudesCambio" data-toggle="tab"><i class="icon-menu7"></i> Solicitudes de Cambio</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="Tab1">
                                @include('Equipo.EstructuraProyecto.TabEstructuraVista')
                            </div>
                            <div class="tab-pane fade" id="Tab2">
                                @include('Equipo.EquipoTrabajo.TabEquipoTrabajoVista')
                            </div>
                            <div class="tab-pane fade" id="Tab3">
                                @include('Equipo.EntregableProyecto.TabEntregableVista')
                            </div>
                            <div class="tab-pane fade" id="TabRegistroTarea">
                                @include('Equipo.Tareas.TabTareaVista')
                            </div>
                            <div class="tab-pane fade" id="TabRelacionTarea">
                                @include('Equipo.Tareas.TabRelacionTareaVista')
                            </div>
                            <div class="tab-pane fade" id="TabAsignarTarea">
                                @include('Equipo.Tareas.TabAsignarTareaVista')
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
    <script src="../viewJs/ProyectoEncargado/TabEquipoTrabajoVista.js"></script>
    <script src="../viewJs/ProyectoEncargado/TabEntregableProyectoVista.js"></script>
    <script src="../viewJs/ProyectoEncargado/TabGestionarTareaEntregableVista.js"></script>
@endpush
