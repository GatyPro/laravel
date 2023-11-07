<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group mb-3">
            {!! Form::label('sprints_id', 'Seleccione un sprint', ['class' => 'form-label']) !!}
            {!! Form::select('sprints_id', $sprint->pluck('numero_sprint', 'id'), $task->sprints_id, [
            'class' => 'form-control',
            ]) !!}
            @error('tarea')
            <span class="text-danger">Este campo es requerido</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $task->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {!! Form::label('developers_id', 'Seleccione una desarrollador', ['class' => 'form-label']) !!}
            {!! Form::select('developers_id', $dev->pluck('nombre_developer', 'id'), $task->developers_id, [
            'class' => 'form-control',
            ]) !!}
            @error('tarea')
            <span class="text-danger">Este campo es requerido</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            {!! Form::label('estado', 'Estado de la tarea', ['class' => 'form-label']) !!}
            {!! Form::select('estado',['En curso'=>'En curso', 'Por realizar'=>'Por realizar'], $task->estado, [
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