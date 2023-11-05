<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sprints_id') }}
            {{ Form::text('sprints_id', $task->sprints_id, ['class' => 'form-control' . ($errors->has('sprints_id') ? ' is-invalid' : ''), 'placeholder' => 'Sprints Id']) }}
            {!! $errors->first('sprints_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $task->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $task->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('developers_id') }}
            {{ Form::text('developers_id', $task->developers_id, ['class' => 'form-control' . ($errors->has('developers_id') ? ' is-invalid' : ''), 'placeholder' => 'Developers Id']) }}
            {!! $errors->first('developers_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>