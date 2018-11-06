@extends('Shared.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Estados de Proyectos</h5>
                </div>

                <div class="panel-body">
                    <div class="chart-container">
                        <div class="chart" id="google-column"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('Js')
    <script type="text/javascript" src="../assets/js/charts/google/bars/column.js"></script>
@endpush
