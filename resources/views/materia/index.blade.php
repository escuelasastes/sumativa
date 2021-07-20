@extends('layouts.template')

@section('title', 'Materias')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materias.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
                                  {{ __('Agregar nueva materia') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <div class="alert-icon">
                                <i class="material-icons">check</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Asignatura</th>
										<th class="text-center">Competencia Específica de la Asignatura</th>
										<th class="text-right">Unidades</th>
										<th class="text-right">Sistema de evaluacion</th>
										<th class="text-right">Fuentes</th>
                                        <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
											<td class="text-center">{{ $materia->nombre }}</td>
											<td class="text-center">{{ $materia->competenciaA }}</td>
											<td class="text-right">{{ $materia->numUnidad }} {{$materia->nomUnidad}} {{$materia->competEspTema}}</td>
											<td class="text-right">{{ $materia->ejes }} {{ $materia->competencias }} {{ $materia->criterios }} {{ $materia->ponderaciones }} {{ $materia->total }}</td>
                                            <td class="text-center">{{ $materia->fuentes }}</td>
                                            <td>
                                                <form action="{{ route('materias.destroy',$materia->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('materias.show',$materia->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('materias.edit',$materia->id) }}">
                                                    <i class="material-icons">edit</i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-just-icon btn-sm">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materias->links() !!}
            </div>
        </div>
    </div>
@endsection
