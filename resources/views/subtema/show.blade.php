@extends('layouts.template')

@section('template_title')
    {{ $subtema->name ?? 'Show Subtema' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <span class="card-title"><center><strong>Subtema(s)</strong></center></span>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('subtemas.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th> 
										<th class="text-center">Subtema y/o práctica</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">{{ $subtema->id }}</td>
											<td class="text-center">{{ $subtema->subtemas }}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </section>
@endsection
