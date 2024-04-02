@extends("web.template")
@section("content")
<div class="jumbotron">
    <div class="bg-overlay p-5 text-center">
       <div class="container p-0 p-md-5">
          <!-- page-title-->
          <h1 class="text-white">Equipo</h1>
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
 <div class="page">
    <div class="container">
       <div class="row">
          <div class="col-lg-7 my-auto">
             <h2>Conoce a Nuestro Equipo</h2>
             <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
             <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum lorem ipsum dolor.
             </p>
          </div>
          <!-- /col-->
          <div class="col-lg-5 col-xl-4 offset-xl-1 my-auto">
             <div id="box-with-img" class="parallax-img bg-light border-box">
                <div class="p-5">
                   <h5>Necesitamos Voluntarios</h5>
                   <p>Suspendisse nec enim sed dolor dictum gravida. Quisque porttitor id tellus ut convallis. Ut ut
                      imperdietn lorem ipuset lorem nem.</p>
                   <!-- button -->
                   <div class="pb-5" data-aos="fade-up">
                      <a class="btn btn-outline-primary" href="{{ url("/contact") }}">Contáctanos</a>
                   </div>
                   <!-- /pb-5 -->
                </div>
                <!-- /p-5 -->
             </div>
             <!-- /box-with-img-->
          </div>
          <!-- /col-->
       </div>
       <!-- /row-->
       <div class="row mt-5 gx-5">
          <!-- team member -->
          <div class="col-xl-4 col-md-6 mb-5" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/team/team1.jpg") }}" alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 1</h4>
                      <span class="lead">Veterinario</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
          <!-- team member -->
          <div class="col-xl-4 col-md-6 mb-5" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/team/team2.jpg") }}" alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 2</h4>
                      <span class="lead">Veterinaria</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
          <!-- team member -->
          <div class="col-xl-4 col-md-6 mb-5" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/team/team3.jpg") }}" alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 3</h4>
                      <span class="lead">Voluntario</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
          <!-- team member -->
          <div class="col-xl-4 col-md-6 mb-5 mb-xl-0" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src={{ asset("webassets/img/team/team4.jpg") }} alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 4</h4>
                      <span class="lead">Veterinaria</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
          <!-- team member -->
          <div class="col-xl-4 col-md-6 mb-5 mb-xl-0" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/team/team5.jpg") }}" alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 5</h4>
                      <span class="lead">Veterinaria</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
          <!-- team member -->
          <div class="col-xl-4 col-md-6" data-aos="fade-up">
             <div class="team-item bg-light rounded">
                <div class="p-5">
                   <div class="text-center">
                      <!-- image -->
                      <img loading="lazy" class="img-fluid rounded" src="{{ asset("webassets/img/team/team6.jpg") }}" alt="">
                   </div>
                   <!-- text -->
                   <div class="mb-3 mt-4">
                      <h4>Nombre 6</h4>
                      <span class="lead">Voluntrio</span>
                   </div>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                </div>
                <!-- /padding -->
             </div>
             <!-- /team-item -->
          </div>
          <!-- /team member ends -->
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
