@extends("web.template")
@section("content")
<div class="jumbotron">
    <div class="bg-overlay p-5 text-center">
       <div class="container p-0 p-md-5">
          <!-- page-title-->
          <h1 class="text-white">Contáctanos</h1>
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
 <div class="container page">
    <div class="text-center mb-5">
       <span class="lead">contacto</span>
       <h2>Ponerse en contacto</h2>
    </div>
    <!-- /text-center-->
    <div class="theme-padding">
       <div class="row">
          <div class="col-lg text-center text-lg-start">
             <h3 class="h5">Ubicación</h3>
             <p class="mb-0">calle no c en algun lugar</p>
             <p>Portoviejo, Ecuador</p>
          </div>
          <!-- /col-->
          <div class="col-lg text-center text-lg-start">
             <h3 class="h5">Horarios de atención</h3>
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
                            class="fa-brands fa-facebook-f"></i></a></li>
                   <li class="list-inline-item"><a title="Twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                   </li>
                   <li class="list-inline-item"><a title="Instagram" href="#"><i
                            class="fa-brands fa-instagram"></i></a></li>
                </ul>
             </div>
             <!-- /social icons-->
          </div>
          <!-- /col-->
       </div>
       <!-- /row-->
    </div>
    <!-- /theme-padding-->
    <div class="row mt-5">
       <div class="col-lg-8">
          <!-- map-->
          <div id="map-canvas" class="contact container-fluid"></div>
          <!-- /map-->
       </div>
       <!-- /col-->
       <div class="col-lg-4 ps-2 ps-lg-5">
          <h4 class="mb-4 mt-5 mt-lg-0">Mándanos un mensaje</h4>
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
       <!-- /col-->
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
