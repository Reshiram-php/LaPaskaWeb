@extends('web.template')
@section('content')
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

            @foreach (File::glob(public_path('storage/animal-images') . '/*') as $path)
                <div class="col-lg-4" data-aos="fade-up"> <a href="{{ str_replace(public_path(), '', $path) }}">
                        <img src="{{ str_replace(public_path(), '', $path) }}" class="hover-border img-fluid rounded "
                            alt="">
                    </a>
                </div>
            @endforeach
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
