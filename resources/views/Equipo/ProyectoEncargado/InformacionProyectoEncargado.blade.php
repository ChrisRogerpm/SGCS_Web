@extends('Shared.layout')

@push('Css')

@endpush


@section('content')
    <div class="header">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-header bg-dark text-center">
                        <h3>PROYECTO</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="nav-tabs3">
                        <input type="hidden" id="id_proyecto_encargado" value="{{$proyecto_id}}">
                        <ul id="myTab6" class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab" id="TabEstructura"><i
                                            class="icon-home"></i>Estructura</a></li>
                            <li><a href="#" data-toggle="tab" id="TabEquipo"><i class="icon-user-follow"></i>Equipo de
                                    trabajo</a></li>
                            <li><a href="#tab_3" data-toggle="tab" id="TabEntregable"><i
                                            class="icon-docs"></i>Entregables</a></li>
                            <li><a href="#tab_4" data-toggle="tab" id="TabTarea"><i class="icon-docs"></i>Tareas</a>
                            </li>
                            <li><a href="#tab_5" data-toggle="tab" id="TabComite"><i class="icons-faces-users-01"></i>Comite
                                    de Cambio</a></li>
                            <li><a href="#tab_6" data-toggle="tab" id="TabAvance"><i class="icon-pie-chart"></i>Avance
                                    Proyecto</a></li>
                            <li><a href="#tab_7" data-toggle="tab" id="TabRevision"><i class="icon-home"></i>Solicitudes
                                    de Revision</a></li>
                            <li><a href="#tab_8" data-toggle="tab" id="TabSolicitudCambio"><i class="icon-home"></i>Solicitudes
                                    de Cambio</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab_1">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-info"></i> <strong>Información de Proyecto</strong>
                                                </h3>
                                            </div>
                                            <div class="panel-content">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Nombre de Proyecto</label>
                                                            <input type="text" class="form-control form-white" disabled id="nombre_proyecto">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Jefe de Proyecto</label>
                                                            <input type="text" class="form-control form-white" disabled="" id="jefe_proyecto">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Fecha de Inicio</label>
                                                            <input type="text" class="form-control form-white" disabled id="fecha_inicio">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Fecha de Finalización</label>
                                                            <input type="text" class="form-control form-white" disabled id="fecha_fin">
                                                        </div>
                                                    </div>
                                                    <div class="contenedor-metodologia-proyecto"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Miembros de
                                                        Equipo</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped table-hover table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="tablaMiembrosEquipo">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Metodologia -
                                                        Entregables</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="panel">
                                            <div class="panel-header">
                                                <h3><i class="icon-rounded-user-add"></i> <strong>Comite de
                                                        Cambio</strong></h3>
                                            </div>
                                            <div class="panel-content widget-table">
                                                <div class="withScroll" data-height="400">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="tab-pane fade active in" id="tab_2">--}}
                            {{--<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>--}}
                            {{--</div>--}}
                            {{--<div class="tab-pane fade" id="tab_3">--}}
                            {{--<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('Js')
    <script src="../assets/global/js/viewJs/ProyectoEncargado/InformacionProyectoEncargadoVista.js"></script>
@endpush
