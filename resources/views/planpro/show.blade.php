@extends('layouts.template')

@section('title', 'Proyectos')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-center">
                            <span class="card-title">
                                <center><strong>PLANEACIÓN DE PROYECTOS Y/O PRÁCTICAS</strong></center>
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('planpros.index') }}"> Back</a>
                        </div>
                    </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th class="text-center"><strong>No. de Proyecto/Práctica</strong></th>
                                        <th class="text-right">Unidad</th>
										<th class="text-center">Competencia</th>
										<th class="text-right">Ponderacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{ $planpro->id }}</td>
											<td class="text-center">{{ $planpro->noPr }}</td>
											<td class="text-center">{{ $planpro->competencia }}</td>
											<td class="text-center">{{ $planpro->ponderacion }}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </section>
@endsection
