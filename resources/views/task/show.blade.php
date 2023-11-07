@extends('layouts.app')

@section('template_title')
    {{ $task->name ?? "{{ __('Show') Task" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sprints Id:</strong>
                            {{ $task->sprint->numero_sprint }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->description }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $task->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Developers Id:</strong>
                            {{ $task->developer->nombre_developer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
