@extends('layouts.template')

@section('template_title')
    {{ $prodesper->name ?? 'Show Prodesper' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Producto (s) y/o Aprendizaje(s)Esperado(s)</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('prodespers.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-right">Producto (s) y/o Aprendizaje(s)Esperado(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{$prodesper->id}}</td>
											<td class="text-right">{{ $prodesper->prodEsp }}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </section>
@endsection
