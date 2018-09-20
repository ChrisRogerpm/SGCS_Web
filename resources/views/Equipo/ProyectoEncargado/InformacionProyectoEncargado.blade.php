@extends('Shared.layout')

@push('Css')
    <link rel="stylesheet" href="../assets/viewJs/bootstrap-duallistbox.css">
@endpush


@section('content')
    <div class="col-md-12">
        <div class="panel m-b-lg">
            <ul class="nav nav-tabs nav-justified tabs">
                <li class="active"><a href="#home-11" id="TabEstructura" data-toggle="tab">Estructura</a></li>
                <li><a href="#profile-11" id="TabEquipo" data-toggle="tab">Equipo de Trabajo</a></li>
                <li><a href="#profile-12" data-toggle="tab">Entregables</a></li>
                <li><a href="#profile-12" data-toggle="tab">Tareas</a></li>
                <li><a href="#profile-12" data-toggle="tab">Comite de Cambio</a></li>
                <li><a href="#profile-12" data-toggle="tab">Avance de Proyecto</a></li>
                <li><a href="#profile-12" data-toggle="tab">Solicitudes Revision</a></li>
                <li><a href="#profile-12" data-toggle="tab">Solicitudes de Cambio</a></li>
            </ul>
            <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="home-11">
                    @include('Equipo.ProyectoEncargado.TabEstructuraVista')
                </div>
                <div class="tab-pane fade" id="profile-11">
                    @include('Equipo.ProyectoEncargado.TabEquipoTrabajoVista')
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/viewJs/jquery.bootstrap-duallistbox.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/InformacionProyectoEncargadoVista.js"></script>
    <script src="../assets/viewJs/ProyectoEncargado/TabEstructuraVista.js"></script>
@endpush
