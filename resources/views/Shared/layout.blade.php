<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestion de la configuración de Software</title>

    <!-- Global stylesheets -->
    <link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/modifytcss.css">
    <!-- /global stylesheets -->

    <link rel="stylesheet" href="../assets/toastr.min.css">

    <!-- Core JS files -->
    <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/drilldown.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="../assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/inputs/duallistbox.min.js"></script>


    <script type="text/javascript" src="../assets/js/core/app.js"></script>
    <script type="text/javascript" src="../assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="../assets/js/pages/components_modals.js"></script>
    <script type="text/javascript" src="../assets/js/pages/form_dual_listboxes.js"></script>
    {{--<script type="text/javascript" src="../assets/js/pages/form_checkboxes_radios.js"></script>--}}
    <!-- /theme JS files -->

</head>

<body>
<div class="navbar navbar-inverse bg-indigo-800">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="../assets/images/logo_light.png" alt=""></a>
        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>
    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../Imagenes/{{Auth::user()->USUfoto_usuario}}" alt="">
                    <span>{{Auth::user()->USUnombre_usuario.' '.Auth::user()->USUapellido_usuario}}</span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i> Cerrar Sesión</a>
                    </li>
                    <form id="logout-form" action="{{ route('CerrarSesion') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="navbar navbar-default" id="navbar-second">
    <ul class="nav navbar-nav no-border visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i
                        class="icon-menu7"></i></a></li>
    </ul>
    <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav">
            @if(Auth::user()->USUtipo_usuario == 1)
                <li><a href="{{route('Proyecto')}}"><i class="icon-display4 position-left"></i> Proyecto</a></li>
                <li><a href="{{route('Metodologia')}}"><i class="icon-display4 position-left"></i> Metodologias</a></li>
                <li><a href="{{route('Fase')}}"><i class="icon-display4 position-left"></i> Fases</a></li>
                <li><a href="{{route('Entregable')}}"><i class="icon-display4 position-left"></i> Entregables</a></li>
                <li><a href="{{route('Usuario')}}"><i class="icon-display4 position-left"></i> Usuarios</a></li>
            @else
                <li><a href="{{route('Equipo')}}"><i class="icon-display4 position-left"></i> Equipo</a></li>
                <li><a href="{{route('ProyectosEncargados')}}"><i class="icon-display4 position-left"></i> Mis Proyectos</a></li>
                <li><a href="#"><i class="icon-display4 position-left"></i> Mis Tareas</a></li>
                <li><a href="#"><i class="icon-display4 position-left"></i> Mis Solicitudes</a></li>
            @endif
        </ul>
    </div>
</div>
@yield('content-header')
<div class="page-container">
    <div class="page-content">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</div>
<div class="footer text-muted">
    &copy; 2018. <a href="#">Gestión de la Configuración de Software</a> by <a href="#" target="_blank">Team Tree</a>
</div>
<script src="../assets/toastr.min.js"></script>
<script src="../viewJs/general.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
@stack('Js')
</body>
</html>
