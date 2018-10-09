@extends('Shared.layout')

@section('content-header')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Usuarios</span></h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li class="active">Nuevo Usuario</li>
                </ul>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{route('Usuario')}}" class="btn bg-warning-300 btnVolver"><i
                                class="icon-plus-circle2 position-left"></i> Volver</a>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <form id="frmNuevo" enctype="multipart/form-data" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="USUnombre_usuario"
                                           id="txt_nombre_usuario">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="USUapellido_usuario"
                                           id="txt_apellido_usuario">
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
                                    <input type="text" class="form-control" name="USUcelular_usuario"
                                           id="txt_celular_usuario">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group pos-rel">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="USUemail_usuario"
                                           id="txt_email_usuario">
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
                                    <input type="file" name="USUfoto_usuario" class="form-control"
                                           id="txt_imagen_usuario">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btnRegistrar">Registrar Usuario <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('Js')
    <script src="../viewJs/Usuario/RegistrarUsuarioVista.js"></script>
@endpush