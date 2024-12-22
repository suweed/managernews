<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('assets/auth/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/auth/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}">
         <link rel="stylesheet" href="{{asset('assets/auth/css/custom-style-morena.css')}}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('assets/auth/images/favicon.png')}}" />

        @yield('styles')

        <script src="{{ asset('assets/website/plugins/sweetalert/sweetalert.min.js') }}"></script>
    </head>
    <body>
        <div class="container-scroller">
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="{{ route('auth.dashboard') }}">
                        <img src="{{ asset('assets/auth/images/logo_black.svg') }}" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ route('auth.dashboard') }}">
                        <img src="{{ asset('assets/auth/images/logo_mini.svg') }}" alt="logo" />
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="{{ asset('assets/auth/images/faces/face1.jpg') }}" alt="image">
                                    <span class="availability-status online"></span>
                                </div>
                                <div class="nav-profile-text">
                                    <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="#">
                                <i class="mdi mdi-settings me-2"></i> Configuración </a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block full-screen-link">
                            <a class="nav-link">
                                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                            </a>
                        </li>
                        <li class="nav-item nav-logout d-none d-lg-block">
                            <form id="logout-form" action="{{ route('logout') }}" method="post">
                                @csrf
                                <a id="logout-button" class="nav-link" href="javascript:;">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.dashboard') }}">
                                <span class="menu-title">Dashboard</span>
                                <i class="mdi mdi-home menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                <span class="menu-title">Noticias</span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}">Noticias</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Nueva Noticia</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- partial -->
                <div class="main-panel">

                    @yield('section')

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid d-flex justify-content-between">
                            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2024</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{ asset('assets/auth/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/auth/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets/auth/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/auth/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/auth/js/misc.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('assets/auth/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/auth/js/todolist.js') }}"></script>
        <!-- End custom js for this page -->
        <!-- Scripts by module -->
        @yield('scripts')

        <script>
            @if (Session::has('alert-success'))
                swal("Buen Trabajo!", "{{ Session::get('alert-success') }}", "success");
            @endif
            @if (Session::has('alert-update'))
                swal("Buen Trabajo!", "{{ Session::get('alert-update') }}", "info");
            @endif
            @if (Session::has('alert-danger'))
                swal("Oops!", "{{ Session::get('alert-danger') }}", "error");
            @endif
        </script>
    </body>
</html>