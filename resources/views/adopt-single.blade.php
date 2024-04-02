
@extends("web.template")
@section("content")
<div class="jumbotron">
    <div class="bg-overlay p-5 text-center">
       <div class="container p-0 p-md-5">
          <!-- page-title-->
          <h1 class="text-white">Adopta a Bella</h1>
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">

                <li class="breadcrumb-item active" aria-current="page"> <a href="{{ url("/adopt") }}">¿No es a quién buscas?
                      Conoce a los demás</a></li>
             </ul>

          </nav>
          <!--/breadcrumb -->
       </div>
       <!--/container-->
    </div>
    <!--/bg-overlay-->
 </div>
 <!-- /jumbotron-->
 <div class="page">
    <div class="container">
       <div class="row gx-5">
          <!-- image -->
          <div class="col-lg-6 text-center my-auto">
             <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/adopt/adoptsingle1.jpg") }}" alt="">
          </div>
          <!-- /col-->
          <div class="col-lg-6 my-auto">
             <!-- animal and gender -->
             <div class="pet-info float-end">
                <ul class="list-inline pt-4 pb-2">
                   <li class="cat list-inline-item bg-light"></li>
                   <li class="male list-inline-item bg-light"></li>
                </ul>
             </div>
             <!-- title and description-->
             <h2 class="mb-2 mt-5 mt-lg-0">Bella</h2>
             <span class="lead">2 años de edad</span>
             <p class="mt-4">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
             <p>
                Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                lorem ipsum dolor.
             </p>
          </div>
          <!-- /col-->
       </div>
       <!-- /row-->
       <!-- row -->
       <div class="row">
          <!-- carousel-->
          <div class="slider-3 lightbox  mt-5 mb-5 g-3">
             <!-- image with lightbox-->
             <div class="p-2">
                <a href="{{ asset("webassets/img/adopt/adoptsingle2.jpg") }}" title="your caption here">
                   <img loading="lazy" src="{{ asset("webassets/img/adopt/adoptsingle2.jpg") }}" class="hover-border img-fluid rounded" alt="">
                </a>
             </div>
             <!-- image with lightbox-->
             <div class="p-2">
                <a href="{{ asset("webassets/img/adopt/adoptsingle3.jpg") }}" title="your caption here">
                   <img loading="lazy" src="{{ asset("webassets/img/adopt/adoptsingle3.jpg") }}" class="hover-border img-fluid rounded "
                      alt="">
                </a>
             </div>
             <!-- image with lightbox-->
             <div class="p-2">
                <a href="{{ asset("webassets/img/adopt/adoptsingle4.jpg") }}" title="your caption here">
                   <img loading="lazy" src="{{ asset("webassets/img/adopt/adopt4.jpg") }}" class="hover-border img-fluid rounded" alt="">
                </a>
             </div>
             <!-- image with lightbox-->
             <div class="p-2">
                <a href="{{ asset("webassets/img/adopt/adoptsingle5.jpg") }}" title="your caption here">
                   <img loading="lazy" src="{{ asset("webassets/img/adopt/adoptsingle5.jpg") }}" class="hover-border img-fluid rounded" alt="">
                </a>
             </div>
          </div>
          <!-- /carousel-->
       </div>
       <!-- /row-->
       <!-- row-->
       <div class="row gx-5 mt-lg-5">
          <div class="col-lg-6">
             <h4 class="mb-2 mt-5 mt-lg-0">Más sobre mí</h4>
             <!-- list-->
             <ul class="list-unstyled pt-3 pb-2 fw-bold">
                <li><i class="fa-solid fa-check text-secondary pe-2 mb-2"></i>Amistosa con otros animales </li>
                <li><i class="fa-solid fa-check text-secondary pe-2 mb-2"></i>Castrada</li>
                <li><i class="fa-solid fa-xmark text-secondary pe-2 mb-2"></i>No amigable con los niños</li>
                <li><i class="fa-solid fa-syringe text-secondary pe-2 mb-2"></i>Vacunada</li>
             </ul>
             <p class="mt-4">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
             <p>
                Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                lorem ipsum dolor.
             </p>
          </div>
          <!-- /col-->
          <div class="col-lg-6 ">
             <h4 class="mb-2 mt-5 mt-lg-0">El proceso de adopción</h4>
             <p class="mt-4">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
             <h5>Requeremientos</h5>
             <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
             <!-- button -->
             <a href="{{url("/contact")}}" class="btn btn-primary btn-lg">Adóptame</a>
          </div>
          <!-- /col-->
       </div>
       <!-- /row-->
    </div>
    <!-- /container-->
 </div>
 <!-- /page-->
 <!-- Go To Top Link -->
 <div class="col-lg-12 text-center page-scroll">
    <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
 </div>
 <!--/page-scroll-->
 @endsection
