<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ public_path('css/report.css') }}" type="text/css" />
</head>

<body>



    <div class="content-wrapper">

        <section class="content-header">
            <h1 style='text-align:center; vertical-align:middle'>REPORTE</h1>
        </section>

        <section class="content container-fluid">
            <div class="box box-default">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-tittle"> Datos del Animal</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-show">
                                    <tbody>
                                        <tr>
                                            <th>Animal Id</th>
                                            <td>{{ $animal->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <td>{{ $animal->nombre }}</td>
                                        </tr>

                                        <tr>
                                            <th>Sexo</th>
                                            <td>{{ $animal->sexo }}</td>
                                        </tr>
                                        <tr>
                                            <th>Castrado</th>
                                            @if ($animal->castrado == true)
                                                <td>Sí</td>
                                            @else
                                                <td>No</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Fecha de Nacimiento</th>
                                            <td>{{ $animal->fecha_nacimiento }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha Refugio</th>
                                            <td>{{ $animal->fecha_refugio }}</td>
                                        </tr>
                                        <tr>
                                            <th>Especie</th>
                                            <td>{{ $animal->especie }}</td>
                                        </tr>
                                        <tr>
                                            <th>Raza</th>
                                            <td>{{ $animal->raza }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="box-tittle">Cuidados</h3>
                            <div class="table-responsive">

                                <table class="table table-bordered table-show">
                                    <thead>
                                        <tr>
                                            <th style="border-width: 1px;border: solid; border-color: #0b0b0b;">Tipo de
                                                cuidado
                                            </th>
                                            <th style="border-width: 1px;border: solid; border-color: #0b0b0b;">Fecha de
                                                cuidado</th>
                                            <th style="border-width: 1px;border: solid; border-color: #0b0b0b;">
                                                Descripción
                                            </th>
                                            <th style="border-width: 1px;border: solid; border-color: #0b0b0b;">Costo
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cuidados as $p)
                                            <tr>
                                                <td style="border-width: 1px;border: solid; border-color: #0b0b0b;">
                                                    {{ $p->tipo_cuidado }}
                                                </td>
                                                <td style="border-width: 1px;border: solid; border-color: #0b0b0b;">
                                                    {{ $p->fecha_cuidado }}
                                                </td>
                                                <td style="border-width: 1px;border: solid; border-color: #0b0b0b;">
                                                    {{ $p->descripcion }}
                                                </td>
                                                <td style="border-width: 1px;border: solid; border-color: #0b0b0b;">
                                                    {{ $p->costo }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <table class="table table-bordered table-show">
                                    <caption style="text-align:center; font-size:120%; color: #0b0b0b;">Imagen
                                    </caption>

                                    <tbody>

                                            <img src="{{ public_path('storage/' . $animal->imagen[0]) }}" height="200px"
                                                width="200px">

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>
