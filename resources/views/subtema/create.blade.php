@extends('layouts.template')

@section('template_title')
    Create Subtema
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><center><strong>Subtema(s)</strong></center></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subtemas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subtema.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
