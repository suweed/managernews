@extends ('layouts.website')

@section ('title', 'Bienvenido')

@section ('content')

    <!-- Slider Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="animated fadeInUp">Lorem ipsum dolor sit amet</h1>
                        <p class="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br /> et dolore magna aliqua. Ut enim ad minim veniam</p>
                        <a href="javascript:;" class="btn btn-main animated fadeInUp" >Conocer mas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Start -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                    <h2>Tramites</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br> 
                        et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-university"></i>
                        <h4>Educacion</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-card"></i>
                        <h4>Economia</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-battery-charging"></i>
                        <h4>Energia</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-calculator"></i>
                        <h4>Impuestos</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-heart"></i>
                        <h4>Salud</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-calendar"></i>
                        <h4>Programas Sociales</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-plane"></i>
                        <h4>Turismo</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wrapper Start -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="block">
                        <div class="section-title">
                            <h2>Nosotros</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id 
                        </p>
                    </div>
                </div><!-- .col-md-7 close -->
                <div class="col-md-5">
                    <div class="block">
                        <img src="{{ asset('assets/website/images/nosotrosGobierno.jpg') }}" alt="Img">
                    </div>
                </div><!-- .col-md-5 close -->
            </div>
        </div>
    </section>

    <section class="feature">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-6 text-white">
                    <h2 class="section-subtitle">Trámites</h2>
                    <p class="text-white">Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </p>
                    <a href="" class="btn btn-view-works">Ver Todos</a>
                </div>
            </div>
        </div>
    </section>

    <x-slider />

@endsection