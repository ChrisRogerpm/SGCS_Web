<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Sistema de Gestion de la configuración de Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="../assets/global/images/favicon.png">
    <link href="../assets/global/css/style.css" rel="stylesheet">
    <link href="../assets/global/css/ui.css" rel="stylesheet">
    <link href="../assets/global/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body class="sidebar-condensed account2" data-page="login">
<!-- BEGIN LOGIN BOX -->
<div class="container" id="login-block">
    <i class="user-img icons-faces-users-03"></i>
    <div class="account-info">
        {{--<a href="#" class="logo"></a>--}}
        <h3>Sistema Interactivo &amp; Flexible a cambios.</h3>
        <ul>
            <li><i class="icon-magic-wand"></i> Plantillas</li>
            <li><i class="icon-layers"></i> Gestion de Documentos</li>
            <li><i class="icon-arrow-right"></i> Zona de Trabajo</li>
            <li><i class="icon-drop"></i> Comentarios</li>
        </ul>
    </div>
    <div class="account-form">
        <form class="form-signin" id="frmnuevo" role="form" autocomplete="off">
            {{csrf_field()}}
            <h3><strong>Iniciar</strong> sesión en su cuenta</h3>
            <div class="append-icon">
                <input type="text" name="name" id="codigo" class="form-control form-white username" placeholder="Codigo">
                <i class="icon-user"></i>
            </div>
            <div class="append-icon m-b-20">
                <input type="password" id="password" class="form-control form-white password" placeholder="Contraseña">
                <i class="icon-lock"></i>
            </div>
            <button type="button" class="btn btn-lg btn-dark btn-block ladda-button btnIniciarSesion" data-style="expand-left">Iniciar Sesión</button>
        </form>
    </div>
</div>
<p class="account-copyright">
    <span>Copyright © 2018 </span><span>Gestión de la Configuración de Software</span>.<span> All rights reserved.</span>
</p>
<script src="../assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="../assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
<script src="../assets/global/plugins/tether/js/tether.min.js"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/backstretch/backstretch.min.js"></script>
<script src="../assets/global/plugins/bootstrap-loading/lada.min.js"></script>
{{--<script src="../assets/global/js/pages/login-v2.js"></script>--}}
<script src="../assets/admin/layout2/js/layout.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="../assets/global/js/viewJs/Autenticacion/FrmLoginJs.js"></script>
</body>

<!-- Mirrored from themes-lab.com/make/admin/layout2/user-login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Aug 2018 17:09:41 GMT -->
</html>