<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('datosSeguimiento_BurndownChart') }}
            {{ Form::text('datosSeguimiento_BurndownChart', $burndownChart->datosSeguimiento_BurndownChart, ['class' => 'form-control' . ($errors->has('datosSeguimiento_BurndownChart') ? ' is-invalid' : ''), 'placeholder' => 'Datosseguimiento Burndownchart']) }}
            {!! $errors->first('datosSeguimiento_BurndownChart', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productOwner_id') }}
            {{ Form::text('productOwner_id', $burndownChart->productOwner_id, ['class' => 'form-control' . ($errors->has('productOwner_id') ? ' is-invalid' : ''), 'placeholder' => 'Productowner Id']) }}
            {!! $errors->first('productOwner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>