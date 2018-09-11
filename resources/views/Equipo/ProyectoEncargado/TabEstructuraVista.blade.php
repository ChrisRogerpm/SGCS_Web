@extends('Shared.layout')

@push('Css')

@endpush


@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>PROYECTO</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="nav-tabs3">
                        <ul id="myTab6" class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" class="btnTab"><i
                                            class="icon-home"></i>Estructura</a></li>
                            <li><a href="#" data-toggle="tab" class="btnTab"><i class="icon-user-follow"></i>Equipo de
                                    trabajo</a></li>
                            <li><a href="#tab_3" data-toggle="tab" class="btnTab"><i
                                            class="icon-docs"></i>Entregables</a></li>
                            <li><a href="#tab_4" data-toggle="tab" class="btnTab"><i class="icon-docs"></i>Tareas</a>
                            </li>
                            <li><a href="#tab_5" data-toggle="tab" class="btnTab"><i class="icons-faces-users-01"></i>Comite
                                    de Cambio</a></li>
                            <li><a href="#tab_6" data-toggle="tab" class="btnTab"><i class="icon-pie-chart"></i>Avance
                                    Proyecto</a></li>
                            <li><a href="#tab_7" data-toggle="tab" class="btnTab"><i class="icon-home"></i>Solicitudes
                                    de Revision</a></li>
                            <li><a href="#tab_8" data-toggle="tab" class="btnTab"><i class="icon-home"></i>Solicitudes
                                    de Cambio</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab_1">
                                <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-info"></i> <strong>Información de Proyecto</strong>
                                                </h3>
                                            </div>
                                            <div class="panel-content">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Nombre de Proyecto</label>
                                                            <input type="text" class="form-control form-white" disabled id="nombre_proyecto">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Jefe de Proyecto</label>
                                                            <input type="text" class="form-control form-white" disabled="" id="jefe_proyecto">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Fecha de Inicio</label>
                                                            <input type="text" class="form-control form-white" disabled id="fecha_inicio">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Fecha de Finalización</label>
                                                            <input type="text" class="form-control form-white" disabled id="fecha_fin">
                                                        </div>
                                                    </div>
                                                    <div class="contenedor-metodologia-proyecto">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Metodologia</label>
                                                                <select id="metodologia_id"
                                                                        class="form-control form-white select2">
                                                                    <option value="">Seleccione</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button type="button" class="btn btn-primary btn-sm btn-block">
                                                                Seleccionar Metodologia
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Miembros de
                                                        Equipo</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Metodologia -
                                                        Entregables</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Comite de
                                                        Cambio</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/global/js/viewJs/ProyectoEncargado/TabEstructuraVista.js"></script>
@endpush
