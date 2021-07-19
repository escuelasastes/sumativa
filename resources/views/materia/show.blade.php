@extends('layouts.template')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Competenciaa:</strong>
                            {{ $materia->competenciaA }}
                        </div>
                        <div class="form-group">
                            <strong>Fuentes:</strong>
                            {{ $materia->fuentes }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades Id:</strong>
                            {{ $materia->unidades_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sisevals Id:</strong>
                            {{ $materia->sisevals_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
