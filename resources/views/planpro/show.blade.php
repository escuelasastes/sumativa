@extends('layouts.template')

@section('template_title')
    {{ $planpro->name ?? 'Show Planpro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Planpro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('planpros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nopr:</strong>
                            {{ $planpro->noPr }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia:</strong>
                            {{ $planpro->competencia }}
                        </div>
                        <div class="form-group">
                            <strong>Ponderacion:</strong>
                            {{ $planpro->ponderacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
