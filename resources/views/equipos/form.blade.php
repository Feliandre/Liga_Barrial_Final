<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $equipos->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presidente_equipo_id') }}
            {{ Form::text('presidente_equipo_id', $equipos->presidente_equipo_id, ['class' => 'form-control' . ($errors->has('presidente_equipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Presidente Equipo Id']) }}
            {!! $errors->first('presidente_equipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('logo', $equipos->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fundacion') }}
            {{ Form::text('fecha_fundacion', $equipos->fecha_fundacion, ['class' => 'form-control' . ($errors->has('fecha_fundacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fundacion']) }}
            {!! $errors->first('fecha_fundacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>