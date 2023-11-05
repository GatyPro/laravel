<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_productbacklog') }}
            {{ Form::text('nombre_productbacklog', $productBacklog->nombre_productbacklog, ['class' => 'form-control' . ($errors->has('nombre_productbacklog') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Productbacklog']) }}
            {!! $errors->first('nombre_productbacklog', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarea') }}
            {{ Form::text('tarea', $productBacklog->tarea, ['class' => 'form-control' . ($errors->has('tarea') ? ' is-invalid' : ''), 'placeholder' => 'Tarea']) }}
            {!! $errors->first('tarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>