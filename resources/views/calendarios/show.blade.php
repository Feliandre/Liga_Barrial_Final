@extends('layouts.app')

@section('template_title')
    {{ $calendarios->name ?? "{{ __('Show') Calendario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calendario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calendarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Torneo Id:</strong>
                            {{ $calendarios->torneo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Partido Id:</strong>
                            {{ $calendarios->partido_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
