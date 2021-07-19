@extends('layouts.template')

@section('template_title')
    Sis Eval
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sis Eval') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sis-evals.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Ejes</th>
										<th>Competencias</th>
										<th>Criterios</th>
										<th>Ponderaciones</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sisEvals as $sisEval)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sisEval->ejes }}</td>
											<td>{{ $sisEval->competencias }}</td>
											<td>{{ $sisEval->criterios }}</td>
											<td>{{ $sisEval->ponderaciones }}</td>
											<td>{{ $sisEval->total }}</td>

                                            <td>
                                                <form action="{{ route('sis-evals.destroy',$sisEval->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sis-evals.show',$sisEval->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sis-evals.edit',$sisEval->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $sisEvals->links() !!}
            </div>
        </div>
    </div>
@endsection
