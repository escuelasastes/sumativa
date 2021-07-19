@extends('layouts.template')

@section('template_title')
    Update Planeacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Planeacione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('planeaciones.update', $planeacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('planeacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
