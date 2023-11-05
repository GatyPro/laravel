<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_productOwner') }}
            {{ Form::text('nombre_productOwner', $productOwner->nombre_productOwner, ['class' => 'form-control' . ($errors->has('nombre_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Productowner']) }}
            {!! $errors->first('nombre_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia_productOwner') }}
            {{ Form::text('experiencia_productOwner', $productOwner->experiencia_productOwner, ['class' => 'form-control' . ($errors->has('experiencia_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia Productowner']) }}
            {!! $errors->first('experiencia_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto_productOwner') }}
            {{ Form::text('contacto_productOwner', $productOwner->contacto_productOwner, ['class' => 'form-control' . ($errors->has('contacto_productOwner') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Productowner']) }}
            {!! $errors->first('contacto_productOwner', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>