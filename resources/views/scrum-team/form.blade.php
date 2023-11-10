<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $scrumTeam->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {!! Form::label('sprint_id', 'Sprint', ['class' => 'form-label']) !!}
            {!! Form::select('sprint_id', $sprints->pluck('numero_sprint', 'id'), $scrumTeam->sprint_id, [
            'class' => 'form-control',
            ]) !!}
            @error('tarea')
            <span class="text-danger">Este campo es requerido</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('SprintActual') }}
            {{ Form::number('SprintActual', $scrumTeam->SprintActual, ['class' => 'form-control' . ($errors->has('SprintActual') ? ' is-invalid' : ''), 'placeholder' => 'Sprintactual']) }}
            {!! $errors->first('SprintActual', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>