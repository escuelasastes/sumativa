@extends('layouts.template')

@section('template_title')
    Update Sis Eval
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Sis Eval</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sis-evals.update', $sisEval->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sis-eval.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
