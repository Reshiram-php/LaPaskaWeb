@extends("web.template")
@section("content")
<div class="jumbotron">
    <div class="bg-overlay p-5 text-center">
       <div class="container p-0 p-md-5">
          <!-- page-title-->
          <h1 class="text-white">Quiénes Somos</h1>
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">

          </nav>
          <!--/breadcrumb -->
       </div>
       <!--/container-->
    </div>
    <!--/bg-overlay-->
 </div>
 <!-- /jumbotron-->
 <div class="container page">
    <div class="row">
       <div class="col-lg-5">
          <img loading="lazy" src="{{ asset("webassets/img/about/about1.jpg") }}" alt="" class="img-rounded img-fluid">
       </div>
       <!-- /col-->
       <div class="col-lg-6 offset-lg-1 my-auto">
          <div class="mt-5 mt-lg-0">
             <span class="lead">Qué Hacemos</span>
             <h2>Acerca de nuestro refugio</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commod Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. </p>
             <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
             <!-- button -->
             <a href="{{url("/contact")}}" class="btn btn-primary">Conviértete en voluntario</a>
          </div>
          <!-- /mt -->
       </div>
       <!-- /col-->
    </div>
    <!-- /row-->
 </div>
 <!-- /container-->
 <div class="container-fluid bg-light theme-padding position-relative">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 my-auto p-5">
             <h3>Buscando hogares amorosos</h3>
             <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit commod Duis aute irure dolor
                in esse cillum dolore eu fugiat nulla pariatur. </p>
             <!-- list -->
             <ul class="custom">
                <li>Consectetur adipiscing elit. Duis sed mi in nisi ultricies pulvinar.</li>
                <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offici</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit commod.</li>
             </ul>
             <!-- button -->
             <a href="{{url("/contact")}}" class="btn btn-primary">Contáctanos</a>
          </div>
          <!-- /col-->
          <!-- parallax images-->
          <div class="parallax-effect col-xl-6 p-5">
             <img loading="lazy" src="{{ asset("webassets/img/about/about-parallax1.jpg") }}" alt=""
                class="rounded img-fluid parallax1 border border-5 border-light">
             <img loading="lazy" src="{{ asset("webassets/img/about/about-parallax2.jpg") }}" alt=""
                class="rounded img-fluid parallax2 border border-5 border-light">
          </div>
          <!-- /parallax images-->
          <!-- /col-->
       </div>
       <!-- /row-->
    </div>
    <!-- /container-->
 </div>
 <!-- /container-fluid-->
 <div id="counter-section2" class="container-fluid zig-zag-bottom zig-zag-top parallax-bg">
    <div class="page">
       <!-- Counter starts -->
       <div id="counter" class="container">
          <div class="col-lg-10 offset-lg-1">
             <div class="row gx-5">
                <!-- Counter -->
                <div class="col-xl-4 pb-2 pb-xl-0" data-aos="zoom-in">
                   <div class="counter">
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value plus" data-count="800">0</div>
                      <p class="title">Mascotas adoptadas</p>
                   </div>
                   <!-- /counter -->
                </div>
                <!-- /col -->
                <!-- Counter -->
                <div class="col-xl-4 pb-2 pb-xl-0" data-aos="zoom-in" data-aos-delay="200">
                   <div class="counter">
                      <!-- insert your final value on data-count= -->
                      <div class="counter-value" data-count="40">0</div>
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
    <!-- /page-->
 </div>
 <!-- /container-fluid-->
 <div class="container page">
    <div class="row">
       <div class="col-lg-5 ">
          <img loading="lazy" src="{{ asset("webassets/img/about/about3.png") }}" alt="" class="img-rounded img-fluid">
       </div>
       <!-- /col-->
       <div class="col-lg-7 my-auto">
          <span class="lead">Qué Hacemos</span>
          <h2>Nuestra Filosofía</h2>
          <!-- list -->
          <ul class="custom">
             <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est <a href="#">laborum lorem </a>ipsum dolor.</li>
             <li>Consectetur adipiscing elit. Duis sed mi in nisi ultricies pulvinar Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui offici</li>
             <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit commod.</li>
          </ul>
          <!-- button -->
          <a class="btn btn-primary" href="{{ url("/adopt") }}">Adopta hoy</a>
       </div>
       <!-- /col-->
    </div>
    <!-- /row-->
 </div>
 <!-- /container-->
 <!-- Go To Top Link -->
 <div class="col-lg-12 text-center page-scroll">
    <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
 </div>
 <!--/page-scroll-->
 @endsection
