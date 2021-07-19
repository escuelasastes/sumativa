@extends('layouts.template')
@section('title', 'Proyectos')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            <center><strong>PLANEACIÓN DE PROYECTOS Y/O PRÁCTICAS</strong></center>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('planpros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('planpro.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
