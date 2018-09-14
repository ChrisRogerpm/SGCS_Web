@extends('Shared.layout')
@section('content')
    <div class="text-center m-b">
        <h3 class="m-b-0">LISTA DE PROYECTOS</h3>
    </div>
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table id="tabla" class="table table-striped  table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('Js')
    <script src="../assets/viewJs/Proyecto/ProyectoVista.js"></script>
@endpush
