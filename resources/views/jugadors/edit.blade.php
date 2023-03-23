@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Jugador
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Jugador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('jugadors.update', $jugadors->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('jugadors.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
