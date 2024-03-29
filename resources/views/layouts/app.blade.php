<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('assets/css/paper-dashboard.css?v=2.0.0') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/paper-dashboard.css?v=2.0.0') }}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/demo/demo.css') }}">


</head>
<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="red" data-active-color="danger">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
        <div class="logo">
            <a href="{{ url('/home') }}" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/assets/img/logo-small.png">
                </div>
            </a>
            <a href="{{ url('/home') }}" class="simple-text logo-normal">
            App-Dashboard
            <!-- <div class="logo-image-big">
                <img src="../assets/img/logo-big.png">
            </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}"> 
                            <i class="nc-icon nc-bank"></i>
                            {{ __('Ingresar') }} 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="nc-icon nc-badge"></i>
                            {{ __('Registrar') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/products">
                            <i class="nc-icon nc-world-2"></i>
                            {{ __('Inicio') }}
                        </a>
                    </li>
                @else
                    <li class="active ">
                        <a href="{{ url('/') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Welcome</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/users') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.html">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="./upgrade.html">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" style="background: #2c2c2c!important;">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" id="formGroupExampleInput" name="formGroupExampleInput" placeholder="Buscar..." style="color: white;">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split" style="color: white!important;"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    @guest
                       
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#">
                                <i class="nc-icon nc-layout-11" style="color: white!important;"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown" style="color: white!important;">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-settings-gear-65" style="color: white!important;"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Opciones</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <hr class="">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <strong style="color: red;">                                
                                        <i class="nc-icon nc-button-power" style="color: red!important;"></i>
                                        Cerrar Sesión
                                    </strong>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="#">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block" style="color: white!important;">Account</span>
                                </p>
                            </a>
                        </li>
                    @endguest
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


    </div> -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')        
                </div>
            </div>
        </div>
    
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
            <div class="row">
                <nav class="footer-nav">
                <ul>
                    <li>
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li>
                    <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                    </li>
                    <li>
                    <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                    </li>
                </ul>
                </nav>
                <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                    document.write(new Date().getFullYear())
                    </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                </span>
                </div>
            </div>
            </div>
        </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets/js/core/popper.min.js"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/paper-dashboard.min.js?v=2.0.0"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
        });
    </script>
 

</body>
</html>
