@extends('layouts.app')

@section('template_title')
    {{ $scrumMaster->name ?? "{{ __('Show') Scrum Master" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Scrum Master</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('scrum-masters.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Scrummaster:</strong>
                            {{ $scrumMaster->nombre_scrumMaster }}
                        </div>
                        <div class="form-group">
                            <strong>Certificacion Scrummaster:</strong>
                            {{ $scrumMaster->certificacion_scrumMaster }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Scrummaster:</strong>
                            {{ $scrumMaster->contacto_scrumMaster }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
