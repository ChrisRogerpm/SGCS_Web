@extends('Shared.layout')

@push('Css')
    <link rel="stylesheet" href="../assets/viewJs/bootstrap-duallistbox.css">
@endpush


@section('content')
    <div class="col-md-12">
        <div class="panel m-b-lg">
            <ul class="nav nav-tabs nav-justified tabs">
                <li class="active"><a href="#Tab1" id="TabEstructura" data-toggle="tab">Estructura</a></li>
                <li><a href="#Tab2" id="TabEquipo" data-toggle="tab">Equipo de Trabajo</a></li>
                <li><a href="#Tab3" id="TabEntregables" data-toggle="tab">Entregables</a></li>
                {{--<li><a href="#Tab4" id="TabTareas" data-toggle="tab">Tareas</a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tareas</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#TabRegistroTarea" tabindex="-1" data-toggle="tab">Registrar Tarea</a></li>
                        <li><a href="#TabRelacionTarea" tabindex="-1" data-toggle="tab">Relacionar Tarea</a></li>
                        <li><a href="#TabAsignarTarea" tabindex="-1" data-toggle="tab">Asignar Tarea</a></li>
                    </ul>
                </li>
                <li><a href="#Tab5" id="TabComite" data-toggle="tab">Comite de Cambio</a></li>
                <li><a href="#Tab6" id="TabAvance" data-toggle="tab">Avance de Proyecto</a></li>
                <li><a href="#Tab7" id="TabSolicitudesRevision" data-toggle="tab">Solicitudes Revision</a></li>
                <li><a href="#Tab8" id="TabSolicitudesCambio" data-toggle="tab">Solicitudes de Cambio</a></li>
            </ul>
            <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
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
@endsection


@push('Js')
    <script src="../assets/viewJs/jquery.bootstrap-duallistbox.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/InformacionProyectoEncargadoVista.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/TabEstructuraVista.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/TabEquipoTrabajoVista.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/TabEntregableProyectoVista.js"></script>
@endpush
