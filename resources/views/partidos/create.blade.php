@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Partido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Partido</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('partidos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('partidos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
