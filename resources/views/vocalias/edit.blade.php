@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Vocalias
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Vocalias</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vocaliases.update', $vocalias->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vocalias.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
