@extends('layouts.template')

@section('template_title')
    Siseval
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="card-title"><center><strong>SISTEMA DE EVALUACIÓN</strong></center></span>

                             <div class="float-right">
                                <a href="{{ route('sisevals.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
										<th class="text-center">Ejes</th>
										<th class="text-center">Competencias</th>
										<th class="text-center">Factores y/o Criterios de Evaluación</th>
										<th class="text-center">Ponderación</th>
										<th class="text-center">Total</th>
                                        <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sisevals as $siseval)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
											<td class="text-left">{{ $siseval->ejes }}</td>
											<td>{{ $siseval->competencias }}</td>
											<td>{{ $siseval->criterios }}</td>
											<td class="text-center">{{ $siseval->ponderaciones }}</td>
										    <td class="text-center">{{ $siseval->total }}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('sisevals.destroy',$siseval->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('sisevals.show',$siseval->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('sisevals.edit',$siseval->id) }}">
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
                {!! $sisevals->links() !!}
            </div>
        </div>
    </div>
@endsection
