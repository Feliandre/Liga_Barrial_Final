<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('torneo_id') }}
            {{ Form::text('torneo_id', $partidos->torneo_id, ['class' => 'form-control' . ($errors->has('torneo_id') ? ' is-invalid' : ''), 'placeholder' => 'Torneo Id']) }}
            {!! $errors->first('torneo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('goles_local') }}
            {{ Form::text('goles_local', $partidos->goles_local, ['class' => 'form-control' . ($errors->has('goles_local') ? ' is-invalid' : ''), 'placeholder' => 'Goles Local']) }}
            {!! $errors->first('goles_local', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('goles_visitante') }}
            {{ Form::text('goles_visitante', $partidos->goles_visitante, ['class' => 'form-control' . ($errors->has('goles_visitante') ? ' is-invalid' : ''), 'placeholder' => 'Goles Visitante']) }}
            {!! $errors->first('goles_visitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipo_local_id') }}
            {{ Form::text('equipo_local_id', $partidos->equipo_local_id, ['class' => 'form-control' . ($errors->has('equipo_local_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipo Local Id']) }}
            {!! $errors->first('equipo_local_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipo_visitante_id') }}
            {{ Form::text('equipo_visitante_id', $partidos->equipo_visitante_id, ['class' => 'form-control' . ($errors->has('equipo_visitante_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipo Visitante Id']) }}
            {!! $errors->first('equipo_visitante_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $partidos->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $partidos->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>