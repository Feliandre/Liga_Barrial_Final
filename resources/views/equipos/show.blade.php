@extends('layouts.app')

@section('template_title')
    {{ $equipos->name ?? "{{ __('Show') Equipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $equipos->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Presidente Equipo Id:</strong>
                            {{ $equipos->presidente_equipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $equipos->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fundacion:</strong>
                            {{ $equipos->fecha_fundacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
