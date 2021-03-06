@extends('layouts.template')

@section('title', 'Planeaciones')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><center><strong>Planeaciones</strong></center></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('planeaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Materias</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{$planeacione->id }}</td>
                                            @foreach($planeaciones as $planeacion)
											    <td class="text-left"><strong>Asignatura: </strong>{{ $planeacion->nombre }}<br><br><strong>competencia especifica de la asignatura: </strong>{{$planeacion->competenciaA}}<br><br><strong>Fuentes: </strong>{{$planeacion->fuentes}}</td>
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
