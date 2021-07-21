@extends('layouts.template')

@section('title', 'Unidades')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('unidades.create') }}"  class="btn btn-social btn-fill btn-facebook"  data-placement="left">
                                  {{ __('agregar unidad') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

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
                                        <th width="150px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidades as $unidade)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
											<td class="text-center">{{ $unidade->numUnidad }}</td>
                                            <td>{{ $unidade->nomunidad }}</td>
											<td>{{ $unidade->competEspTema }}</td>
											<td>{{ $unidade->temas}} <br><br>{{$unidade->subtemas}}</td>
											<td>{{ $unidade->estrategia}}</td>
											<td>{{$unidade->prodEsp}}</td>
											<td><strong>Ejes:</strong> {{ $unidade->ejes}} <br><br><strong>Competencia:</strong> {{$unidade->competencias}} <br><br> <strong>Criterios: </strong>{{$unidade->criterios}} <br><br> <strong>Ponderaciones: </strong>{{$unidade->ponderaciones}} <br><br><strong>Total: </strong> {{$unidade->total}}</td>
											<td><strong>Evaluación: </strong>{{$unidade->evaluacion}}<br><br><strong>Revisión de evaluación:</strong> {{$unidade->reveval}}<br><br><strong>Entrega Servicions Escolares:</strong> {{$unidade->entrSE}}</td>
											<td><strong>Número de proyecto: </strong>{{$unidade->noPr}}<br><br><strong>Competencia: </strong>{{$unidade->competencia}}<br><br><strong>Ponderación: </strong>{{$unidade->ponderacion}}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('unidades.destroy',$unidade->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('unidades.show',$unidade->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('unidades.edit',$unidade->id) }}">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-just-icon btn-sm" onclick="return confirm('Estas Seguro de ¿Borrar?');">
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
            </div>
        </div>
    </div>
@endsection
