@extends('layouts.app')

@section('template_title')
    {{ $jugadors->name ?? "{{ __('Show') Jugador" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Jugador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jugadors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $jugadors->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $jugadors->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $jugadors->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Id:</strong>
                            {{ $jugadors->equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $jugadors->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $jugadors->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Camiseta:</strong>
                            {{ $jugadors->numero_camiseta }}
                        </div>
                        <div class="form-group">
                            <strong>Goles:</strong>
                            {{ $jugadors->goles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
