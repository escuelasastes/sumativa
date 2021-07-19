@extends('layouts.template')

@section('template_title')
    Create Estrat In
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Estrat In</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estrat-ins.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estrat-in.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
