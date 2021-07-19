@extends('layouts.template')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Unidade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de unidad:</strong>
                            {{ $unidade->numUnidad }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia especifica del tema:</strong>
                            {{ $unidade->competEspTema }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de la unidad:</strong>
                            {{ $unidade->nomunidad }}
                        </div>
                        <div class="form-group">
                            <strong>Temas :</strong>
                            {{ $unidade->temas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Subtemas :</strong>
                            {{ $unidade->subtemas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estrategias de instruccion:</strong>
                            {{ $unidade->estrat_ins_id }}
                        </div>
                        <div class="form-group">
                            <strong>Productos esperados:</strong>
                            {{ $unidade->prodespers_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema de evaluacions:</strong>
                            {{ $unidade->sisevals_id }}
                        </div>
                        <div class="form-group">
                            <strong>Examenes:</strong>
                            {{ $unidade->examenes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Plan de proyectos:</strong>
                            {{ $unidade->planpros_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
