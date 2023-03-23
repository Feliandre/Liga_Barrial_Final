@extends('layouts.app')

@section('template_title')
    {{ $vocalias->name ?? "{{ __('Show') Vocalias" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vocalias</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vocaliases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Partido:</strong>
                            {{ $vocalias->fecha_partido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Equipo Local:</strong>
                            {{ $vocalias->nombre_equipo_local }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Equipo Visitante:</strong>
                            {{ $vocalias->nombre_equipo_visitante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Jugador Local:</strong>
                            {{ $vocalias->nombre_jugador_local }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Jugador Visitante:</strong>
                            {{ $vocalias->nombre_jugador_visitante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Torneo:</strong>
                            {{ $vocalias->nombre_torneo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Presidente:</strong>
                            {{ $vocalias->nombre_presidente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
