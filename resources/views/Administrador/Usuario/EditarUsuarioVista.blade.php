@extends('Shared.layout')


@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>Editar Usuario</h3>
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
                        <form id="frmNuevo" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="USUid_usuario" id="txt_id_usuario" value="{{$id_Usuario}}">
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
                                    <label class="form-label">DNI</label>
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
                                        <option value="2">Empleado</option>
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
                                    <button type="submit" class="btn btn-embossed btn-success m-r-20 btnModificar">Modificar
                                    </button>
                                    <button type="button" class="cancel btn btn-embossed btn-warning m-b-10 m-r-0 btnVolver">Volver
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('Js')
    <script src="../assets/global/js/viewJs/Usuario/EditarUsuarioVista.js"></script>
@endpush