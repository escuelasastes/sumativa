@extends('layouts.template')

@section('template_title')
    {{ $planeacione->name ?? 'Show Planeacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Planeacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('planeaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materias Id:</strong>
                            {{ $planeacione->materias_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
