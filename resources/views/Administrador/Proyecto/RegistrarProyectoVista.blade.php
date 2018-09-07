@extends('Shared.layout')

@push('Css')
    <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>Registrar Proyecto</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Nombre de Proyecto</label>
                                <input type="text" class="form-control" id="txt_nombre_proyecto">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Jefe de Proyecto</label>
                                <select id="txt_usuario" class="form-control select2" style="width: 100%;"></select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Fecha de Inicio</label>
                                <div class="prepend-icon">
                                    <input type="text" id="txt_fecha_inicio" class="b-datepicker form-control" data-lang="es">
                                    <i class="icon-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Fecha de Fin</label>
                                <div class="prepend-icon">
                                    <input type="text" id="txt_fecha_fin" class="b-datepicker form-control" data-lang="es">
                                    <i class="icon-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Estado:</label>
                                <select id="txt_estado" class="form-control select2" style="width: 100%;">
                                    <option value="1">Habilitado</option>
                                    <option value="0">Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3">
                            <div class="pull-right">
                                <button type="button" class="btn btn-embossed btn-primary m-r-20 btnRegistrar">Registrar
                                </button>
                                <button type="button"
                                        class="cancel btn btn-embossed btn-warning m-b-10 m-r-0 btnVolver">Volver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../assets/global/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
    <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <!-- >Bootstrap Date Picker -->
    <script src="../assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
    <script src="../assets/global/js/viewJs/Proyecto/RegistrarProyectoVista.js"></script>
@endpush