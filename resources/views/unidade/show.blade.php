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
										<th>Unidad</th>
                                        <th>Nombre</th>
										<th>Competencia especifica de la unidad</th>
										<th>Temas </th>
										<th>Subtemas</th>
										<th>Estrategia(s) de Instrucción</th>
										<th>Producto (s) y/o Aprendizaje(s)Esperado(s)</th>
										<th>Sistema de evaluacion</th>
										<th>Examenes</th>
										<th>PLANEACIÓN DE PROYECTOS Y/O PRÁCTICAS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{ $unidade->id}}</td>
											<td>{{ $unidade->numUnidad }}</td>
                                            <td>{{ $unidade->nomunidad }}</td>
											<td>{{ $unidade->competEspTema }}</td>
											<td>{{ $unidade->temas_id }}</td>
											<td>{{ $unidade->subtemas_id }}</td>
											<td>{{ $unidade->estrat_ins_id }}</td>
											<td>{{ $unidade->prodespers_id }}</td>
											<td>{{ $unidade->sisevals_id }}</td>
											<td>{{ $unidade->examenes_id }}</td>
											<td>{{ $unidade->planpros_id }}</td>
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
