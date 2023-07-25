<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigoempleado') }}
            {{ Form::text('codigoempleado', $empleado->codigoempleado, ['class' => 'form-control' . ($errors->has('codigoempleado') ? ' is-invalid' : ''), 'placeholder' => 'Codigoempleado']) }}
            {!! $errors->first('codigoempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $empleado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $empleado->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuarios_id') }}
            {{ Form::text('usuarios_id', $empleado->usuarios_id, ['class' => 'form-control' . ($errors->has('usuarios_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuarios Id']) }}
            {!! $errors->first('usuarios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaingreso') }}
            {{ Form::text('fechaingreso', $empleado->fechaingreso, ['class' => 'form-control' . ($errors->has('fechaingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fechaingreso']) }}
            {!! $errors->first('fechaingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $empleado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuariomodifica') }}
            {{ Form::text('Usuariomodifica', $empleado->Usuariomodifica, ['class' => 'form-control' . ($errors->has('Usuariomodifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('Usuariomodifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>