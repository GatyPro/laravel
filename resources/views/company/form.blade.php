<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_company') }}
            {{ Form::text('nombre_company', $company->nombre_company, ['class' => 'form-control' . ($errors->has('nombre_company') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Company']) }}
            {!! $errors->first('nombre_company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_company') }}
            {{ Form::text('direccion_company', $company->direccion_company, ['class' => 'form-control' . ($errors->has('direccion_company') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Company']) }}
            {!! $errors->first('direccion_company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto_company') }}
            {{ Form::text('contacto_company', $company->contacto_company, ['class' => 'form-control' . ($errors->has('contacto_company') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Company']) }}
            {!! $errors->first('contacto_company', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>