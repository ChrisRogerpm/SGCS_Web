@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Fases</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Fases</a></li>
                    <li class="active">Lista de Fases</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Fase.Registrar')}}" class="btn btn-primary btnNuevo"><i
                                class="icon-plus-circle2 position-left"></i> Nueva Fase</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">Metodologia</label>
                        <select id="txt_metodologia" class="form-control"></select>
                    </div>
                    <div class="pull-right">
                        </button>
                        <button type="button" class="btn btn-embossed btn-warning m-r-20 btnTodo">Mostrar Todo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-flat">
                <div class="panel-body container-table">
                    <table class="table table-bordered" id="tabla"></table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../viewJs/Fase/FaseVista.js"></script>
@endpush
