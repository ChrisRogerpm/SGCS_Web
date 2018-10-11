<div class="row">
    <div class="col-md-6">
        <div class="col-md-12 contenedor-lista"></div>
        <div class="col-md-4 col-md-offset-8">
            <button type="button" class="btn btn-primary btn-sm pull-right btn-block btnAgregarEquipo"
                    style="margin-top:10px; margin-bottom: 10px;">Agregar
            </button>
        </div>
    </div>
    <div class="col-md-6 contenedor-usuarios">
    </div>
    {{--<div class="col-md-6">--}}
        {{--<div class="content-group">--}}
            {{--<h6 class="text-semibold">Switch colors</h6>--}}
            {{--<p>You can change the default color of the switch by choosing one of 6 predefined classes and use them in <code>data-on-color</code> and <code>data-off-color</code> attributes.</p>--}}

            {{--<div class="row">--}}
                {{--<div class="col-sm-6">--}}
                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="default" data-off-color="danger" checked="checked">--}}
                            {{--Default color--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="primary" data-off-color="default" checked="checked">--}}
                            {{--Primary color--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="danger" data-off-color="default" checked="checked">--}}
                            {{--Danger color--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-sm-6">--}}
                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="success" data-off-color="default" checked="checked">--}}
                            {{--Success color--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="warning" data-off-color="default" checked="checked">--}}
                            {{--Warning color--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div class="checkbox checkbox-switch">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="info" data-off-color="default" checked="checked">--}}
                            {{--Info color--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<div id="ModalDeshabilitarUsuario" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <input type="hidden" id="txt_id_usuario_proyecto">
                    <span class="text-danger icon icon-times-circle icon-5x"></span>
                    <h3 class="text-danger">Deshabilitar Usuario</h3>
                    <p class="text-center">¿Esta seguro de deshabilitar ?</p>
                    <div class="m-t-lg">
                        <button class="btn btn-primary btnSiModalUsuarioProyecto" type="button" aria-expanded="false">
                            <span class="icon icon-check-circle icon-lg icon-fw"></span>
                            Si
                        </button>
                        <button class="btn btn-warning" data-dismiss="modal" type="button" aria-expanded="false">
                            <span class="icon icon-times-circle icon-lg icon-fw"></span>
                            No
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>