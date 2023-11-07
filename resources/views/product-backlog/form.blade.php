<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_productbacklog') }}
            {{ Form::text('nombre_productbacklog', $ProductBacklog->nombre_productbacklog,
            ['class' => 'form-control' . ($errors->has('nombre_productbacklog') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre Productbacklog']) }}
            {!! $errors->first('nombre_productbacklog', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mb-3">
            {!! Form::label('tarea', 'Seleccione una tarea', ['class' => 'form-label']) !!}
            {!! Form::select('tarea', $task->pluck('description', 'description'), $ProductBacklog->tarea, [
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