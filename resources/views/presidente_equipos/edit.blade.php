@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Presidente Equipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Presidente Equipo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('presidente_equipos.update', $presidenteEquipos->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('presidente_equipos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
