@extends('layouts.app')

@section('template_title')
    {{ $partidos->name ?? "{{ __('Show') Partido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Partido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Torneo Id:</strong>
                            {{ $partidos->torneo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Goles Local:</strong>
                            {{ $partidos->goles_local }}
                        </div>
                        <div class="form-group">
                            <strong>Goles Visitante:</strong>
                            {{ $partidos->goles_visitante }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Local Id:</strong>
                            {{ $partidos->equipo_local_id }}
                        </div>
                        <div class="form-group">
                            <strong>Equipo Visitante Id:</strong>
                            {{ $partidos->equipo_visitante_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $partidos->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $partidos->hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
