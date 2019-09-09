<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Panamericanos-2019</title>
    <link href="{{ secure_asset('css/admin/material-dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body class="dark-edition">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">notifications</i>
                                <p class="d-lg-none d-md-block">
                                    Notifications
                                </p>
                            </a>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <!-- your content here -->
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </footer>
    </div>
</div>

    <script src="{{ secure_asset('js/admin/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ secure_asset('js/admin/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ secure_asset('js/admin/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/default-passive-events" type="text/javascript"></script>
    <script src="{{ secure_asset('js/admin/perfect-scrollbar.jquery.min.js') }}"type="text/javascript" ></script>
    <script async defer src="https://buttons.github.io/buttons.js" type="text/javascript"></script>
    <script src="{{ secure_asset('js/admin/material-dashboard.js?v=2.1.0') }}" type="text/javascript"></script>
    <script src="{{ secure_asset('js/admin/custom.js') }}"type="text/javascript" ></script>
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/0277df775c.js"></script>
</body>
</html>
