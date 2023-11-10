<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Scrum Master') }}
            {{ Form::text('nombre_scrumMaster', $scrumMaster->nombre_scrumMaster, ['class' => 'form-control' . ($errors->has('nombre_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Scrum master']) }}
            {!! $errors->first('nombre_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('certificacion Scrum Master') }}
            {{ Form::text('certificacion_scrumMaster', $scrumMaster->certificacion_scrumMaster, ['class' => 'form-control' . ($errors->has('certificacion_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Certificacion Scrum master']) }}
            {!! $errors->first('certificacion_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto Scrum Master') }}
            {{ Form::number('contacto_scrumMaster', $scrumMaster->contacto_scrumMaster, ['class' => 'form-control' . ($errors->has('contacto_scrumMaster') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Scrum master']) }}
            {!! $errors->first('contacto_scrumMaster', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>