@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span
                            class="text-semibold">Solicitud de Cambios</span>
                </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Solicitud de Cambios</a></li>
                    <li class="active">Registrar Solicitud de Cambios</li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="row">
                        <form id="frmNuevo">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Proyecto</label>
                                    <select class="form-control input-xs" name="PROid_proyecto" id="cboProyecto"></select>
                                </div>
                                <div class="form-group">
                                    <label for="">Codigo</label>
                                    <input type="text" class="form-control input-xs CodigoSolicitud" disabled>
                                    <input type="hidden" name="SOLICAMcodigo_solicitudcambio" class="CodigoSolicitud">
                                </div>
                                <div class="form-group">
                                    <label for="">Tarea</label>
                                    <select class="form-control input-xs" name="TAid_tarea" id="cboTareas">
                                        <option value="">--Seleccione--</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <textarea class="form-control" name="SOLICAMdescripcion_solicitudcambio"
                                              cols="30" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Objetivo</label>
                                    <textarea class="form-control" name="SOLICAMobjetivo_solicitudcambio"
                                              cols="30" rows="3"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary btnRegistrar">Generar Solicitud <i
                                                class="icon-check2 position-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-flat">
                <div class="panel-body contenedor">
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script src="../viewJs/SolicitudCambio/RegistrarSolicitudCambio.js"></script>
@endpush