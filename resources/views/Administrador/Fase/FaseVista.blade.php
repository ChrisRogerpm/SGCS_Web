@extends('Shared.layout')

@section('content')
    <div class="text-center m-b">
        <h3 class="m-b-0">LISTA DE FASES</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Metodologia</label>
                        <select id="txt_metodologia" class="form-control"></select>
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
    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body container-table">
                    <table id="tabla" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%"></table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/viewJs/Fase/FaseVista.js"></script>
@endpush
