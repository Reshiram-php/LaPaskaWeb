@extends('web.template')
@section('content')
    <div class="jumbotron">
        <div class="bg-overlay p-5 text-center">
            <div class="container p-0 p-md-5">
                <!-- page-title-->
                <h1 class="text-white">Adopción</h1>
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
                <div class="offset-lg-2 col-lg-8 text-center">
                    <span class="lead">adopta</span>
                    <h2>Encuentra a un nuevo amigo</h2>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est
                        laborum lorem ipsum dolor.
                    </p>
                </div>
                <!-- /col-->
            </div>
            <!-- /row-->
            <!-- filter menu -->
            <div class="row mt-5">
                <div class="buttons-filter d-grid gap-4 d-sm-block text-center">
                    <button class="btn btn-outline-primary active" type="button" data-filter="all">Todos</button>
                    @foreach ($especie as $e)
                        <button class="btn btn-outline-primary" type="button"
                            data-filter="{{ $e->id }}">{{ $e->especie }}</button>
                    @endforeach



                </div>
                <!-- /pet filter-->
            </div>
            <!-- /row-->
            <!-- pet row starts-->
            <div class="pet-row row mt-5 gx-5">
                <!-- pet -->

                @foreach ($animal as $a)
                    <div class="{{ $a->especie_id }} col-xl-4 col-lg-6 mb-5 filter-item">
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

            </div>
            <!-- /pet-row-->
            <!-- pagination-->
            <nav aria-label="pagination-adopt">
                <ul class="pagination">
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                <!-- /pagination-->
            </nav>
            <!-- /pagination-adopt-->
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
