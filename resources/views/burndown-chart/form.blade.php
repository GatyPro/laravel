<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('datos Seguimiento Burndown Chart') }}
            {{ Form::text('datosSeguimiento_BurndownChart', $burndownChart->datosSeguimiento_BurndownChart, ['class' => 'form-control' . ($errors->has('datosSeguimiento_BurndownChart') ? ' is-invalid' : ''), 'placeholder' => 'Datos seguimiento Burndown chart']) }}
            {!! $errors->first('datosSeguimiento_BurndownChart', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mb-3">
            {!! Form::label('Product Owner', 'Product owner', ['class' => 'form-label']) !!}
            {!! Form::select('productOwner_id', $po->pluck('nombre_productOwner', 'id'), $burndownChart->productOwner_id, [
            'class' => 'form-control',
            ]) !!}
            @error('tarea')
            <span class="text-danger">Este campo es requerido</span>
            @enderror
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>