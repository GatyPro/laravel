@extends('layouts.app')

@section('template_title')
    {{ $burndownChart->name ?? "{{ __('Show') Burndown Chart" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Burndown Chart</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('burndown-charts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Datosseguimiento Burndownchart:</strong>
                            {{ $burndownChart->datosSeguimiento_BurndownChart }}
                        </div>
                        <div class="form-group">
                            <strong>Productowner Id:</strong>
                            {{ $burndownChart->productOwner_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
