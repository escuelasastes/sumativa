@extends('layouts.app')

@section('template_title')
    Update Planpro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Planpro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('planpros.update', $planpro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('planpro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
