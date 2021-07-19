@extends('layouts.template')

@section('template_title')
    Unidade
@endsection

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
                                        <th>No</th>
                                        
										<th>Numunidad</th>
										<th>Competesptema</th>
										<th>Nomunidad</th>
										<th>Temas </th>
										<th>Subtemas</th>
										<th>Estrategias instruccion Id</th>
										<th>Productos esperados Id</th>
										<th>Sistema de evaluacion</th>
										<th>Examenes</th>
										<th>Planpros</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unidades as $unidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $unidade->numUnidad }}</td>
											<td>{{ $unidade->competEspTema }}</td>
											<td>{{ $unidade->nomunidad }}</td>
											<td>{{ $unidade->temas_id }}</td>
											<td>{{ $unidade->subtemas_id }}</td>
											<td>{{ $unidade->estrat_ins_id }}</td>
											<td>{{ $unidade->prodespers_id }}</td>
											<td>{{ $unidade->sisevals_id }}</td>
											<td>{{ $unidade->examenes_id }}</td>
											<td>{{ $unidade->planpros_id }}</td>

                                            <td>
                                                <form action="{{ route('unidades.destroy',$unidade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('unidades.show',$unidade->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('unidades.edit',$unidade->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
