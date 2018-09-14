@extends('Shared.layout')

@section('content')
    <div class="text-center m-b">
        <h3 class="m-b-0">EDITAR DE PROYECTO</h3>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <input type="hidden" id="txt_id_proyecto" value="{{$id_proyecto}}">
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
                            <input type="text" id="txt_fecha_inicio" class="form-control select2 datepickerfecha" data-lang="es">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group pos-rel">
                        <label class="form-label">Fecha de Fin</label>
                        <div class="prepend-icon">
                            <input type="text" id="txt_fecha_fin" class="form-control select2 datepickerfecha" data-lang="es">
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
                        <button type="button" class="btn btn-embossed btn-success m-r-20 btnModificar">Modificar
                        </button>
                        <button type="button"
                                class="cancel btn btn-embossed btn-warning m-b-10 m-r-0 btnVolver">Volver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('Js')
    <script src="../assets/viewJs/Proyecto/EditarProyectoVista.js"></script>
@endpush