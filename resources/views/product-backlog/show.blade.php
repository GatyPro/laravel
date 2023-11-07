@extends('layouts.app')

@section('template_title')
    {{ $productBacklog->name ?? "{{ __('Show') Product Backlog" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product Backlog</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product_backlogs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Productbacklog:</strong>
                            {{ $ProductBacklog->nombre_productbacklog }}
                        </div>
                        <div class="form-group">
                            <strong>Tarea:</strong>
                            {{ $ProductBacklog->tarea }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
