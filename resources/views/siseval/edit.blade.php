@extends('layouts.template')

@section('title', 'Sistema Evaluación')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><center><strong>SISTEMA DE EVALUACIÓN</strong></center></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sisevals.update', $siseval->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('siseval.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
