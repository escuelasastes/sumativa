@extends('layouts.template')

@section('template_title')
    {{ $siseval->name ?? 'Show Siseval' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Siseval</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-social btn-fill btn-reddit" href="{{ route('sisevals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ejes:</strong>
                            {{ $siseval->ejes }}
                        </div>
                        <div class="form-group">
                            <strong>Competencias:</strong>
                            {{ $siseval->competencias }}
                        </div>
                        <div class="form-group">
                            <strong>Criterios:</strong>
                            {{ $siseval->criterios }}
                        </div>
                        <div class="form-group">
                            <strong>Ponderaciones:</strong>
                            {{ $siseval->ponderaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $siseval->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
