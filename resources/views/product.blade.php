@extends('web.template')
@section('content')
    <div class="jumbotron">
        <div class="bg-overlay p-5 text-center">
            <div class="container p-0 p-md-5">
                <!-- page-title-->
                <h1 class="text-white">Productos</h1>
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
                    <h2>Conoce Nuestros Productos</h2>
                    <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est
                        laborum lorem ipsum dolor.
                    </p>
                </div>
                <!-- /col-->
                <!-- /col-->
            </div>
            <!-- /row-->
            <div class="row mt-5 gx-5">
                <!-- team member -->
                @foreach ($product as $v)
                    <div class="col-xl-4 col-md-6 mb-5" data-aos="fade-up">
                        <div class="team-item bg-light rounded">
                            <div class="p-5">

                                <div class="text-center">
                                    <!-- image -->
                                    <a href="{{ url("/contact") }}">
                                    <img loading="lazy" class="img-fluid rounded" src="{{ asset('storage/' . $v->imagen) }}"
                                        alt="">
                                    </a>
                                </div>
                                <!-- text -->
                                <div class="mb-3 mt-4">
                                    <a href="{{ url("/contact") }}">
                                    <h4>{{ $v->nombre }}</h4>
                                </a>
                                    <span class="lead text-center">$ {{ $v->precio }}</span>

                                </div>
                                <p>{{$v->descripcion}}</p>
                            </div>
                @endforeach

                <!-- /padding -->
            </div>
            <!-- /team-item -->
        </div>
        <!-- /team member ends -->
        <!-- team member -->

        <!-- /team member ends -->

        <!-- /page-->
        <!-- Go To Top Link -->
        <div class="col-lg-12 text-center page-scroll">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--/page-scroll-->
    @endsection
