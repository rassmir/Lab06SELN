<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Panamericanos-2019</title>
    <link href="{{ secure_asset('css/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/mdb.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/accordion-extended.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/megamenu.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/animations-extended.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/css/lightbox.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.svg') }}" height="65" alt="panamericanos logo">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<div class="view full-page-intro" style="background-image: url('{{ asset('img/slider3.png') }}'); background-repeat: no-repeat; background-size: cover;">
    <!-- Content -->
    <div class="container" style="margin-top: 110px" >
        <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-6 col-xl-5">
                <!--Card-->
                <div class="card pt-3 ">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified default-color" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel555" role="tab">
                                <i class="fas fa-user pr-2"></i>Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel666" role="tab">
                                <i class="fas fa-clipboard-list pr-2"></i></i>Registrarse</a>
                        </li>
                    </ul>
                    <!-- Nav tabs -->

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!-- Panel 1 -->
                        <div class="tab-pane fade in show active" id="panel555" role="tabpanel">

                            <!-- Form -->
                            <form class=" border p-4 border-default" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="md-form mb-3">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="email" id="email" class="form-control validate" name="email">
                                    <label data-error="wrong" data-success="right" for="email">Correo Electrónico</label>
                                </div>
                                <div class="md-form mb-3">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="password" id="password" class="form-control validate" name="password">
                                    <label data-error="wrong" data-success="right" for="password">Contraseña</label>
                                </div>

                                <!-- Sign in button -->
                                <button class="btn btn-info btn-block" type="submit">Ingresar</button>

                            </form>
                            <!-- Form -->

                        </div>
                        <!-- Panel 1 -->

                        <!-- Panel 2 -->
                        <div class="tab-pane fade" id="panel666" role="tabpanel">

                            <!-- Form -->
                            <form class=" border p-4 border-default" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-3">
                                            <input type="text" id="nombre" class="form-control validate" name="name">
                                            <label data-error="wrong" data-success="right" for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-3">
                                            <input type="text" id="apellidos" class="form-control validate" name="lastname">
                                            <label data-error="wrong" data-success="right" for="apellidos">Apellidos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="email" id="correo" class="form-control validate" name="email">
                                    <label data-error="wrong" data-success="right" for="correo">Email</label>
                                </div>

                                <div class="md-form mb-3">
                                    <input type="password" id="clave" class="form-control validate" name="password">
                                    <label data-error="wrong" data-success="right" for="clave">Password</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="password" id="confirmation" class="form-control validate" name="password_confirmation">
                                    <label data-error="wrong" data-success="right" for="confirmation">Password Confirmation</label>
                                </div>
                                <!-- Sign in button -->
                                <button class="btn btn-info btn-block" type="submit">Ingresar</button>


                            </form>

                        </div>
                        <!-- Panel 2 -->

                    </div>
                    <!-- Tab panels -->


                </div>
                <!--/.Card-->

            </div>

            <!--Grid column-->
            <div class="col-md-6 mb-4 white-text text-center text-md-left">

                <h1 class="display-4 font-weight-bold">No te olvides ... !</h1>
                <hr class="hr-light ">
                <p>
                    <strong>Iniciar Sesión para ver el listado de deportes</strong>
                </p>
            </div>
        </div>
        <!--Grid row-->

    </div>
    <!-- Content -->

</div>


<!-- Scripts -->
<script src="{{ secure_asset('js/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ secure_asset('js/js/bootstrap.js') }}" ></script>
<script src="{{ secure_asset('js/js/mdb.js') }}" ></script>
<script src="{{ secure_asset('js/js/dropdown.js') }}" ></script>
<script src="{{ secure_asset('js/js/popper.min.js') }}" ></script>
<script src="{{ secure_asset('js/js/sidenav.js') }}" ></script>
<!-- Fonts -->
<script src="https://kit.fontawesome.com/0277df775c.js"></script>
</body>
</html>
