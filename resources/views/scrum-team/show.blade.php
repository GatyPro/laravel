@extends('layouts.app')

@section('template_title')
    {{ $scrumTeam->name ?? "{{ __('Show') Scrum Team" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Scrum Team</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('scrum-teams.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $scrumTeam->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sprint Id:</strong>
                            {{ $scrumTeam->sprint_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sprintactual:</strong>
                            {{ $scrumTeam->SprintActual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
