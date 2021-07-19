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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidades as $unidade)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
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
                                            <td class="td-actions text-center">
                                                <form action="{{ route('unidades.destroy',$unidade->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('unidades.show',$unidade->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('unidades.edit',$unidade->id) }}">
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
                {!! $unidades->links() !!}
            </div>
        </div>
    </div>
@endsection
