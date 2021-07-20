@extends('layouts.template')

@section('title', 'Unidades')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Unidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Unidad</th>
                                        <th class="text-center">Tema</th>
                                        <th class="text-center">Competencia Específica del Tema</th>
                                        <th class="text-center">Subtema y/o práctica </th>
                                        <th class="text-center">Estrategia(s) de Instrucción</th>
                                        <th class="text-center">Producto (s) y/o Aprendizaje(s)Esperado(s)</th>
                                        <th class="text-center">Sistema de evaluacion</th>
                                        <th class="text-center">Examenes</th>
                                        <th class="text-center">Planeación de proyectos y/o prácticas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{$unidade->id}}</td>
                                            <td class="text-center">{{$unidade->numUnidad}}</td>
                                            <td class="text-center">{{$unidade->nomunidad}}</td>
                                            <td class="text-center">{{$unidade->competEspTema}}</td>
                                            @foreach($Temas as $tema)
                                            <td>{{ $tema->temas}} <br><br>{{$tema->subtemas}}</td>
                                            <td>{{ $tema->estrategia}}</td>
                                            <td>{{$tema->prodEsp}}</td>
                                            <td><strong>Ejes:</strong> {{ $tema->ejes}} <br><br><strong>Competencia:</strong> {{$tema->competencias}} <br><br> <strong>Criterios: </strong>{{$tema->criterios}} <br><br> <strong>Ponderaciones: </strong>{{$tema->ponderaciones}} <br><br><strong>Total: </strong> {{$tema->total}}</td>
                                            <td><strong>Evaluación: </strong>{{$tema->evaluacion}}<br><br><strong>Revisión de evaluación:</strong> {{$tema->reveval}}<br><br><strong>Entrega Servicions Escolares:</strong> {{$tema->entrSE}}</td>
                                            <td></td>
                                            @endforeach
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
