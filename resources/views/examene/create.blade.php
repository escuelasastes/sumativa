@extends('layouts.template')

@section('template_title')
    Create Examene
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><center><strong>SECUENCIA DE CONTROL ADMINISTRATIVO</strong></center></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('examenes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('examene.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
