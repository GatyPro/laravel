<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre product Owner') }}
            {{ Form::text('nombre_productOwner', $productOwner->nombre_productOwner, ['class' => 'form-control' . ($errors->has('nombre_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Product owner']) }}
            {!! $errors->first('nombre_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia product Owner') }}
            {{ Form::text('experiencia_productOwner', $productOwner->experiencia_productOwner, ['class' => 'form-control' . ($errors->has('experiencia_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia Product owner']) }}
            {!! $errors->first('experiencia_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto product Owner') }}
            {{ Form::number('contacto_productOwner', $productOwner->contacto_productOwner, ['class' => 'form-control' . ($errors->has('contacto_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Product owner']) }}
            {!! $errors->first('contacto_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>