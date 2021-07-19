@extends('layouts.template')

@section('title', 'Estrategia(s)')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Estrategia(s) de Instrucción</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('estrat-ins.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Estrategia(s) de Instrucción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{ $estratIn->id }}</td>
											<td class="text-center">{{ $estratIn->estrategia }}</td>
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
