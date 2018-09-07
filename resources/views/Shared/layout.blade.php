<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
    <title>Sistema de Gestion de la configuración de Software</title>
    <link href="../assets/global/css/style.css" rel="stylesheet">
    <link href="../assets/global/css/theme.css" rel="stylesheet">
    <link href="../assets/global/css/ui.css" rel="stylesheet">
    <link href="../assets/admin/layout2/css/layout.css" rel="stylesheet">
    <script src="../assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    @stack('Css')
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
{{--<body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default">--}}
<body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
<!--[if lt IE 7]>
<![endif]-->
<section>
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar">
        <div class="logopanel">
            <h1>
                <a href="#"></a>
            </h1>
        </div>
        <div class="sidebar-inner">

            <div class="menu-title text-center">
                Modulos
            </div>
            @if(Auth::user()->USUtipo_usuario == 1)
                <ul class="nav nav-sidebar">
                    <li><a href="#"><i class="icon-home"></i><span>Inicio</span></a></li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-docs"></i><span>Proyectos</span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="{{route('Proyecto.Registrar')}}"> Registro de Proyectos</a></li>
                            <li><a href="{{route('Proyecto')}}"> Lista de Proyectos</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-docs"></i><span>Metodologias</span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="{{route('Metodologia.Registrar')}}"> Registro de Metodologias</a></li>
                            <li><a href="{{route('Metodologia')}}"> Lista de Metodologias</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-docs"></i><span>Fases</span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="{{route('Fase.Registrar')}}"> Registro de Fases</a></li>
                            <li><a href="{{route('Fase')}}"> Lista de Fases</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-docs"></i><span>Entregables</span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="{{route('Entregable.Registrar')}}"> Registro de Entregables</a></li>
                            <li><a href="{{route('Entregable')}}"> Lista de Entregables</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a href="#"><i class="icon-rounded-user"></i><span>Usuarios</span><span class="fa arrow"></span></a>
                        <ul class="children collapse">
                            <li><a href="{{route('Usuario.Registrar')}}"> Registro de Usuario</a></li>
                            <li><a href="{{route('Usuario')}}"> Lista de Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav nav-sidebar">
                    <li><a href="#"><i class="icon-docs"></i><span>Proyectos</span></a></li>
                    <li><a href="#"><i class="icon-docs"></i><span>Entregables</span></a></li>
                    <li><a href="#"><i class="icon-docs"></i><span>Solicitud Cambio</span></a></li>
                    <li><a href="#"><i class="icon-docs"></i><span>Proyectos</span></a></li>
                </ul>
            @endif

        </div>
    </div>
    {{csrf_field()}}
    <!-- END SIDEBAR -->
    <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
            <div class="header-left">
                <div class="topnav">
                    <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span
                                class="menu__handle"><span>Menu</span></span></a>
                </div>
            </div>
            <div class="header-right">
                <ul class="header-menu nav navbar-nav">
                    <li class="dropdown" id="user-header">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="../Imagenes/{{Auth::user()->USUfoto_usuario}}" alt="user image">
                            <span class="username">Hola, {{Auth::user()->USUnombre_usuario}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-logout"></i><span>Cerrar Sesion</span></a>
                                <form id="logout-form" action="{{ route('CerrarSesion') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content" id="reload">
            @yield('content')
            <div class="footer">
                <div class="copyright">
                    <p class="pull-left sm-pull-reset">
                        <span>Copyright <span class="copyright">©</span> 2018 </span>
                        <span>Gestión de la Configuración de Software</span>.
                        <span>All rights reserved. </span>
                    </p>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END MAIN CONTENT -->
</section>

<!-- BEGIN PRELOADER -->
<div class="loader-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER -->
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="../assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="../assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
<script src="../assets/global/plugins/tether/js/tether.min.js"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/appear/jquery.appear.js"></script>
<script src="../assets/global/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
<script src="../assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js"></script>
<!-- simulate synchronous behavior when using AJAX -->
<script src="../assets/global/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
<script src="../assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom Scrollbar sidebar -->
<script src="../assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
<!-- Show Dropdown on Mouseover -->
<script src="../assets/global/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="../assets/global/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
<script src="../assets/global/plugins/select2/dist/js/select2.full.min.js"></script> <!-- Select Inputs -->
<script src="../assets/global/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
<script src="../assets/global/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="../assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Animated Progress Bar -->
<script src="../assets/global/plugins/charts-chartjs/Chart.min.js"></script>
<script src="../assets/global/js/builder.js"></script> <!-- Theme Builder -->
<script src="../assets/global/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
<script src="../assets/global/js/widgets/notes.js"></script> <!-- Notes Widget -->
<script src="../assets/global/js/quickview.js"></script> <!-- Chat Script -->
<script src="../assets/global/js/pages/search.js"></script> <!-- Search Script -->
{{--<script src="../assets/global/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->--}}
<script src="../assets/global/js/application.js"></script> <!-- Main Application Script -->
<script src="../assets/admin/layout2/js/layout.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script src="../assets/global/js/general.js"></script>
@stack('Js')
</body>

<!-- Mirrored from themes-lab.com/make/admin/layout2/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Aug 2018 17:09:17 GMT -->
</html>