@extends('layouts.template')

@section('template_title')
    {{ $siseval->name ?? 'Show Siseval' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><center><strong>SISTEMA DE EVALUACIÓN</strong></center></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('sisevals.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Ejes</th>
										<th class="text-center">Competencias</th>
										<th class="text-center">Factores y/o Criterios de Evaluación</th>
										<th class="text-center">Ponderación</th>
										<th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{$siseval->id }}</td>
											<td class="text-left">{{ $siseval->ejes }}</td>
											<td>{{ $siseval->competencias }}</td>
											<td>{{ $siseval->criterios }}</td>
											<td class="text-center">{{ $siseval->ponderaciones }}</td>
										    <td class="td-actions text-right">{{ $siseval->total }}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
