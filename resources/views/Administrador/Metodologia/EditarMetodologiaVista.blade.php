@extends('Shared.layout')


@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>Editar Metodologia</h3>
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
                        <input type="hidden" id="txt_id_metodologia" value="{{$id_metodologia}}">
                        <div class="col-md-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Nombre de Metodología</label>
                                <input type="text" class="form-control" id="txt_nombre_metodologia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Cantidad de Fases</label>
                                <input type="number" class="form-control" id="txt_nro_fases">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pos-rel">
                                <label class="form-label">Estado:</label>
                                <select id="txt_estado" class="form-control select2">
                                    <option value="1">Habilitado</option>
                                    <option value="0">Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3">
                            <div class="pull-right">
                                <button type="button" class="btn btn-embossed btn-success m-r-20 btnModificar">Modificar
                                </button>
                                <button type="button" class="cancel btn btn-embossed btn-warning m-b-10 m-r-0 btnVolver">Volver
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
    <script src="../assets/global/js/viewJs/Metodologia/EditarMetodologiaVista.js"></script>
@endpush