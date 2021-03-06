@extends('layouts.template')

@section('title', 'SECUENCIA DE CONTROL')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">SECUENCIA DE CONTROL ADMINISTRATIVO</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('examenes.update', $examene->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('examene.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
