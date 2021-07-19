@extends('layouts.template')

@section('template_title')
    Prodesper
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                <small>{{ __('Productos Esperados') }}</small>
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('prodespers.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
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
										<th class="text-right">Productos Esperados</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prodespers as $prodesper)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
											<td class="text-right">{{ $prodesper->prodEsp }}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('prodespers.destroy',$prodesper->id) }}" method="POST">
                                                <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('prodespers.show',$prodesper->id) }}">
                                                    <i class="material-icons">person</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('prodespers.edit',$prodesper->id) }}">
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
                {!! $prodespers->links() !!}
            </div>
        </div>
    </div>
@endsection
