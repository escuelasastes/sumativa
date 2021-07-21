@extends('layouts.template')

@section('title', 'SECUENCIA DE CONTROL')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">
                                <center><strong>{{ __('SECUENCIA DE CONTROL ADMINISTRATIVO') }}</strong></center>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('examenes.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Evaluación</th>
										<th class="text-center">Revisión de la evaluación</th>
										<th class="text-center">Entrega Servicios Escolares</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examenes as $examene)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
											<td class="text-center">{{ $examene->evaluacion }}</td>
											<td class="text-center">{{ $examene->reveval }}</td>
											<td class="text-center">{{ $examene->entrSE }}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('examenes.destroy',$examene->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('examenes.show',$examene->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('examenes.edit',$examene->id) }}">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  class="btn btn-danger btn-just-icon btn-sm" onclick="return confirm('Estas Seguro de ¿Borrar?');">
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
                {!! $examenes->links() !!}
            </div>
        </div>
    </div>
@endsection
