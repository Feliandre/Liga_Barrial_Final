<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_partido') }}
            {{ Form::text('fecha_partido', $vocalias->fecha_partido, ['class' => 'form-control' . ($errors->has('fecha_partido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Partido']) }}
            {!! $errors->first('fecha_partido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_equipo_local') }}
            {{ Form::text('nombre_equipo_local', $vocalias->nombre_equipo_local, ['class' => 'form-control' . ($errors->has('nombre_equipo_local') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Equipo Local']) }}
            {!! $errors->first('nombre_equipo_local', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_equipo_visitante') }}
            {{ Form::text('nombre_equipo_visitante', $vocalias->nombre_equipo_visitante, ['class' => 'form-control' . ($errors->has('nombre_equipo_visitante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Equipo Visitante']) }}
            {!! $errors->first('nombre_equipo_visitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_jugador_local') }}
            {{ Form::text('nombre_jugador_local', $vocalias->nombre_jugador_local, ['class' => 'form-control' . ($errors->has('nombre_jugador_local') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Jugador Local']) }}
            {!! $errors->first('nombre_jugador_local', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_jugador_visitante') }}
            {{ Form::text('nombre_jugador_visitante', $vocalias->nombre_jugador_visitante, ['class' => 'form-control' . ($errors->has('nombre_jugador_visitante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Jugador Visitante']) }}
            {!! $errors->first('nombre_jugador_visitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_torneo') }}
            {{ Form::text('nombre_torneo', $vocalias->nombre_torneo, ['class' => 'form-control' . ($errors->has('nombre_torneo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Torneo']) }}
            {!! $errors->first('nombre_torneo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_presidente') }}
            {{ Form::text('nombre_presidente', $vocalias->nombre_presidente, ['class' => 'form-control' . ($errors->has('nombre_presidente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Presidente']) }}
            {!! $errors->first('nombre_presidente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>