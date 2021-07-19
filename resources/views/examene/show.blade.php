@extends('layouts.template')

@section('title', 'SECUENCIA DE CONTROL')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">
                                <center><strong>SECUENCIA DE CONTROL ADMINISTRATIVO</strong></center>
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Evaluación</th>
										<th class="text-center">Revisión de la evaluación</th>
										<th class="text-center">Entrega Servicios Escolares</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{ $examene->id }}</td>
											<td class="text-center">{{ $examene->evaluacion }}</td>
											<td class="text-center">{{ $examene->reveval }}</td>
											<td class="text-center">{{ $examene->entrSE }}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
