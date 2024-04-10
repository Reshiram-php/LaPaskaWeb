@extends('web.template')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- /template-header --><!-- section carousel -->
    <section id="home-main" class="container-fluid p-0 position-relative">
        <!-- ken burns slideshow -->
        <div class="ken-burns-slideshow position-relative">
            <div class="bg-container">
                <!-- slider images -->
                <img loading="lazy" class="bg" src="{{ asset('webassets/img/slider/slide1.jpg') }}"alt="" />
                <img loading="lazy" class="bg" src="{{ asset('webassets/img/slider/slide2.jpg') }}"alt="" />
                <img loading="lazy" class="bg" src="{{ asset('webassets/img/slider/slide3.jpg') }}"alt="" />
                <img loading="lazy" class="bg" src="{{ asset('webassets/img/slider/slide4.jpg') }}"alt="" />
            </div>
            <!-- /bg-container -->
        </div>
        <!-- /ken burns slideshow -->
        <!-- box-main -->
        <div class="box-main d-flex align-items-lg-center align-items-end" data-aos="fade-down">
            <div class="container">
                <div class="col-lg-5 offset-lg-7 border-box bg-light p-5">
                    <span class="h3 mb-0">Bienvenidos a </span>
                    <h1>La Paska</h1>
                    <!-- typewriter -->
                    <div class="typewriter-text mt-3 mb-4">
                        <span class="d-inline">La adopción de mascotas es </span>
                        <!-- typewriter words -->
                        <div class="typewrite d-inline" data-period="2000"
                            data-type='[ "una nueva amistad", " salvar una vida", "pura diversión", " un acto de amor" ]'>
                            <span class="wrap"></span>
                        </div>
                        <!--/ typewriter words -->
                    </div>
                    <!-- /typewriter -->
                    <p>Sed do eiusmod tempor incididunt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                    <!-- button -->
                    <a class="btn btn-primary" href="{{url("/contact")}}">Contáctanos</a>
                </div>
                <!-- /page -->
            </div>
            <!-- /row -->
        </div>
        <!-- /box-main -->
    </section>
    <!--/ section  -->
    <!-- section About us -->
    <section class="page container">
        <div class="row gx-5">
            <div class="col-lg-6 my-auto">
                <span class="lead">Sobre Nosotros</span>
                <h2>Nuestro Refugio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat:
                </p>
                <p class="fw-bold">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat</p>
            </div>
            <!-- /col -->
            <div class="col-lg-6 text-center">
                <!--image -->
                <img loading="lazy" src="{{ asset('webassets/img/shelter.jpg') }}"alt="" class="img-fluid rounded">
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </section>
    <!--/ section  -->
    <!-- section donation-->
    <!-- cloud svg-->
    <svg id="clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
        viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
          M0 100 Q 5 0 10 100
          M5 100 Q 10 30 15 100
          M10 100 Q 15 10 20 100
          M15 100 Q 20 30 25 100
          M20 100 Q 25 -10 30 100
          M25 100 Q 30 10 35 100
          M30 100 Q 35 30 40 100
          M35 100 Q 40 10 45 100
          M40 100 Q 45 50 50 100
          M45 100 Q 50 20 55 100
          M50 100 Q 55 40 60 100
          M55 100 Q 60 60 65 100
          M60 100 Q 65 50 70 100
          M65 100 Q 70 20 75 100
          M70 100 Q 75 45 80 100
          M75 100 Q 80 30 85 100
          M80 100 Q 85 20 90 100
          M85 100 Q 90 50 95 100
          M90 100 Q 95 25 100 100
          M95 100 Q 100 15 105 100 Z"></path>
    </svg>
    <!-- /cloud svg-->
    <section id="donate-section" class="bg-light zig-zag-bottom">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-5 my-auto p-5 order-xl-2 ">
                    <h2>Ayúdanos con una Donación</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.</p>
                    <!-- button -->
                    <a class="btn btn-primary mb-5" href="{{url("/contact")}}" data-aos="fade-up">Contáctanos</a>
                </div>
                <!-- /col -->
                <div class="col-xl-3 offset-xl-2 d-flex align-items-end order-xl-1 justify-content-around">
                    <!--image -->
                    <img loading="lazy" src="{{ asset('webassets/img/donate.png') }}"alt="" class="img-fluid">
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section-->
    <!-- section FAQ -->
    <section class="page container">
        <div class="row">
            <div class="col-lg-7">
                <span class="lead">Preguntas</span>
                <h2>FAQ</h2>
                <!-- accordion-->
                <div class="accordion mb-5 mb-lg-0" id="accordionExample">
                    <!-- accordion item -->
                    <div class="accordion-item">
                        <span class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Cuándo puedo recoger a mi mascota tras su adopción?
                            </button>
                        </span>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit anim id est laborum lorem ipsum dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /accordion item -->
                    <!-- accordion item -->
                    <div class="accordion-item">
                        <span class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Qué marcas de comida para perros y gatos recomiendas?
                            </button>
                        </span>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /accordion item -->
                    <!-- accordion item -->
                    <div class="accordion-item">
                        <span class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Cuáles son los beneficios de tener a mi mascota esterilizada o castrada?
                            </button>
                        </span>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /accordion item -->
                    <!-- accordion item -->
                    <div class="accordion-item">
                        <span class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                ¿Qué documentos necesito para adoptar una mascota?
                            </button>
                        </span>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /accordion item -->
                </div>
                <!-- /accordion-->
            </div>
            <!-- /col-lg-->
            <div class="col-lg-5 col-xl-4 offset-xl-1 my-auto">
                <div id="box-with-img" class="parallax-img bg-light border-box">
                    <div class="p-5">
                        <h5>Necesitamos Voluntarios</h5>
                        <p>Suspendisse nec enim sed dolor dictum gravida. Quisque porttitor id tellus ut convallis. Ut ut
                            imperdietn lorem ipuset lorem nem.</p>
                        <!-- button -->
                        <div class="pb-5" data-aos="fade-up">
                            <a class="btn btn-outline-primary" href="{{url("/contact")}}">Contáctanos</a>
                        </div>
                        <!-- /pb-5 -->
                    </div>
                    <!-- /p-5 -->
                </div>
                <!-- /box-with-img-->
            </div>
            <!-- /col-->
        </div>
        <!-- /row -->
    </section>
    <!-- /section -->
    <!-- section Testimonials -->
    <section id="testimonials" class="container-fluid bg-overlay-dark">
        <div class="container page">
            <div class="row">
                <div class="text-center">
                    <span class="lead text-white">testimonios</span>
                    <h2 class="text-white">Historias de adopción</h2>
                </div>
                <!-- /col-->
                <!-- Carousel with 1 element per view -->
                <div class="slider-1 arrows-dark col-lg-8 offset-lg-2 mt-5">
                    <!-- review -->
                    <div class="review">
                        <div class="review-text mb-5">
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed mi in
                                nisi
                                ultricies pulvinar. Sed vitae dictum lectus. Nulla facilisi. Cras vehicula a dui scelerisque
                                fringilla. Suspendisse nec enim sed dolor dictum.
                            </p>
                        </div>
                        <div class="review-info">
                            <!-- review name and img-->
                            <img loading="lazy" src="{{ asset('webassets/img/testimonials/testimonial1.jpg') }}"alt=""
                                class="rounded-circle img-fluid">
                            <p class="fw-bold mt-2 text-white">Familia Pacheco</p>
                        </div>
                    </div>
                    <!-- /review -->
                    <!-- review -->
                    <div class="review">
                        <div class="review-text mb-5">
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed mi in
                                nisi
                                ultricies pulvinar. Sed vitae dictum lectus. Nulla facilisi. Cras vehicula a dui scelerisque
                                fringilla. Suspendisse nec enim sed dolor dictum.
                            </p>
                        </div>
                        <div class="review-info">
                            <!-- review name and img-->
                            <img loading="lazy" src="{{ asset('webassets/img/testimonials/testimonial2.jpg') }}"alt=""
                                class="rounded-circle img-fluid">
                            <p class="fw-bold mt-2 text-white">Familia Zambrano</p>
                        </div>
                    </div>
                    <!-- /review -->
                    <!-- review -->
                    <div class="review">
                        <div class="review-text mb-5">
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed mi in
                                nisi
                                ultricies pulvinar. Sed vitae dictum lectus. Nulla facilisi. Cras vehicula a dui scelerisque
                                fringilla. Suspendisse nec enim sed dolor dictum.
                            </p>
                        </div>
                        <div class="review-info">
                            <!-- review name and img-->
                            <img loading="lazy" src="{{ asset('webassets/img/testimonials/testimonial3.jpg') }}"alt=""
                                class="rounded-circle img-fluid">
                            <p class="fw-bold mt-2 text-white">Familia Macías</p>
                        </div>
                    </div>
                    <!-- /review -->
                </div>
                <!-- /slider-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </section>
    <!-- /section-->
    <section id="benefits" class="container page">
        <div class="col-lg-8 offset-lg-2 text-center">
            <span class="lead">Qué Hacemos</span>
            <h2>Nuestros Beneficios</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat lorem ipuset.</p>
        </div>
        <!-- /col -->
        <!-- features -->
        <div class="row mt-5">
            <div class="col-xl-4 my-auto p-3 text-center text-xl-start">
                <!-- feature -->
                <div class="feature-with-icon mb-5">
                    <div class="icon-features">
                        <!-- icon -->
                        <img loading="lazy" src="{{ asset('webassets/img/svg/cat.svg') }}"alt="">
                    </div>
                    <span class="h5">Un nuevo hogar</span>
                    <p class="mt-2">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <img loading="lazy" src="{{ asset('webassets/img/svg/paw.svg') }}"alt="">
                    </div>
                    <span class="h5">Ambiente seguro</span>
                    <p class="mt-2">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
            </div>
            <!-- /col -->
            <div class="col-xl-4 p-3 my-auto pt-sm-0 order-3 text-center text-xl-start">
                <!-- feature -->
                <div class="feature-with-icon mb-5">
                    <div class="icon-features">
                        <!-- icon -->
                        <img loading="lazy" src="{{ asset('webassets/img/svg/vaccine-bold.svg') }}"alt="">
                    </div>
                    <span class="h5">Mascotas Vacunadas</span>
                    <p class="mt-2">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <img loading="lazy" src="{{ asset('webassets/img/svg/dog.svg') }}"alt="">
                    </div>
                    <span class="h5">Animales Saludables</span>
                    <p class="mt-2">Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
            </div>
            <!-- /col -->
            <div class="text-center col-xl-4 mx-auto mt-3">
                <!--image  -->
                <img loading="lazy" src="{{ asset('webassets/img/benefits.jpg') }}"alt="" class="img-fluid">
            </div>
            <!-- col -->
        </div>
        <!-- /row-->
    </section>
    <!-- /section-->
    <!-- section Call to action 1 -->
    <section id="cta-1" class="container-fluid bg-overlay zig-zag-bottom zig-zag-top">
        <div class="container page">
            <div class="row ">
                <div class="col-lg-9">
                    <h2 class="text-white mb-0">Contáctanos hoy para adoptar una mascota</h2>
                </div>
                <!-- /col-->
                <div class="col-lg-3 my-auto" data-aos="fade-up">
                    <div class="btn btn-primary btn-lg mt-4 mt-lg-0">Contáctanos</div>
                </div>
                <!-- /col-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </section>
    <!-- /section-->
    <!-- section Adopt -->
    <section class="page container">
        <div class="text-center">
            <span class="lead">Encuentra a tu amigo</span>
            <h2>Adopta una mascota</h2>
        </div>
        <!--/text-center -->
        <!-- Carousel with 3 elements per view -->
        <div class="slider-3 mt-5">
            <!-- pet -->
            @foreach ($animal as $a)
                    <div class="{{ $a->especie_id }} col-xl-4 col-md-6 mb-5 p-3">
                        <div class="p-0 wrapper shadow rounded">
                            <!-- image -->
                            <div class="wrapper-hover">
                                <a href="{{ url("adoptsingle/" . $a->id) }}">
                                    <img loading="lazy" class="img-fluid" src={{ asset('storage/' . $a->imagen[0]) }}
                                        alt="">
                                </a>
                            </div>
                            <!-- animal and gender -->
                            <div class="pet-info">
                                <ul class="list-inline pt-4 pb-2 text-center">
                                    <li class="{{ $a->icon }} list-inline-item"></li>
                                    @if ($a->sexo == 'macho')
                                        <li class="male list-inline-item"></li>
                                    @else
                                        <li class="female list-inline-item"></li>
                                    @endif

                                </ul>
                            </div>
                            <!-- description -->
                            <div class="p-4 pt-0 text-center adopt-wrapper">
                                <div class="mb-3">
                                    <h3 class="h4">{{ $a->nombre }}</h3>
                                    <span class="lead">2 años de edad</span>
                                </div>
                                <p>Dale la oportunidad a {{ $a->nombre }} de ser feliz con una familia cariñosa </p>
                                <!-- button -->
                                <a class="btn btn-primary mb-2" href="{{ url("adoptsingle/" . $a->id) }}">Mas información</a>
                            </div>
                        </div>
                    </div>
                @endforeach




            <!-- /pet -->
        </div>
        <!-- /slider-->
        <!-- centered button -->
        <div class="text-center mt-3" data-aos="fade-up">
            <a class="btn btn-outline-primary btn-lg btn-inline" href="{{ url('/adopt') }}">Ver todas las mascotas por
                adoptar</a>
        </div>
        <!-- /centered button -->
    </section>
    <!-- /section-->
    <!-- section Counter-->
    <div id="counter-section" class="page parallax-bg">
        <!-- Counter starts -->
        <div id="counter" class="container">
            <div class="col-lg-10 offset-lg-1">
                <div class="row gx-5">
                    <!-- Counter -->
                    <div class="col-xl-4 pb-2 pb-xl-0" data-aos="zoom-in">
                        <div class="counter">
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value plus" data-count="{{ $aconteo }}">{{ $aconteo }}</div>
                            <p class="title">Mascotas adoptadas</p>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col -->
                    <!-- Counter -->
                    <div class="col-xl-4 pb-2 pb-xl-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="counter">
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="0">0</div>
                            <p class="title">Voluntarios</p>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col -->
                    <!-- Counter -->
                    <div class="col-xl-4">
                        <div class="counter" data-aos="zoom-in" data-aos-delay="300">
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="22">0</div>
                            <p class="title">Años de experiencia</p>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-->
                </div>
                <!-- /row -->
            </div>
            <!-- /col-lg -->
        </div>
        <!-- /counter -->
    </div>
    <!-- /section-->
    <!-- section Team -->
    <section class="page container">
        <div class="text-center">
            <span class="lead">Conócenos</span>
            <h2>Nuestro Equipo</h2>
        </div>
        <!--/text-center -->
        <!-- team -->
        <div class="row mt-5 gx-5">
            <!-- team member -->
            <div class="col-xl-4 col-md-6 mb-5">
                <div class="team-item bg-light rounded">
                    <div class="p-5">
                        <div class="text-center">
                            <!-- image -->
                            <img loading="lazy" class="img-fluid rounded"
                                src="{{ asset('webassets/img/team/team1.jpg') }}"alt="">
                        </div>
                        <!-- text -->
                        <div class="mb-3 mt-4">
                            <h4>Nombre Veterinario 1</h4>
                            <span class="lead">Veterinario</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>
                    <!-- /padding -->
                </div>
                <!-- /team-item -->
            </div>
            <!-- /team member ends -->
            <!-- team member -->
            <div class="col-xl-4 col-md-6 mb-5">
                <div class="team-item bg-light rounded">
                    <div class="p-5">
                        <div class="text-center">
                            <!-- image -->
                            <img loading="lazy" class="img-fluid rounded"
                                src="{{ asset('webassets/img/team/team2.jpg') }}"alt="">
                        </div>
                        <!-- text -->
                        <div class="mb-3 mt-4">
                            <h4>Nombre Veterinario 2</h4>
                            <span class="lead">Veterinaria</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>
                    <!-- /padding -->
                </div>
                <!-- /team-item -->
            </div>
            <!-- /team member ends -->
            <!-- team member -->
            <div class="col-xl-4 col-md-6 mb-5">
                <div class="team-item bg-light rounded">
                    <div class="p-5">
                        <div class="text-center">
                            <!-- image -->
                            <img loading="lazy" class="img-fluid rounded"
                                src="{{ asset('webassets/img/team/team3.jpg') }}"alt="">
                        </div>
                        <!-- text -->
                        <div class="mb-3 mt-4">
                            <h4>Nombre Voluntario 1</h4>
                            <span class="lead">Voluntario</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>
                    <!-- /padding -->
                </div>
                <!-- /team-item -->
            </div>
            <!-- /team member ends -->
        </div>
        <!-- /row -->
        <!-- centered button -->
        <div class="text-center mt-3" data-aos="fade-up">
            <a class="btn btn-outline-primary btn-lg btn-inline" href="{{url("/team")}}">Ver todo nuestro equipo de trabajo</a>
        </div>
        <!-- /centered button -->
    </section>
    <!-- /section-->
    <div class="container-fluid ps-0 pe-0 page bg-light overflow-x-hidden">
        <!-- Carousel with center mode -->
        <div class="slider-center lightbox p-0 mb-0">
            <!-- carousel img-->
            <a href="{{ asset('webassets/img/carousel/carousel1.jpg') }}"title="your caption here">
                <img loading="lazy"
                    src="{{ asset('webassets/img/carousel/carousel1.jpg') }}"class="hover-border img-fluid rounded "
                    alt="">
            </a>
            <!-- carousel img-->
            <a href="{{ asset('webassets/img/carousel/carousel2.jpg') }}"title="your caption here">
                <img loading="lazy"
                    src="{{ asset('webassets/img/carousel/carousel2.jpg') }}"class="hover-border img-fluid rounded "
                    alt="">
            </a>
            <!-- carousel img-->
            <a href="{{ asset('webassets/img/carousel/carousel3.jpg') }}"title="your caption here">
                <img loading="lazy"
                    src="{{ asset('webassets/img/carousel/carousel3.jpg') }}"class="hover-border img-fluid rounded "
                    alt="">
            </a>
            <!-- carousel img-->
            <a href="{{ asset('webassets/img/carousel/carousel4.jpg') }}"title="your caption here">
                <img loading="lazy"
                    src="{{ asset('webassets/img/carousel/carousel4.jpg') }}"class="hover-border img-fluid rounded "
                    alt="">
            </a>
        </div>
        <!-- /carousel-->
    </div>
    <!-- /container-->
    <!-- section Contact-->
    <section class="container page">
        <div class="text-center theme-padding pt-0">
            <span class="lead">Ponerse en contacto</span>
            <h2>Contáctanos</h2>
        </div>
        <!--/text-center -->
        <div class="row">
            <div class="col-lg text-center text-lg-start">
                <h3 class="h5">Dirección</h3>
                <p class="mb-0">En algun lugar</p>
                <p>Portoviejo,Ecuador</p>
            </div>
            <!-- /col-->
            <div class="col-lg text-center text-lg-start">
                <h3 class="h5">Nuestros horarios</h3>
                <p class="mb-0"><strong>LUN-VIE</strong> 09:00 – 19:00</p>
                <p><strong>SÁB-DOM</strong> 10:00 – 14:00</p>
            </div>
            <!-- /col-->
            <div class="col-lg text-center text-lg-start">
                <h3 class="h5">Información de contacto</h3>
                <p class="mb-0"><strong>Teléfono:</strong> + 593 999 999 999</p>
                <p> <strong>Email: </strong> email@email.com
                </p>
            </div>
            <!-- /col-->
            <div class="col-lg text-center text-lg-start">
                <h3 class="h5">Síguenos</h3>
                <!-- social icons-->
                <div class="social-icons social-circles">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Instagram" href="#"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /social icons-->
            </div>
            <!-- /col-->
        </div>
        <!-- /row-->
        <div class="row mt-5">
            <div class="col-lg-6 p-5 bg-light border-box">
                <h4>Mándanos un mensaje</h4>
                <!-- Contact Form -->
                <form method="POST" id="contact-form" class="site-form">
                    <!-- Success and error msgs, edit on contact.js file -->
                    <div id="contact_results"></div>
                    <!-- /results  -->
                    <!-- form field -->
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control mb-3 mt-2" name="name" id="name" required>
                    <!-- form field -->
                    <label for="email">Dirección de correo electrónico:</label>
                    <input type="email" class="form-control mb-3 mt-2" name="email" id="email" required>
                    <label for="option">Asunto:</label>
                    <select class="form-control mb-3 mt-2" name="option" id="option" required>
                        <option disabled selected value="">seleccione: </option>
                        <option value="Adopción de Mascotas">adopción de mascotas</option>
                        <option value="Productos y pagos">productos y pagos</option>
                        <option value="Donaciones y Caridad">donaciones</option>
                        <option value="Voluntariado">voluntariado</option>
                    </select>
                    <!-- form field -->
                    <label for="message">Mensaje:</label>
                    <textarea class="form-control mt-2" name="message" id="message" rows="5" cols="20" required></textarea>
                    <!-- button -->
                    <div class="btn btn-primary mt-3" id="submit_btn">
                        <!-- spinner -->
                        <span class="spinner-border spinner-border-sm me-2" id="spinner-form" aria-hidden="true"></span>
                        <!-- /spinner -->
                        Enviar
                    </div>
                    <!-- /button -->
                </form>
                <!-- /Contact Form -->
            </div>
            <!-- /col -->
            <div class="col-lg-6 my-auto">
                <!-- image -->
                <img loading="lazy" src="{{ asset('webassets/img/index-contact.jpg') }}"class="img-fluid"
                    alt="">
            </div>
            <!-- /col -->
        </div>
        <!-- /row-->
    </section>
    <!-- /section-->
    <!-- map section -->
    <div class="mt-5 container-fluid p-0">
        <!-- map canvas-->
        <div id="map-canvas"></div>
        <!-- /map canvas-->
    </div>
    <!-- /map section -->
    <!-- Go To Top Link -->
    <div class="col-lg-12 text-center page-scroll">
        <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--/page-scroll-->
    <!-- footer -->
@endsection
