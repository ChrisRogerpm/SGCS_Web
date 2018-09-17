@extends('Shared.layout')


@section('content')
    <div class="text-center m-b">
        <h3 class="m-b-0">REGISTRAR DE USUARIO</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form id="frmNuevo" enctype="multipart/form-data" autocomplete="off">
                    {{csrf_field()}}
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="USUnombre_usuario" id="txt_nombre_usuario">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="USUapellido_usuario" id="txt_apellido_usuario">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Documento de Identidad (DNI)</label>
                            <input type="text" class="form-control" name="USUdni_usuario" id="txt_dni_usuario">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Celular</label>
                            <input type="text" class="form-control" name="USUcelular_usuario" id="txt_celular_usuario">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="USUemail_usuario" id="txt_email_usuario">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Tipo Usuario</label>
                            <select id="txt_tipo_usuario" name="USUtipo_usuario" class="form-control select2">
                                <option value="1">Administrador</option>
                                <option value="2">Equipo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group pos-rel">
                            <label class="form-label">Foto</label>
                            <input type="file" name="USUfoto_usuario" class="form-control" id="txt_imagen_usuario">
                        </div>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-embossed btn-primary m-r-20">Registrar
                            </button>
                            <button type="button" class="cancel btn btn-embossed btn-warning m-b-10 m-r-0 btnVolver">Volver
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../assets/viewJs/Usuario/RegistrarUsuarioVista.js"></script>
@endpush