<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_developer') }}
            {{ Form::text('nombre_developer', $developer->nombre_developer, ['class' => 'form-control' . ($errors->has('nombre_developer') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Developer']) }}
            {!! $errors->first('nombre_developer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rol_developer') }}
            {{ Form::text('rol_developer', $developer->rol_developer, ['class' => 'form-control' . ($errors->has('rol_developer') ? ' is-invalid' : ''), 'placeholder' => 'Rol Developer']) }}
            {!! $errors->first('rol_developer', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>