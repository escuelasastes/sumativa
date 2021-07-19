@extends('layouts.template')

@section('template_title')
    {{ $sisEval->name ?? 'Show Sis Eval' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sis Eval</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('sis-evals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ejes:</strong>
                            {{ $sisEval->ejes }}
                        </div>
                        <div class="form-group">
                            <strong>Competencias:</strong>
                            {{ $sisEval->competencias }}
                        </div>
                        <div class="form-group">
                            <strong>Criterios:</strong>
                            {{ $sisEval->criterios }}
                        </div>
                        <div class="form-group">
                            <strong>Ponderaciones:</strong>
                            {{ $sisEval->ponderaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $sisEval->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
