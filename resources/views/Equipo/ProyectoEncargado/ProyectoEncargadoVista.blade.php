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
                        <h3>LISTA DE PROYECTOS ENCARGADOS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-content pagination2 table-responsive">
                    <table class="table table-bordered" id="tabla">
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/global/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="../assets/global/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../assets/global/js/pages/table_dynamic.js"></script>
    <script src="../assets/global/js/viewJs/ProyectoEncargado/ProyectoEncargadoVista.js"></script>
@endpush
