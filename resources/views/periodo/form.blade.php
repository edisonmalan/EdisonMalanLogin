<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $periodo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechainicio') }}
            {{ Form::text('fechainicio', $periodo->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechafin') }}
            {{ Form::text('fechafin', $periodo->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $periodo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuariomodifica') }}
            {{ Form::text('usuariomodifica', $periodo->usuariomodifica, ['class' => 'form-control' . ($errors->has('usuariomodifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('usuariomodifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>