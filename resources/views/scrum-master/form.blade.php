<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_scrumMaster') }}
            {{ Form::text('nombre_scrumMaster', $scrumMaster->nombre_scrumMaster, ['class' => 'form-control' . ($errors->has('nombre_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Scrummaster']) }}
            {!! $errors->first('nombre_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('certificacion_scrumMaster') }}
            {{ Form::text('certificacion_scrumMaster', $scrumMaster->certificacion_scrumMaster, ['class' => 'form-control' . ($errors->has('certificacion_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Certificacion Scrummaster']) }}
            {!! $errors->first('certificacion_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto_scrumMaster') }}
            {{ Form::text('contacto_scrumMaster', $scrumMaster->contacto_scrumMaster, ['class' => 'form-control' . ($errors->has('contacto_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Scrummaster']) }}
            {!! $errors->first('contacto_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>