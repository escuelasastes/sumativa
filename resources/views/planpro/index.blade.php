@extends('layouts.template')

@section('template_title')
    Planpro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">
                                <center><strong>PLANEACIÓN DE PROYECTOS Y/O PRÁCTICAS</strong></center>
                            </span>
                             <div class="float-right">
                                <a href="{{ route('planpros.create') }}" class="btn btn-social btn-fill btn-facebook"  data-placement="left">
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
										<th class="text-center"><strong>No. de Proyecto/Práctica</strong></th>
                                        <th class="text-right">Unidad</th>
										<th class="text-center">Competencia</th>
										<th class="text-right">Ponderacion</th>
                                        <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planpros as $planpro)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
											<td class="text-center">{{ $planpro->noPr }}</td>
											<td class="text-center">{{ $planpro->competencia }}</td>
											<td class="text-center">{{ $planpro->ponderacion }}</td>

                                            <td class="td-actions text-center">
                                                <form action="{{ route('planpros.destroy',$planpro->id) }}" method="POST">
                                                    <a class="btn btn-info btn-just-icon btn-sm" rel="tooltip" href="{{ route('planpros.show',$planpro->id) }}">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a class="btn btn-success btn-just-icon btn-sm" rel="tooltip" href="{{ route('planpros.edit',$planpro->id) }}">
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
                {!! $planpros->links() !!}
            </div>
        </div>
    </div>
@endsection
