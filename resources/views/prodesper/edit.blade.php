@extends('layouts.template')

@section('title', 'Producto(s)')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><center><strong>Producto (s) y/o Aprendizaje(s)Esperado(s)</strong></center></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('prodespers.update', $prodesper->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('prodesper.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
