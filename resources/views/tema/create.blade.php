@extends('layouts.template')

@section('title', 'Tema(s)')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><center><strong>Tema(s)</strong></center></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('temas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('tema.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
