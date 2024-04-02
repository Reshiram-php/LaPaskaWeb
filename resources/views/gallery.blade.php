@extends("web.template")
@section("content")
<div class="jumbotron">
    <div class="bg-overlay p-5 text-center">
       <div class="container p-0 p-md-5">
          <!-- page-title-->
          <h1 class="text-white">Galería</h1>
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb">

             </ol>
          </nav>
          <!--/breadcrumb -->
       </div>
       <!--/container-->
    </div>
    <!--/bg-overlay-->
 </div>
 <!-- /jumbotron-->
 <div class="container page" id="gallery-page">
    <div class="col-lg-8 offset-lg-2 text-center mb-5">
       <span class="lead">Momentos</span>
       <h2>Nuestra Galería de Imágenes</h2>
       <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
    </div>
    <!-- /col -->
    <div class="row theme-padding lightbox gallery" data-masonry='{"percentPosition": true }'>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery1.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery1.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery2.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery2.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery3.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery3.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery4.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery4.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery5.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery5.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery6.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery6.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery7.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery7.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery8.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery8.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery9.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery9.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery10.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery10.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery11.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery11.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery12.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery12.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
       <!-- image -->
       <div class="col-lg-4" data-aos="fade-up"> <a href="{{ asset("webassets/img/gallery/gallery4.jpg") }}" title="your caption here">
             <img src="{{ asset("webassets/img/gallery/gallery13.jpg") }}" class="hover-border img-fluid rounded " alt="">
          </a>
       </div>
    </div>
    <!-- /row -->
 </div>
 <!-- /container-->
 <!-- Go To Top Link -->
 <div class="col-lg-12 text-center page-scroll">
    <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
 </div>
 <!--/page-scroll-->
 @endsection
