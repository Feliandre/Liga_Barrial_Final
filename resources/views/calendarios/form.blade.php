<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('torneo_id') }}
            {{ Form::text('torneo_id', $calendarios->torneo_id, ['class' => 'form-control' . ($errors->has('torneo_id') ? ' is-invalid' : ''), 'placeholder' => 'Torneo Id']) }}
            {!! $errors->first('torneo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('partido_id') }}
            {{ Form::text('partido_id', $calendarios->partido_id, ['class' => 'form-control' . ($errors->has('partido_id') ? ' is-invalid' : ''), 'placeholder' => 'Partido Id']) }}
            {!! $errors->first('partido_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>