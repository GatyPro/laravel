@extends('layouts.app')

@section('template_title')
    {{ $developer->name ?? "{{ __('Show') Developer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Developer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('developers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Developer:</strong>
                            {{ $developer->nombre_developer }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Developer:</strong>
                            {{ $developer->rol_developer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
