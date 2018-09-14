@extends('Shared.layout')


@section('content')
    <div class="text-center m-b">
        <h3 class="m-b-0">EDITAR DE FASE</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <input type="hidden" id="txt_id_fase" value="{{$id_fase}}">
                <div class="col-md-4">
                    <div class="form-group pos-rel">
                        <label class="form-label">Metodologia</label>
                        <select id="txt_metodologia" class="form-control select2"></select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group pos-rel">
                        <label class="form-label">Nombre de Fase</label>
                        <input type="text" class="form-control" id="txt_nombre_fase">
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
                <div class="col-md-12">
                    <div class="form-group pos-rel">
                        <label class="form-label">Descripción de Fase</label>
                        <textarea id="txt_descripcion" cols="30" rows="5" class="form-control"></textarea>
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
@endsection

@push('Js')
    <script src="../assets/viewJs/Fase/EditarFaseVista.js"></script>
@endpush