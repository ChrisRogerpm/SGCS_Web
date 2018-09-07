@extends('Shared.layout')

@push('Css')
    <link href="../assets/global/plugins/datatables/dataTables.min.css" rel="stylesheet">
@endpush


@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>LISTA DE ENTREGABLES</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Metodologia</label>
                                    <select id="txt_metodologia" class="form-control select2"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Fase</label>
                                    <select id="txt_fase" class="form-control select2">
                                        <option value="0">--Seleccione--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-embossed btn-primary m-r-20 btnBuscar">Buscar
                                    </button>
                                    <button type="button" class="btn btn-embossed btn-warning m-r-20 btnTodo">Mostrar Todo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-content pagination2 table-responsive container-table">
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/global/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="../assets/global/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../assets/global/js/pages/table_dynamic.js"></script>
    <script src="../assets/global/js/viewJs/Entregable/EntregableVista.js"></script>
@endpush
