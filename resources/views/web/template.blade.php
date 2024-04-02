<!doctype html>
<html lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="generator" content="">
   <!-- page title -->
   <title>La Paska - HTML Template</title>
   <!-- Fonts  -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;600;800&amp;family=Inter:wght@400;700&amp;display=swap"
      rel="stylesheet">
   <link href="{{ asset("webassets/fonts/fontawesome/all.min.css")}}" rel="stylesheet">
   <!-- Fav icons -->
   <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
   <!-- Bootstrap core CSS -->
   <link href="{{ asset("webassets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
   <!-- CSS files -->
   <link href="{{ asset("webassets/css/style.css")}}" rel="stylesheet">
   <link href="{{ asset("webassets/css/plugins.css")}}" rel="stylesheet">

</head>
<!-- /end header -->

<body>

   <!-- Start Top Bar -->
   <div id="template-header">
      <div class="container-fluid top-bar ">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <!-- Start Contact Info -->
                  <ul class="contact-details list-inline mb-0">
                     <li class="list-inline-item"><i class="fa fa-map-marker"></i>Direeccion</li>
                     <li class="list-inline-item"><i class="fa fa-envelope"></i><a
                           href="mailto:email@site.com">lapaska@yoursite.com</a></li>
                     <li class="list-inline-item"><i class="fa fa-phone"></i>telefono</li>
                  </ul>
                  <!-- End Contact Info -->
               </div>
               <!-- /col-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- End Top bar -->
      <nav id="main-nav" class="navbar navbar-expand-xl bg-primary ps-md-4 pe-md-4">
         <div class="container-fluid">
            <!-- navbar brand-->
            <a class="navbar-brand text-white" href="{{ url("/#top") }}">
               <img loading="lazy" src="{{ asset("webassets/img/logo.png")}}" alt="" class="me-2 text-white">La Paska
            </a>
            <!-- navbar toggler-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
               aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /navbar toggler-->
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav d-flex justify-content-center">
                  <!-- menu item -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url("/") }}">Home</a>
                  </li>
                  <!-- menu item -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{url("/about")}}">¿Quiénes Somos?</a>
                  </li>
                  <!-- menu item -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{url("/gallery")}}">Galería</a>
                  </li>
                  <!-- menu item with dropdown-->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Adopción</a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url("/adopt")}}">Adopción gallery</a></li>
                        <li><a class="dropdown-item" href="{{url("/adoptsingle")}}">Adopción Individual</a></li>
                     </ul>
                  </li>
                  <!-- menu item -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{url("/team")}}">Equipo</a>
                  </li>
                  <!-- menu item with dropdown-->

                  <!-- menu item -->
                  <li class="nav-item">
                     <a class="nav-link" href="{{url("/contact")}}">Contáctanos</a>
                  </li>
                  <!-- menu item -->

               </ul>
               <!-- /navbar-nav-->
               <!-- Social icons -->
               <div class="social-icons text-white d-flex justify-content-end">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a title="Facebook" href="#"><i
                              class="fa-brands fa-facebook-f"></i></a></li>
                     <li class="list-inline-item"><a title="Twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                     </li>
                     <li class="list-inline-item"><a title="Instagram" href="#"><i
                              class="fa-brands fa-instagram"></i></a></li>
                     <li class="list-inline-item"><a title="Mail" href="mailto:email@youremail.com"><i
                              class="fa-solid fa-envelope"></i></a></li>
                  </ul>
               </div>
               <!-- /socila-icons -->
            </div>
            <!-- /collapse-->
         </div>
         <!-- /container-fluid -->
      </nav>
      <!-- /nav -->
   </div>

@yield('content')



   <footer>
    <div class="container-fluid">
       <div class="container-fluid">
          <div class="row p-5 bg-light">
             <div class="col-lg-4 col-xl-3 p-4 text-center text-lg-start">

             </div>
             <!-- /col -->
             <div class="col-lg-4 col-xl-3 p-4 text-center text-lg-start">
                <span class="h5">Visítanos</span>
                <p class="mt-3 mb-0">Direccion por ubicar</p>
                <p class="mb-0">Ecuador</p>
                <p class="mb-0">Telefono</p>
             </div>
             <!-- /col -->
             <div class="col-lg-4 col-xl-3 p-4 text-center text-lg-start">
                <span class="h5">Horarios de atención</span>
                <p class="mt-3 mb-0">Lunes a Viernes</p>
                <p class="mb-0">09:00 am a 09:00 pm</p>
                <p class="mb-0">Sábados y Domingos – Cerrado</p>
             </div>
             <div class="col-lg-4 col-xl-3 p-4 text-center text-lg-start">

             </div>
             <!-- /col -->

             <!-- /col -->
          </div>
          <!-- /row -->
       </div>
       <!-- /row -->
    </div>
    <!-- /container-fluid -->
    <div class="container-fluid p-0 bg-primary text-center">
       <p class="text-white mb-0 p-4">© 2024 <a class="text-white" href=" "></a>
    </div>
    <!-- /container -->
 </footer>
 <!-- /footer ends -->
 <!-- Bootstrap core & Jquery -->
 <script src="{{ asset("webassets/js/jquery.min.js")}}"></script>
 <script src="{{ asset("webassets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
 <!-- Custom js -->
 <script src="{{ asset("webassets/js/plugins.js")}}"></script>
 <script src="{{ asset("webassets/js/main.js")}}"></script>
 <!-- Mailchimp -->
 <script src="{{ asset("webassets/js/mailchimp.js")}}"></script>
 <!-- Bootstrap Select Tool (For Module #4) -->

 <script src="{{ asset("webassets/js/map.js")}}"></script>
 <!-- Contact js-->
 <script src="{{ asset("webassets/js/contact.js")}}"></script>
</body>



</html>
