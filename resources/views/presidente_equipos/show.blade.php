@extends('layouts.app')

@section('template_title')
    {{ $presidenteEquipos->user_id->name ?? "{{ __('Show') Presidente Equipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Presidente Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('presidente_equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $presidenteEquipos->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
