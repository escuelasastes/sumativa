@extends('layouts.template')

@section('title', 'Materias')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><center><strong>Materia</strong></center></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
										<th class="text-center">Asignatura</th>
										<th class="text-center">Competencia Específica de la Asignatura</th>
										<th class="text-center">Unidades</th>
										<th class="text-center">Sistema de evaluacion</th>
										<th class="text-center">Fuentes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
											<td class="text-left">{{ $materia->nombre }}</td>
											<td class="text-left">{{ $materia->competenciaA }}</td>
                                            @foreach($materias as $mat)
											<td class="text-left"><strong>Unidad: </strong>{{ $mat->numUnidad }} <br><br><strong>Tema: </strong>{{$mat->nomunidad}}<br><br><strong>Competencia Específica del Tema: </strong>{{$mat->competEspTema}}</td>
											<td class="text-left"><strong>Ejes: </strong>{{ $mat->ejes }}<br><br><strong>Competencias: </strong>{{ $mat->competencias }}<br><br><strong>Criterios: </strong>{{ $mat->criterios }}<br><br><strong>Ponderaciones: </strong>{{ $mat->ponderaciones }}<br><br><strong>Total: </strong>{{ $mat->total }}</td>
                                            <td class="text-left">{{ $materia->fuentes }}</td>
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
